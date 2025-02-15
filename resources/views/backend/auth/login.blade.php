@extends('backend.auth.layouts.layout')

@section('auth_content')
    <div class="m-auto dash-login-card">
        <form action="{{ route('login') }}" id="loginForm">
            @csrf
            <div class="d-flex justify-content-center align-items-center gap-4 mb-3">
                <a class="d-flex align-items-center" href="{{ url('/') }}">
                    <img src="{{ asset('assets/backend/images/logo.png') }}" style="width: 60px;" alt="logo">
                    <!-- <span style="padding-left: 10px" class="d-flex align-items-center">
                        <img width="150" src="{{ asset('assets/backend/images/logo-text.png') }}" alt="logo">
                    </span> -->
                </a>
            </div>
            <h4 class="fs-5 mb-3 text-center">Login to access your dashboard.</h4>
            
            <div class="card bg-white border-0">
                <div class="card-body py-4 px-0">
                    <div class="form-group mb-4">
                        <label class="label">Username</label>
                        <input type="text" id="username" name="username" class="form-control h-58" required>
                    </div>   
                    <span class="username_error ie-span"></span>
                    
                    <div class="form-group mb-0">
                        <label class="label">Password</label>
                        <div class="password-wrapper position-relative">
                            <input type="password" id="password" name="password" required class="form-control h-58 text-dark">
                            <i style="color: #A9A9C8; font-size: 16px; right: 15px !important;" class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 end-0 position-absolute" aria-hidden="true"></i>
                        </div>
                        <span class="password_error ie-span"></span>
                    </div>
                </div>
            </div>

            <div class="d-sm-flex justify-content-between mb-4">
                <div class="form-check">
                    <input class="form-check-input position-relative" style="top: 1.1px;" type="checkbox" name="remember" id="flexCheckDefault">
                    <label class="form-check-label fs-16 text-gray-light" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <a href="" class="fs-16 text-primary text-decoration-none mt-2 mt-sm-0 d-block">
                    Forgot your password?
                </a>
            </div>

            <button type="submit" class="btn btn-primary fs-16 fw-semibold text-dark heading-fornt py-2 py-md-3 px-4 text-white w-100">
                Login
            </button>
        </form>
    </div>
@endsection

@section('js_plugins')

@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $("#loginForm").on('submit', function (e) {
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                $(".ie-span").text("").hide();
                var url = $(this).attr('action');
                formPost(url,formData,'redirect', function (xhr) {
                    if(xhr.status == 422){
                        $.each(xhr.responseJSON.errors, function(key, value){
                            $("."+key+"_error").text(value).show();
                            toastr.error(value);
                        });
                    }else{
                        toastr.error(xhr.message);
                    }
                });
            });
        });
    </script>
@endsection
