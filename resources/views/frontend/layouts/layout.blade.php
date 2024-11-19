<!DOCTYPE html>
<html lang="en">
    <head>
        @include('frontend.layouts.partials.head')
    </head>

    <body>
        
        @include('frontend.layouts.partials.header')

        @yield('frontend_content')

        @include('frontend.layouts.partials.footer')

        @include('frontend.layouts.partials.scripts')

    </body>
</html>
    