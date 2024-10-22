<!DOCTYPE html>
<html lang="zxx">
    @include('backend.layouts.partials._head')
    
    <body>
        <div class="preloader" id="preloader">
            @include('backend.layouts.partials._preloader')
        </div>

        <div id="sidebar">
            @include('backend.layouts.partials._sidebar')
        </div>

        <div class="container-fluid">
            <div class="main-content d-flex flex-column">
                <header class="header-area bg-white mb-4 rounded-bottom-10" id="header-area">
                    @include('backend.layouts.partials._header')
                </header>

                <div id="page-breadcumb">
                    @include('backend.layouts.partials._page_header')
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            
                @include('backend.layouts.partials._footer')

            </div>
        </div>

        @yield('modals')

        @include('backend.layouts.partials._scripts')

    </body>
</html>