<script src="{{ asset('assets/backend') }}/js/jquery-3.7.1.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/sidebar-menu.js"></script>
<script src="{{ asset('assets/backend') }}/js/dragdrop.js"></script>
<script src="{{ asset('assets/backend') }}/js/sweetalert.js"></script>
<script src="{{ asset('assets/backend') }}/js/quill.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/prism.js"></script>
<script src="{{ asset('assets/backend') }}/js/feather.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/simplebar.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/apexcharts.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/toastr.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/alert.js"></script>
<script src="{{ asset('assets/backend') }}/js/sweetalert2@11.js"></script>
<script src="{{ asset('assets/backend') }}/js/ajax-request.js"></script>

@yield('js_plugins')

<script src="{{ asset('assets/backend') }}/js/custom/custom.js"></script>

<script>

    $(document).ready(function(){

        // $('.select2').select2();
        
        // $('.select2').select2({
        //     minimumResultsForSearch: -1,
        //     width: '100%'
        // });

        $(".ocb-btn").click(function(event){
            event.preventDefault();
            $(".others-contact-info-box-wrapper").slideToggle();
        });

        // toastr
        setTimeout(function () {
            @if (session('error'))
                toastr.error('{{Session::get("error")}}', 'Error!');
            @endif

            @if (session('info'))
                toastr.error('{{Session::get("info")}}', 'Info!');
            @endif

            @if (session('failed'))
                toastr.error('{{Session::get("failed")}}', 'Error!');
            @endif
            
            @if (session('success'))
                toastr.success('{{Session::get("success")}}', 'Success');
            @endif
        }, 300);
        
    });
</script>

@yield('js')