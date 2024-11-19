<?php

namespace App\Http\Controllers\frontend;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\CompanyService;
use App\Models\Location;
use App\Models\Partner;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function homePage(){
        $data['partners'] =[];
        
        $data['locations'] = [];

        return view('frontend.pages.home')->with($data);
    }
    
    public function aboutPage(){
        return view('frontend.pages.about');
    }

    public function servicePage(){
        return view('frontend.pages.service');
    }

    public function vendorPage(){
        $data['services'] = CompanyService::where('deleted', CompanyService::DELETED_NO)
            ->where('status', CompanyService::STATUS_ACTIVE)
            ->get();

        return view('frontend.pages.vendor')->with($data);
    }

    public function storeVendor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'service_area' => 'required',
            'hours_of_operation' => 'required',
            'service_id' => 'required',
            'image' => 'nullable|file',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $imagePath = null;
        if ($request->has('image')) {
            $image = $request->input('image');
            $isBase64 = false;
            if (preg_match('/^data:image\/(\w+);base64,/', $image)) {
                $isBase64 = true;
            }
            $uploadPath = 'vendors';
            if ($isBase64) {
                $result = ImageUploadHelper::storeBase64Image($image, $uploadPath, null, 'webp');
            } else {
                $file = $request->file('image');
                $result = ImageUploadHelper::store($file, $uploadPath, null, 'webp');
            }

            $imagePath = $result['path'];
        }

        $vendor = new Vendor();
        $vendor->company_name = $request->company_name;
        $vendor->address = $request->address;
        $vendor->city = $request->city;
        $vendor->state = $request->state;
        $vendor->zip_code = $request->zip_code;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->service_area = $request->service_area;
        $vendor->hours_of_operation = $request->hours_of_operation;
        $vendor->service_id = $request->service_id;
        $vendor->image = $imagePath;
        $vendor->created_at = now();
        $vendor->save();

        return redirect()->route('vendor')->with('success', 'Vendor onboarded successfully.');
    }

    public function projectPage(){
        return view('frontend.pages.project');
    }
    public function teamPage(){
        return view('frontend.pages.team');
    }

    public function contactPage(){
        return view('frontend.pages.contact');
    }
}
