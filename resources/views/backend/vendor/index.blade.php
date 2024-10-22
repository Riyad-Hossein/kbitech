@extends('backend.layouts.layout')

@section('content')
    <div class="kyc-user-main-wrapper dash-card-content-wrappper bg-white">
        <div class="default-table-area recent-orders">
            <div
                class="m-cart-profile-box-wrapper d-flex flex-wrap justify-content-md-between justify-content-center align-items-center">

                <div class="mcpb-wrap">
                    <div class="d-sm-flex text-center justify-content-between align-items-center ">
                        <div class="search-box-wrapper src-form position-relative">
                            <input type="text" class="form-control" id="keyword_filtered" placeholder="Search here">
                            <button type="submit" onclick="getData()" class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                <i data-feather="search"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="table_wrapper" id="ajax-data-load">
                
            </div>
        </div>
    </div>
@endsection

@section('modals')
@endsection

@section('css_plugins')
@endsection

@section('js_plugins')
@endsection

@section('js')
    <script>
        var filterData = {
            keyword_filtered: ''
        };
        $(document).ready(function() {
            getData();

            filterData.keyword_filtered = $("#keyword_filtered").val()
            $("#keyword_filtered").on('input', function () {
                filterData.keyword_filtered = $(this).val();
            });
        });

        function getData(){
            getPaginatedListData("{{ route('admin.vendor.filtered') }}", "#ajax-data-load", filterData);
        }

        function getPaginatedData(button) {
            getPaginatedListData($(button).attr('data-href'), "#ajax-data-load", filterData);
        }

    </script>
@endsection