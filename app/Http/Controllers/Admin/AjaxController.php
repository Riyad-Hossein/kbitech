<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseControllers\BackendController;
use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class AjaxController extends BackendController
{
    public function getCategoryByBusinessType(Request $request)
    {
        try {
            $data['categories'] = ServiceCategory::where('deleted', ServiceCategory::DELETED_NO)
                ->where('status', ServiceCategory::STATUS_ACTIVE)
                ->where('business_type_id', $request->business_type_id)
                ->orderBy('name', 'asc')
                ->get();
            $view = $this->view('backend.ajax._get_service_category_by_business_type')->with($data)
                ->render();

            return $this->returnAjaxSuccess(['view' => $view]);
        }catch (\Exception $exception) {
            return $this->returnAjaxError([], $exception->getMessage());
        }
    }
}
