<?php

namespace App\Http\Controllers\frontend;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\BusinessType;
use App\Models\CompanyService;
use App\Models\Location;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\TeamMember;
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

    public function servicesByType($typeSlug)
    {
        $type = BusinessType::where('slug', $typeSlug)
            ->where('deleted', BusinessType::DELETED_NO)
            ->where('status', BusinessType::STATUS_ACTIVE)
            ->first();

        $data['services'] = Service::where('business_type_id', $type->id)
            ->where('deleted', Service::DELETED_NO)
            ->where('status', Service::STATUS_ACTIVE)
            ->get();

        $data['title'] = 'Services for ' . $type->name;

        return view('frontend.pages.service')->with($data);
    }

    public function servicesByCategory($categorySlug)
    {
        $category = ServiceCategory::where('slug', $categorySlug)
            ->where('deleted', ServiceCategory::DELETED_NO)
            ->where('status', ServiceCategory::STATUS_ACTIVE)
            ->first();

        $data['services'] = Service::where('service_category_id', $category->id)
            ->where('deleted', Service::DELETED_NO)
            ->where('status', Service::STATUS_ACTIVE)
            ->get();
        $data['title'] = 'Services in ' . $category->name;
            
        return view('frontend.pages.service')->with($data);
    }

    public function servicetDetails($slug){
        $data['service'] = Service::where('slug', $slug)
            ->where('deleted', Service::DELETED_NO)
            ->where('status', Service::STATUS_ACTIVE)
            ->first();

        return view('frontend.pages.service_details')->with($data);
    }

    public function projectPage(){
        $data['projects'] = Project::where('deleted', Project::DELETED_NO)
            ->where('status', Project::STATUS_ACTIVE)
            ->get();
        return view('frontend.pages.project')->with($data);
    }

    public function projectDetails($slug){
        $data['project'] = Project::where('slug', $slug)
            ->where('deleted', Project::DELETED_NO)
            ->where('status', Project::STATUS_ACTIVE)
            ->first();
        return view('frontend.pages.project_details')->with($data);
    }

    public function teamPage(){
        $data['teams'] = TeamMember::where('deleted', TeamMember::DELETED_NO)
            ->where('status', TeamMember::STATUS_ACTIVE)
            ->get();
        return view('frontend.pages.team')->with($data);
    }

    public function contactPage(){
        return view('frontend.pages.contact');
    }
}
