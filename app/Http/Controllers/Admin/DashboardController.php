<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseControllers\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends BackendController
{
    public function __construct()
    {
        $this->addBreadcrumbs('Dashboard', route('dashboard'), 'ri-home-2-line');
    }
    public function showDashboard()
    {
        // dd(Auth::check());
        $this->setPageTitle("Dashboard");
        $this->setActiveMenu('dashboard');
        $user = Auth::user();
        
        return $this->view('backend.dashboard.index', compact('user'));
    }
}
