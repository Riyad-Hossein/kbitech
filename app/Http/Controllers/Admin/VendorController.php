<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseControllers\BackendController;
use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorController extends BackendController
{
    private int $paginate_limit;
    
    public function __construct()
    {
        $this->paginate_limit = config('commonData.paginate_limit');
    }

    public function index()
    {
        $this->addBreadcrumbs('Dashboard', route('dashboard'), 'ri-home-2-line');
        $this->addBreadcrumbs('Vendor');
        $this->setPageTitle("Vendor On-Boarding");
        $this->setActiveMenu('Vendor On-Boarding');
        return  $this->view('backend.vendor.index');
    }

    public function indexFiltered(Request $request)
    {
        $keyword_filtered = $request->keyword_filtered;
        $data['vendors'] = Vendor::where('deleted', Vendor::DELETED_NO)
            ->where('status', Vendor::STATUS_ACTIVE)
            ->where(function ($q) use ($keyword_filtered){
                if ($keyword_filtered !=''){
                    $q->where('company_name', 'like', '%'.$keyword_filtered.'%')
                        ->orWhere('email', 'like', '%'.$keyword_filtered.'%')
                        ->orWhere('phone', 'like', '%'.$keyword_filtered.'%');
                }
            })
            ->orderBy('id', 'desc')->paginate($this->paginate_limit);

        $view = $this->view('backend.vendor._index_filtered')
            ->with($data)
            ->render();

        return $this->returnAjaxSuccess(['view' => $view]);
    }

    public function viewVendor($id){
        $this->addBreadcrumbs('Dashboard', route('dashboard'), 'ri-home-2-line');
        $this->addBreadcrumbs('Vendor View');
        $this->setPageTitle("Vendor On-Boarding");

        $data['vendor'] = Vendor::with('service')
            ->where('id', $id)
            ->where('deleted', Vendor::DELETED_NO)
            ->where('status', Vendor::STATUS_ACTIVE)
            ->first();

        return $this->view('backend.vendor._view_vendor')
            ->with($data);
    }

    public function delete($id)
    {
        try {
            $vendor = Vendor::where('id', $id)
                ->where('deleted', Vendor::DELETED_NO)
                ->first();
            if (!$vendor) {
                throw new \Exception('Vendor not found');
            }
            $vendor->deleted = Vendor::DELETED_YES;
            $vendor->deleted_by = Auth::user()->id;
            $vendor->deleted_at = now();
            $vendor->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Vendor deleted successfully');
    }
}
