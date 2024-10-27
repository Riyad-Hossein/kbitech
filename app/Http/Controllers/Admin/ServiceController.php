<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\BaseControllers\BackendController;
use App\Http\Controllers\Controller;
use App\Models\BusinessType;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ServiceController extends BackendController
{
    private int $paginate_limit;
    
    public function __construct()
    {
        $this->addBreadcrumbs('Dashboard', route('dashboard'), 'ri-home-2-line');
        $this->addBreadcrumbs('Service');

        $this->paginate_limit = config('commonData.paginate_limit');
    }

    public function index()
    {
        $this->setPageTitle("Service");
        $this->setActiveMenu('service');
        $data['business_types'] = BusinessType::get();

        return  $this->view('backend.service.index')->with($data);
    }

    public function indexFiltered(Request $request)
    {
        $keyword_filtered = $request->keyword_filtered;
        $data['categories'] = Service::where('deleted', Service::DELETED_NO)
            ->where('status', Service::STATUS_ACTIVE)
            ->where(function ($q) use ($keyword_filtered){
                if ($keyword_filtered !=''){
                    $q->where('name', 'like', '%'.$keyword_filtered.'%');
                }
            })
            ->orderBy('id', 'desc')->paginate($this->paginate_limit);

        $view = $this->view('backend.service._index_filtered')
            ->with($data)
            ->render();

        return $this->returnAjaxSuccess(['view' => $view]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'business_type' => 'required',
                'service_category' => 'required',
                'name' => 'required|string',
            ]);

            $check_duplicate = Service::where('name', $request->name)
                ->where('business_type_id', $request->business_type)
                ->where('service_category_id', $request->service_category)
                ->where('deleted', Service::DELETED_NO)
                ->where('status', Service::STATUS_ACTIVE)
                ->first();

            if (!empty($check_duplicate)) {
                throw new \Exception("Service already exists");
            }

            $imagePath = null;
            if ($request->has('image')) {
                $image = $request->input('image');
                $isBase64 = false;
                if (preg_match('/^data:image\/(\w+);base64,/', $image)) {
                    $isBase64 = true;
                }
                $uploadPath = 'service';
                if ($isBase64) {
                    $result = ImageUploadHelper::storeBase64Image($image, $uploadPath, null, 'webp');
                } else {
                    $file = $request->file('image');
                    $result = ImageUploadHelper::store($file, $uploadPath, null, 'webp');
                }

                $imagePath = $result['path'];
            }

            $service = new Service();
            $service->business_type_id = $request->business_type;
            $service->service_category_id = $request->service_category;
            $service->name = $request->name;
            $service->slug = Str::slug($request->name);
            $service->short_description = $request->short_description;
            $service->long_description = $request->long_description;
            $service->image = $imagePath;
            $service->created_by = Auth::user()->id;
            $service->created_at = now();
            $service->updated_by = Auth::user()->id;
            $service->updated_at = now();
            $service->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Service created successfully');
    }

    public function edit($id)
    {
        try {
            $data['business_types'] = BusinessType::get();

            $data['item'] = Service::where('id', $id)
                ->where('deleted', Service::DELETED_NO)
                ->where('status', Service::STATUS_ACTIVE)
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

            $service = Service::where('id', $id)
                ->where('deleted', Service::DELETED_NO)
                ->where('status', Service::STATUS_ACTIVE)
                ->first();
            if (!$service) {
                throw new \Exception('Service category not found');
            }

            $check_duplicate = Service::where('name', $request->name)
                ->where('business_type_id', $request->business_type)
                ->where('deleted', Service::DELETED_NO)
                ->where('status', Service::STATUS_ACTIVE)
                ->where('id', '!=', $id)
                ->first();

            if (!empty($check_duplicate)) {
                throw new \Exception("Service category already exists");
            }

            $service->business_type_id = $request->business_type;
            $service->name = $request->name;
            $service->slug = Str::slug($request->name);
            $service->updated_by = Auth::user()->id;
            $service->updated_at = now();
            $service->save();
            
        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Service category updated successfully');
    }

    public function delete($id)
    {
        try {
            $service = Service::where('id', $id)
                ->where('deleted', Service::DELETED_NO)
                ->first();
            if (!$service) {
                throw new \Exception('Service category not found');
            }
            $service->deleted = Service::DELETED_YES;
            $service->deleted_by = Auth::user()->id;
            $service->deleted_at = now();
            $service->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Service category deleted successfully');
    }
}
