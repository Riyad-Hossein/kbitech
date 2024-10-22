<form action="{{ route('admin.location.update', $item->id) }}" id="partnerUpdateForm" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="faq-addlabel">Edit Location</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body custom-modal-body">
        <div class="row gap-3">
            <div class="col-lg-12">
                <div class="form-group ">
                    <label class="label">Country</label>
                    <div class="form-group position-relative">
                        <input type="text" class="form-control text-dark ps-5" value="USA" disabled>
                        <i class="fa-sharp-duotone fa-solid fa-map-location-dot position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="label">State <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <select name="state_id" class="form-select select2 form-control h-58 ps-5" aria-label="Default select example" required>
                            <option selected value="" class="text-dark">Select State</option>
                            @foreach ($states as $state)
                                <option value="{{$state->id}}" {{ $state->id == $item->state_id ? 'selected' : '' }} class="text-dark">{{$state->name}}</option>
                            @endforeach
                        </select>
                        <i class="fa-light fa-location-dot position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group ">
                    <label class="label">City <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <input type="text" name="city_name" value="{{$item->city_name}}" class="form-control text-dark ps-5" placeholder="City Name" required>
                        <i class="fa-light fa-location-dot position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary text-white">Submit</button>
    </div>
</form>
