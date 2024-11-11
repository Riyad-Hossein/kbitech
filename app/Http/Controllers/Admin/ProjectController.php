<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\BaseControllers\BackendController;
use App\Http\Controllers\Controller;
use App\Models\BusinessType;
use App\Models\Project;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProjectController extends BackendController
{
    private int $paginate_limit;
    
    public function __construct()
    {
        $this->addBreadcrumbs('Dashboard', route('dashboard'), 'ri-home-2-line');
        $this->addBreadcrumbs('Project');

        $this->paginate_limit = config('commonData.paginate_limit');
    }

    public function index()
    {
        $this->setPageTitle("Project");
        $this->setActiveMenu('project');
        $data['business_types'] = BusinessType::get();

        return  $this->view('backend.project.index')->with($data);
    }

    public function indexFiltered(Request $request)
    {
        $keyword_filtered = $request->keyword_filtered;
        $data['projects'] = Project::where('deleted', Project::DELETED_NO)
            ->where('status', Project::STATUS_ACTIVE)
            ->where(function ($q) use ($keyword_filtered){
                if ($keyword_filtered !=''){
                    $q->where('name', 'like', '%'.$keyword_filtered.'%');
                }
            })
            ->orderBy('id', 'desc')->paginate($this->paginate_limit);

        $view = $this->view('backend.project._index_filtered')
            ->with($data)
            ->render();

        return $this->returnAjaxSuccess(['view' => $view]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'client' => 'required|string',
            ]);

            $check_duplicate = Project::where('name', $request->name)
                ->where('business_type_id', $request->business_type)
                ->where('project_category_id', $request->project_category)
                ->where('deleted', Project::DELETED_NO)
                ->where('status', Project::STATUS_ACTIVE)
                ->first();

            if (!empty($check_duplicate)) {
                throw new \Exception("Project already exists");
            }

            $imagePath = null;
            if ($request->has('image')) {
                $image = $request->input('image');
                $isBase64 = false;
                if (preg_match('/^data:image\/(\w+);base64,/', $image)) {
                    $isBase64 = true;
                }
                $uploadPath = 'project';
                if ($isBase64) {
                    $result = ImageUploadHelper::storeBase64Image($image, $uploadPath, null, 'webp');
                } else {
                    $file = $request->file('image');
                    $result = ImageUploadHelper::store($file, $uploadPath, null, 'webp');
                }

                $imagePath = $result['path'];
            }

            $project = new Project();
            $project->business_type_id = $request->business_type;
            $project->project_category_id = $request->project_category;
            $project->name = $request->name;
            $project->slug = Str::slug($request->name);
            $project->client = $request->client;
            $project->project_date = $request->project_date;
            $project->team_members = $request->team_members;
            $project->location = $request->location;
            $project->details = $request->details;
            $project->image = $imagePath;
            $project->created_by = Auth::user()->id;
            $project->created_at = now();
            $project->updated_by = Auth::user()->id;
            $project->updated_at = now();
            $project->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Project created successfully');
    }

    public function edit($id)
    {
        try {
            $data['business_types'] = BusinessType::get();

            $data['item'] = Project::where('id', $id)
                ->where('deleted', Project::DELETED_NO)
                ->where('status', Project::STATUS_ACTIVE)
                ->first();
                
            if (!$data['item']) {
                throw new \Exception('Project not found');
            }

            $data['service_categories'] = ServiceCategory::where('business_type_id', $data['item']->business_type_id)
                ->where('deleted', ServiceCategory::DELETED_NO)
                ->where('status', ServiceCategory::STATUS_ACTIVE)
                ->get();

            $view = $this->view('backend.project._edit_data')
                ->with($data)
                ->render();

            return $this->returnAjaxSuccess(['view' => $view]);
        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'client' => 'required|string',
            ]);

            $project = Project::where('id', $id)
                ->where('deleted', Project::DELETED_NO)
                ->where('status', Project::STATUS_ACTIVE)
                ->first();
            if (!$project) {
                throw new \Exception('Project not found');
            }

            $check_duplicate = Project::where('name', $request->name)
                ->where('business_type_id', $request->business_type)
                ->where('deleted', Project::DELETED_NO)
                ->where('status', Project::STATUS_ACTIVE)
                ->where('id', '!=', $id)
                ->first();

            if (!empty($check_duplicate)) {
                throw new \Exception("Project already exists");
            }

            $imagePath = $project->image;
            if ($request->has('image')) {
                $image = $request->input('image');
                $isBase64 = false;
                if (preg_match('/^data:image\/(\w+);base64,/', $image)) {
                    $isBase64 = true;
                }
                $uploadPath = 'project';
                if ($isBase64) {
                    $result = ImageUploadHelper::storeBase64Image($image, $uploadPath, null, 'webp');
                } else {
                    $file = $request->file('image');
                    $result = ImageUploadHelper::store($file, $uploadPath, null, 'webp');
                }

                $imagePath = $result['path'];
            }

            $project->business_type_id = $request->business_type;
            $project->project_category_id = $request->project_category;
            $project->name = $request->name;
            $project->slug = Str::slug($request->name);
            $project->client = $request->client;
            $project->project_date = $request->project_date;
            $project->team_members = $request->team_members;
            $project->location = $request->location;
            $project->details = $request->details;
            $project->image = $imagePath;
            $project->created_by = Auth::user()->id;
            $project->created_at = now();
            $project->updated_by = Auth::user()->id;
            $project->updated_at = now();
            $project->save();
            
        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Project updated successfully');
    }

    public function delete($id)
    {
        try {
            $project = Project::where('id', $id)
                ->where('deleted', Project::DELETED_NO)
                ->first();
            if (!$project) {
                throw new \Exception('Project not found');
            }
            $project->deleted = Project::DELETED_YES;
            $project->deleted_by = Auth::user()->id;
            $project->deleted_at = now();
            $project->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Project deleted successfully');
    }
}
