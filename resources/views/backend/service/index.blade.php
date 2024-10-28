@extends('backend.layouts.layout')

@section('content')
    <div class="kyc-user-main-wrapper dash-card-content-wrappper bg-white">
        <div class="default-table-area recent-orders">
            <div
                class="m-cart-profile-box-wrapper d-flex flex-wrap justify-content-md-between justify-content-center align-items-center">

                <div class="mcpb-wrap">
                    <div class="d-sm-flex text-center justify-content-between align-items-center ">
                        <div class="search-box-wrapper src-form position-relative">
                            <input type="text" class="form-control" id="keyword_filtered" placeholder="Search category">
                            <button type="submit" onclick="getData()" class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                <i data-feather="search"></i>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="mcbb-wrap">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addServiceModal" class="btn btn-primary text-white fw-semibold py-2 px-3 w-sm-100 mt-3 mt-sm-0">
                        <span class="py-1 d-block"><i class="fa-duotone fa-plus me-1"></i>Add Category </span>
                    </a>
                </div>
            </div>

            <div class="table_wrapper" id="ajax-data-load">
                
            </div>
        </div>
    </div>
@endsection

@section('modals')
    @include('backend.service._add_service_modal')
    @include('backend.service._edit_service_modal')
@endsection

@section('css')
@endsection

@section('css_plugins')
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/select2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
@endsection

@section('js_plugins')
    <script src="{{ asset('assets/backend') }}/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/filepond/dist/filepond.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <!-- Include CKEditor from CDN -->
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

@endsection

@section('js')
    <script>
        var filterData = {
            keyword_filtered: ''
        };
        $(document).ready(function() {
            getData();
            initializeSelect();

            filterData.keyword_filtered = $("#keyword_filtered").val()
            $("#keyword_filtered").on('input', function () {
                filterData.keyword_filtered = $(this).val();
            });

            $("#serviceStoreForm").on('submit', function (e) {
                var self = this;
                e.preventDefault();
                var formData = new FormData($(self)[0]);
                console.log(formData);
                $(".ie-span").text("").hide();
                var url = $(self).attr('action');

                formPost(url, formData, function (res) {
                    if(res.status == 200){
                        $('#addServiceModal').modal('hide');
                        $(self)[0].reset();
                        showSuccessAlert('Success',res.message)
                        getData();
                    }else{
                        showErrorAlert('Error',res.message)
                    }
                }, 'show_input_error');
            });

            $(document).on("submit", "#partnerUpdateForm", function(e) {
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                $(".ie-span").text("").hide();
                var url = $(this).attr('action');

                formPost(url, formData, function (res){
                    if(res.status == 200){
                        $('#editPartnerModal').modal('hide');
                        showSuccessAlert('Success',res.message)
                        getData();
                    }else{
                        showErrorAlert('Error',res.message)
                    }
                }, 'show_input_error');
            });

            $('.kbitech-modal').on('shown.bs.modal', function () {
                initializeSelect();
            });

            FilePond.registerPlugin(FilePondPluginImagePreview);
            function initializeFilePond(selector, multiple) {
                const inputElement = document.querySelector(selector);
                if (inputElement) {
                    FilePond.create(inputElement, {
                        allowMultiple: multiple,
                        imagePreviewHeight: 60,
                        imageCropAspectRatio: '1:1',
                        imageResizeTargetWidth: 100,
                        imageResizeTargetHeight: 100
                    });
                }
            }
            initializeFilePond('#fileInput1', multiple=false);
            initializeFilePond('#fileInput2', multiple=true);

            function initializeCKEditor(selector) {
                CKEDITOR.replace(selector, {
                    height: 150,
                    toolbar: [
                        { name: 'basicstyles', items: ['Bold', 'Italic'] },
                        { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
                        { name: 'styles', items: ['Format'] },
                    ],
                });
            }

            initializeCKEditor('service_overview');
            initializeCKEditor('service_description');
        });

        function getData(){
            getPaginatedListData("{{ route('admin.service.filtered') }}", "#ajax-data-load", filterData);
        }

        function getPaginatedData(button) {
            getPaginatedListData($(button).attr('data-href'), "#ajax-data-load", filterData);
        }

        function getServiceCategory(select) {
            var business_type_id = $(select).val();
            console.log(business_type_id);
            let url = "{{ route('ajax.get-category-by-business-type') }}";
            if(business_type_id.length > 0){
                ajaxGet(url, {business_type_id:business_type_id}, function (response) {
                    if (response.status == 200) {
                        $("#category_id").html(response.view);
                    } else {
                        $("#category_id").html('');
                        toastr.error(response.message);
                    }
                });
            }else{
                $("#category_id").html('');
            }
        }

        function editItem(id){
            let url = "{{route('admin.service.edit', ':id')}}";
            url = url.replace(':id', id);
            ajaxGet(url, {}, function (response) {
                if (response.status == 200) {
                    $("#edit_partner_modal_body").html(response.view);
                    $("#editPartnerModal").modal('show');
                } else {
                    toastr.error(response.message);
                }
            }, 'default');
        }

        function initializeSelect() {
            $('.select2').select2({
                width: '100%',
                dropdownParent: $('.modal.show')
            });
        }

    </script>
@endsection