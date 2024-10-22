<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\BaseControllers\BackendController;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PartnerController extends BackendController
{
    private int $paginate_limit;
    
    public function __construct()
    {
        $this->addBreadcrumbs('Dashboard', route('dashboard'), 'ri-home-2-line');
        $this->addBreadcrumbs('Partner');

        $this->paginate_limit = config('commonData.paginate_limit');
    }

    public function index()
    {
        $this->setPageTitle("Partner");
        $this->setActiveMenu('partners');
        return  $this->view('backend.partner.index');
    }

    public function indexFiltered(Request $request)
    {
        $keyword_filtered = $request->keyword_filtered;
        $data['partners'] = Partner::where('deleted', Partner::DELETED_NO)
            ->where('status', Partner::STATUS_ACTIVE)
            ->where(function ($q) use ($keyword_filtered){
                if ($keyword_filtered !=''){
                    $q->where('name', 'like', '%'.$keyword_filtered.'%');
                }
            })
            ->orderBy('id', 'desc')->paginate($this->paginate_limit);

        $view = $this->view('backend.partner._index_filtered')
            ->with($data)
            ->render();

        return $this->returnAjaxSuccess(['view' => $view]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $check_duplicate = Partner::where('name', $request->name)
                ->where('deleted', Partner::DELETED_NO)
                ->where('status', Partner::STATUS_ACTIVE)
                ->first();
            if (!empty($check_duplicate)) {
                throw new \Exception("Partner already exists");
            }

            $imagePath = null;
            if ($request->has('image')) {
                $image = $request->input('image');
                $isBase64 = false;
                if (preg_match('/^data:image\/(\w+);base64,/', $image)) {
                    $isBase64 = true;
                }
                $uploadPath = 'partner';
                if ($isBase64) {
                    $result = ImageUploadHelper::storeBase64Image($image, $uploadPath, null, 'webp');
                } else {
                    $file = $request->file('image');
                    $result = ImageUploadHelper::store($file, $uploadPath, null, 'webp');
                }

                $imagePath = $result['path'];
            }

            $partner = new Partner();
            $partner->name = $request->name;
            $partner->image = $imagePath;
            $partner->created_by = Auth::user()->id;
            $partner->created_at = now();
            $partner->updated_by = Auth::user()->id;
            $partner->updated_at = now();
            $partner->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Partner created successfully');
    }

    public function edit($id)
    {
        try {
            $data['item'] = Partner::where('id', $id)
                ->where('deleted', Partner::DELETED_NO)
                ->where('status', Partner::STATUS_ACTIVE)
                ->first();
            if (!$data['item']) {
                throw new \Exception('Partner not found');
            }

            $view = $this->view('backend.partner._edit_data')
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
                'name' => 'required|string'
            ]);

            $partner = Partner::where('id', $id)
                ->where('deleted', Partner::DELETED_NO)
                ->where('status', Partner::STATUS_ACTIVE)
                ->first();
            if (!$partner) {
                throw new \Exception('Partner not found');
            }

            $check_duplicate = Partner::where('name', $request->name)
                    ->where('deleted', Partner::DELETED_NO)
                    ->where('status', Partner::STATUS_ACTIVE)
                    ->where('id', '!=', $id)
                    ->first();
            if (!empty($check_duplicate)) {
                throw new \Exception("Partner already exists");
            }

            $imagePath = $partner->image; 
            if ($request->has('image')) {
                $image = $request->input('image');
                $isBase64 = false;
                if (preg_match('/^data:image\/(\w+);base64,/', $image)) {
                    $isBase64 = true;
                }
                $uploadPath = 'partner';
                if ($isBase64) {
                    $result = ImageUploadHelper::storeBase64Image($image, $uploadPath, null, 'webp');
                } else {
                    $file = $request->file('image');
                    $result = ImageUploadHelper::store($file, $uploadPath, null, 'webp');
                }
                $imagePath = $result['path'];
            }

            $partner->name = $request->name;
            $partner->image = $imagePath;
            $partner->updated_by = Auth::user()->id;
            $partner->updated_at = now();
            $partner->save();
            
        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Partner updated successfully');
    }

    public function delete($id)
    {
        try {
            $partner = Partner::where('id', $id)
                ->where('deleted', Partner::DELETED_NO)
                ->first();
            if (!$partner) {
                throw new \Exception('Partner not found');
            }
            $partner->deleted = Partner::DELETED_YES;
            $partner->deleted_by = Auth::user()->id;
            $partner->deleted_at = now();
            $partner->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Partner deleted successfully');
    }
}
