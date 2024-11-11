<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\BaseControllers\BackendController;
use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TeamController extends BackendController
{
    private int $paginate_limit;
    
    public function __construct()
    {
        $this->addBreadcrumbs('Dashboard', route('dashboard'), 'ri-home-2-line');
        $this->addBreadcrumbs('Team');

        $this->paginate_limit = config('commonData.paginate_limit');
    }

    public function index()
    {
        $this->setPageTitle("Team Members");
        $this->setActiveMenu('team');

        return  $this->view('backend.team.index');
    }

    public function indexFiltered(Request $request)
    {
        $keyword_filtered = $request->keyword_filtered;
        $data['team_members'] = TeamMember::where('deleted', TeamMember::DELETED_NO)
            ->where('status', TeamMember::STATUS_ACTIVE)
            ->where(function ($q) use ($keyword_filtered){
                if ($keyword_filtered !=''){
                    $q->where('name', 'like', '%'.$keyword_filtered.'%');
                }
            })
            ->orderBy('id', 'desc')->paginate($this->paginate_limit);

        $view = $this->view('backend.team._index_filtered')
            ->with($data)
            ->render();

        return $this->returnAjaxSuccess(['view' => $view]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'designation' => 'required|string',
            ]);

            $check_duplicate = TeamMember::where('name', $request->name)
                ->where('designation', $request->designation)
                ->where('deleted', TeamMember::DELETED_NO)
                ->where('status', TeamMember::STATUS_ACTIVE)
                ->first();

            if (!empty($check_duplicate)) {
                throw new \Exception("Team member already exists");
            }

            $imagePath = null;
            if ($request->has('image')) {
                $image = $request->input('image');
                $isBase64 = false;
                if (preg_match('/^data:image\/(\w+);base64,/', $image)) {
                    $isBase64 = true;
                }
                $uploadPath = 'team';
                if ($isBase64) {
                    $result = ImageUploadHelper::storeBase64Image($image, $uploadPath, null, 'webp');
                } else {
                    $file = $request->file('image');
                    $result = ImageUploadHelper::store($file, $uploadPath, null, 'webp');
                }

                $imagePath = $result['path'];
            }

            $team = new TeamMember();
            $team->name = $request->name;
            $team->slug = Str::slug($request->name);
            $team->designation = $request->designation;
            $team->email = $request->email;
            $team->linkedin_url = $request->linkedin_url;
            $team->facebook_url = $request->facebook_url;
            $team->twitter_url = $request->twitter_url;
            $team->image = $imagePath;
            $team->created_by = Auth::user()->id;
            $team->created_at = now();
            $team->updated_by = Auth::user()->id;
            $team->updated_at = now();
            $team->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Team member created successfully');
    }

    public function edit($id)
    {
        try {
            $data['item'] = TeamMember::where('id', $id)
                ->where('deleted', TeamMember::DELETED_NO)
                ->where('status', TeamMember::STATUS_ACTIVE)
                ->first();
                
            if (!$data['item']) {
                throw new \Exception('Team member not found');
            }

            $view = $this->view('backend.team._edit_data')
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
                'designation' => 'required|string',
            ]);

            $team = TeamMember::where('id', $id)
                ->where('deleted', TeamMember::DELETED_NO)
                ->where('status', TeamMember::STATUS_ACTIVE)
                ->first();
            if (!$team) {
                throw new \Exception('Team member not found');
            }

            $check_duplicate = TeamMember::where('name', $request->name)
                ->where('designation', $request->designation)
                ->where('deleted', TeamMember::DELETED_NO)
                ->where('status', TeamMember::STATUS_ACTIVE)
                ->where('id', '!=', $id)
                ->first();

            if (!empty($check_duplicate)) {
                throw new \Exception("Team member already exists");
            }

            $imagePath = $team->image;
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

            $team->name = $request->name;
            $team->slug = Str::slug($request->name);
            $team->designation = $request->designation;
            $team->email = $request->email;
            $team->linkedin_url = $request->linkedin_url;
            $team->facebook_url = $request->facebook_url;
            $team->twitter_url = $request->twitter_url;
            $team->image = $imagePath;
            $team->created_by = Auth::user()->id;
            $team->created_at = now();
            $team->updated_by = Auth::user()->id;
            $team->updated_at = now();
            $team->save();
            
        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Team member updated successfully');
    }

    public function delete($id)
    {
        try {
            $team = TeamMember::where('id', $id)
                ->where('deleted', TeamMember::DELETED_NO)
                ->first();
            if (!$team) {
                throw new \Exception('Team member not found');
            }
            $team->deleted = TeamMember::DELETED_YES;
            $team->deleted_by = Auth::user()->id;
            $team->deleted_at = now();
            $team->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Team member deleted successfully');
    }
}
