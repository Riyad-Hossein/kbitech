<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="{{ route('dashboard') }}" class="d-block text-decoration-none">
            <img src="{{ asset('assets/backend') }}/images/logo-icon.png" alt="logo-icon">
            <span class="logo-text fw-bold text-dark"><img class="logo-text-img" src="{{ asset('assets/backend') }}/images/logo-text.png" alt="Hivance"></span>
        </a>
        <button
            class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
            id="sidebar-burger-menu">
            <i data-feather="x"></i>
        </button>
    </div>
    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
            <li class="menu-item ">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <i data-feather="grid" class="menu-icon tf-icons"></i>
                    <span class="title">Dashbaord</span>
                </a>
            </li>

            
            @if(Auth::user()->user_type == \App\Models\User::TYPE_ADMIN)
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">Services</span>
                </li>
                <li class="menu-item open">
                    <a href="{{ route('admin.service-category.index') }}" class="menu-link {{ ($activeMenu == 'service-category')?'active':'' }}">
                        <i data-feather="file-plus" class="menu-icon tf-icons"></i>
                        <span class="title">Category</span>
                    </a>
                </li>

                <li class="menu-item open">
                    <a href="{{ route('admin.service.index') }}" class="menu-link {{ ($activeMenu == 'service')?'active':'' }}">
                        <i data-feather="file-plus" class="menu-icon tf-icons"></i>
                        <span class="title">Service</span>
                    </a>
                </li>


                <li class="menu-item open">
                    <a href="{{ route('admin.location.index') }}" class="menu-link {{ ($activeMenu == 'location')?'active':'' }}">
                        <i data-feather="map-pin" class="menu-icon tf-icons"></i>
                        <span class="title">All Locations</span>
                    </a>
                </li>
                
            
                <li class="menu-item open">
                    <a href="{{ route('admin.partner.index') }}" class="menu-link {{ ($activeMenu == 'partners')?'active':'' }}">
                        <i data-feather="users" class="menu-icon tf-icons"></i>
                        <span class="title">All Partners</span>
                    </a>
                </li>
                <li class="menu-item open">
                    <a href="{{ route('admin.vendor.index') }}" class="menu-link {{ ($activeMenu == 'vendors')?'active':'' }}" >
                        <i data-feather="framer" class="menu-icon tf-icons"></i>
                        <span class="title">Vendor On-Boarding</span>
                    </a>
                </li>
            @endif

        </ul>
    </aside>
    <div class="bg-white z-1 admin">
        <div class="d-flex align-items-center admin-info border-top">
            <div class="flex-shrink-0">
                <a href="" class="d-block">
                    <img src="{{ asset('assets/backend') }}/images/admin.jpg" class="rounded-circle wh-48" alt="admin">
                </a>
            </div>
            <div class="flex-grow-1 ms-3 info">
                @if(Auth::user()->username)
                    <a href="" class="d-block name">{{ Auth::user()->username }}</a>
                @else
                    <a href="" class="d-block name">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</a>
                @endif
                <a href="{{ route('logout') }}">Log Out</a>
            </div>
        </div>
    </div>
</div>