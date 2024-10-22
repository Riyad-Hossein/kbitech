@extends('backend.layouts.layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="vendor-onboard-wrapper">
                        <div class="vendor-view-item">
                            <div class="company-name">
                                <h4>Company Name:</h4>
                                <p>{{$vendor->company_name}}</p>
                            </div>
                        </div>
                        <div class="vendor-view-item address-view">
                            <div class="v-address">
                                <h4>Address:</h4>
                                <p>{{$vendor->address}}</p>
                            </div>
                            <div class="v-state">
                                <h4>State:</h4>
                                <p>{{$vendor->state}}</p>
                            </div>
                            <div class="v-city">
                                <h4>City</h4>
                                <p>{{$vendor->city}}</p>
                            </div>
                            <div class="v-zip">
                                <h4>Zip Code:</h4>
                                <p>{{$vendor->zip_code}}</p>
                            </div>
                        </div>
                        <div class="vendor-view-item">
                            <div class="v-email">
                                <h4>Email:</h4>
                                <p>{{$vendor->email}}</p>
                            </div>
                        </div>
                        <div class="vendor-view-item">
                            <div class="v-phone">
                                <h4>Phone:</h4>
                                <p>{{$vendor->phone}}</p>
                            </div>
                        </div>
                        <div class="vendor-view-item">
                            <div class="v-area-service">
                                <h4>Area(s) of Service:</h4>
                                <p>{{$vendor->service_area}}</p>
                            </div>
                        </div>
                        <div class="vendor-view-item">
                            <div class="v-hours-operation">
                                <h4>Hours Of Operation:</h4>
                                <p>{{$vendor->hours_of_operation}}</p>
                            </div>
                        </div>
                        <div class="vendor-view-item">
                            <div class="v-company-service">
                                <h4>Company Service:</h4>
                                <p>{{$vendor->service->name}}</p>
                            </div>
                        </div>
                        <div class="vendor-view-item">
                            <div class="v-company-service">
                                <h4>Standard Pricing:</h4>
                                <a href="{{asset($vendor->image)}}" target="_blank" download="{{ basename($vendor->image) }}" class="view-pdf"><span class="me-1"><i class="fa-light fa-file-pdf"></i></span> {{ basename($vendor->image) }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection