<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.partials.head')
</head>

    <body class="font-heading-beatricetrial-regular-2">
        
        @include('frontend.layouts.partials.header')

        <div class="has-smooth" id="has_smooth"></div>
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <div class="body-wrapper body-corporate-agency">
                    <div class="overlay-switcher-close"></div>

                    <main>

                        @yield('frontend_content')

                    </main>

                    @include('frontend.layouts.partials.footer')

                </div>
            </div>
        </div>

        @include('frontend.layouts.partials.scripts')

    </body>
</html>
    