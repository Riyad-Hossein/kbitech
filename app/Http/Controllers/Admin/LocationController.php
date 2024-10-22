<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\BaseControllers\BackendController;
use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationController extends BackendController
{
    private int $paginate_limit;
    
    public function __construct()
    {
        $this->addBreadcrumbs('Dashboard', route('dashboard'), 'ri-home-2-line');
        $this->addBreadcrumbs('Location');

        $this->paginate_limit = config('commonData.paginate_limit');
    }

    public function index()
    {
        $this->setPageTitle("Location");
        $this->setActiveMenu('location');
        $data['states'] = State::orderBy('name', 'asc')->get();

        return  $this->view('backend.location.index')->with($data);
    }

    public function indexFiltered(Request $request)
    {
        $keyword_filtered = $request->keyword_filtered;
        $data['locations'] = Location::with('state')
            ->where('deleted', Location::DELETED_NO)
            ->where('status', Location::STATUS_ACTIVE)
            ->where(function ($q) use ($keyword_filtered){
                if ($keyword_filtered !=''){
                    $q->where('city_name', 'like', '%'.$keyword_filtered.'%');
                }
            })
            ->orderBy('id', 'desc')->paginate($this->paginate_limit);

        $view = $this->view('backend.location._index_filtered')
            ->with($data)
            ->render();

        return $this->returnAjaxSuccess(['view' => $view]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'city_name' => 'required|string',
            ]);

            $check_duplicate = Location::where('city_name', $request->city_name)
                ->where('state_id', $request->state_id)
                ->where('deleted', Location::DELETED_NO)
                ->where('status', Location::STATUS_ACTIVE)
                ->first();
            if (!empty($check_duplicate)) {
                throw new \Exception("Location already exists");
            }

            $location = new Location();
            $location->state_id = $request->state_id;
            $location->city_name = $request->city_name;
            $location->created_by = Auth::user()->id;
            $location->created_at = now();
            $location->updated_by = Auth::user()->id;
            $location->updated_at = now();
            $location->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Location created successfully');
    }

    public function edit($id)
    {
        try {
            $data['states'] = State::orderBy('name', 'asc')->get();

            $data['item'] = Location::where('id', $id)
                ->where('deleted', Location::DELETED_NO)
                ->where('status', Location::STATUS_ACTIVE)
                ->first();
            if (!$data['item']) {
                throw new \Exception('Location not found');
            }

            $view = $this->view('backend.location._edit_data')
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
                'city_name' => 'required|string'
            ]);

            $location = Location::where('id', $id)
                ->where('deleted', Location::DELETED_NO)
                ->where('status', Location::STATUS_ACTIVE)
                ->first();
            if (!$location) {
                throw new \Exception('Location not found');
            }

            $check_duplicate = Location::where('city_name', $request->city_name)
                ->where('state_id', $request->state_id)
                ->where('deleted', Location::DELETED_NO)
                ->where('status', Location::STATUS_ACTIVE)
                ->where('id', '!=', $id)
                ->first();
            if (!empty($check_duplicate)) {
                throw new \Exception("Location already exists");
            }

            $location->state_id = $request->state_id;
            $location->city_name = $request->city_name;
            $location->updated_by = Auth::user()->id;
            $location->updated_at = now();
            $location->save();
            
        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Location updated successfully');
    }

    public function delete($id)
    {
        try {
            $location = Location::where('id', $id)
                ->where('deleted', Location::DELETED_NO)
                ->first();
            if (!$location) {
                throw new \Exception('Location not found');
            }
            $location->deleted = Location::DELETED_YES;
            $location->deleted_by = Auth::user()->id;
            $location->deleted_at = now();
            $location->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Location deleted successfully');
    }
}
