<!DOCTYPE html>
<html lang="zxx">
   @include('backend.auth.layouts._head')

   <body>
      <div class="preloader" id="preloader">
         @include('backend.auth.layouts._preloader')
      </div>

      <div class="container-fluid">
         <div class="main-content d-flex flex-column px-0">
            @yield('auth_content')
         </div>
      </div>
      
      @include('backend.auth.layouts._scripts')
   </body>
</html>