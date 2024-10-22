<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $pageTitle }} - {{ __(config('app.name')) }}</title>

    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/remixicon.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/sidebar-menu.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/apexcharts.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/prism.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/sweetalert.min.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/quill.snow.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/toastr.min.css">

    @yield('css_plugins')

    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/style.css">

    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/custom-css/hivance.css">
    <link rel="icon" type="image/png" href="{{ asset('assets/backend') }}/images/favicon.png">
    

    @yield('css')
    
</head>