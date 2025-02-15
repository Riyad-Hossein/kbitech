@if (Route::currentRouteName() !== 'frontend.home')
  <div class="header-margin"></div>
@endif
<header id="site-header" class="fixed-top {{ Route::currentRouteName() !== 'frontend.home' ? 'header2' : '' }}">
  <div class="container">
    <nav class="navbar navbar-expand-lg stroke px-0 pt-lg-0 pb-lg-0">
        <a class="navbar-brand" href="{{route('frontend.home')}}">
          <img src="{{ asset('assets/frontend') }}/images/logo.png" alt="logo" title="logo" style="height:50px;" />
        </a>
        <button class="navbar-toggler collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('frontend.home')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('frontend.about')}}">About</a>
              </li>

              <li class="nav-item dropdown has-mega-menu" style="position:static;">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Services <i class="fa-solid fa-chevron-down"></i></a> 

                <div class="dropdown-menu dropdown-right megamenu" aria-labelledby="navbarDropdownMenuLink">
                  <div class="row">
                    @foreach($businessTypes as $type)
                      <div class="col col-md-6 col-lg-6">
                        <div class="menu-service-category">
                          <a class="menu-category-title" href="{{ route('services.byType', $type->slug) }}">{{$type?->name}}</a>
                        </div>
                        @foreach($type->service_categories as $category)
                          <a class="dropdown-item" href="{{ route('services.byCategory', $category->slug) }}">{{$category?->name}}</a>
                        @endforeach
                      </div>
                    @endforeach
                  </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('frontend.project')}}">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('frontend.team')}}">Team</a>
              </li>
              <li class="nav-item pr-5">
                <a class="nav-link" href="{{route('frontend.contact')}}">Contact</a>
              </li>
          </ul>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
              <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox">
                    <div class="mode-container">
                      <i class="gg-sun"></i>
                      <i class="gg-moon"></i>
                    </div>
                </label>
              </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>