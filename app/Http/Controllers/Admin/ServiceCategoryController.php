<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseControllers\BackendController;
use App\Http\Controllers\Controller;
use App\Models\BusinessType;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ServiceCategoryController extends BackendController
{
    private int $paginate_limit;
    
    public function __construct()
    {
        $this->addBreadcrumbs('Dashboard', route('dashboard'), 'ri-home-2-line');
        $this->addBreadcrumbs('Category');

        $this->paginate_limit = config('commonData.paginate_limit');
    }

    public function index()
    {
        $this->setPageTitle("Service Category");
        $this->setActiveMenu('service-category');
        $data['business_types'] = BusinessType::get();

        return  $this->view('backend.category.index')->with($data);
    }

    public function indexFiltered(Request $request)
    {
        $keyword_filtered = $request->keyword_filtered;
        $data['categories'] = ServiceCategory::where('deleted', ServiceCategory::DELETED_NO)
            ->where('status', ServiceCategory::STATUS_ACTIVE)
            ->where(function ($q) use ($keyword_filtered){
                if ($keyword_filtered !=''){
                    $q->where('name', 'like', '%'.$keyword_filtered.'%');
                }
            })
            ->orderBy('id', 'desc')->paginate($this->paginate_limit);

        $view = $this->view('backend.category._index_filtered')
            ->with($data)
            ->render();

        return $this->returnAjaxSuccess(['view' => $view]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'business_type' => 'required',
                'name' => 'required|string',
            ]);

            $check_duplicate = ServiceCategory::where('name', $request->name)
                ->where('business_type_id', $request->business_type)
                ->where('deleted', ServiceCategory::DELETED_NO)
                ->where('status', ServiceCategory::STATUS_ACTIVE)
                ->first();
            if (!empty($check_duplicate)) {
                throw new \Exception("Service category already exists");
            }

            $category = new ServiceCategory();
            $category->business_type_id = $request->business_type;
            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->created_by = Auth::user()->id;
            $category->created_at = now();
            $category->updated_by = Auth::user()->id;
            $category->updated_at = now();
            $category->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Service category created successfully');
    }

    public function edit($id)
    {
        try {
            $data['business_types'] = BusinessType::get();

            $data['item'] = ServiceCategory::where('id', $id)
                ->where('deleted', ServiceCategory::DELETED_NO)
                ->where('status', ServiceCategory::STATUS_ACTIVE)
                ->first();
                
            if (!$data['item']) {
                throw new \Exception('Service category not found');
            }

            $view = $this->view('backend.category._edit_data')
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
                'business_type' => 'required',
                'name' => 'required|string'
            ]);

            $category = ServiceCategory::where('id', $id)
                ->where('deleted', ServiceCategory::DELETED_NO)
                ->where('status', ServiceCategory::STATUS_ACTIVE)
                ->first();
            if (!$category) {
                throw new \Exception('Service category not found');
            }

            $check_duplicate = ServiceCategory::where('name', $request->name)
                ->where('business_type_id', $request->business_type)
                ->where('deleted', ServiceCategory::DELETED_NO)
                ->where('status', ServiceCategory::STATUS_ACTIVE)
                ->where('id', '!=', $id)
                ->first();

            if (!empty($check_duplicate)) {
                throw new \Exception("Service category already exists");
            }

            $category->business_type_id = $request->business_type;
            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->updated_by = Auth::user()->id;
            $category->updated_at = now();
            $category->save();
            
        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Service category updated successfully');
    }

    public function delete($id)
    {
        try {
            $category = ServiceCategory::where('id', $id)
                ->where('deleted', ServiceCategory::DELETED_NO)
                ->first();
            if (!$category) {
                throw new \Exception('Service category not found');
            }
            $category->deleted = ServiceCategory::DELETED_YES;
            $category->deleted_by = Auth::user()->id;
            $category->deleted_at = now();
            $category->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Service category deleted successfully');
    }
}
