<form action="{{ route('admin.service.update', $item->id) }}" id="partnerUpdateForm" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="faq-addlabel">Edit Service</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body custom-modal-body">
        <div class="row">
            <!-- Business Type -->
            <div class="col-lg-6 mb-3">
                <div class="form-group">
                    <label class="label">Business Type <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <select name="business_type" onchange="getServiceCategory(this)" class="form-select select2 form-control h-58 ps-5" required>
                            <option selected value="" class="text-dark">Select Type</option>
                            @foreach ($business_types as $type)
                                <option value="{{ $type->id }}" {{ ($item->business_type_id == $type->id) ? 'selected' : '' }} class="text-dark">{{ $type->name }}</option>
                            @endforeach
                        </select>
                        <i class="fa-light fa-location-dot position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                    </div>
                </div>
            </div>

            <!-- Service Category -->
            <div class="col-lg-6 mb-3">
                <div class="form-group">
                    <label class="label">Service Category <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <select name="service_category" id="category_id2" class="form-select select2 form-control h-58 ps-5" required>
                            <option value="" class="text-dark">Select Category</option>
                            @foreach ($service_categories as $category)
                                <option value="{{ $category->id }}" {{ ($item->service_category_id == $category->id) ? 'selected' : '' }} class="text-dark">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <i class="fa-light fa-location-dot position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                    </div>
                </div>
            </div>

            <!-- Service Name -->
            <div class="col-lg-6 mb-3">
                <div class="form-group">
                    <label class="label">Service Name <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <input type="text" name="name" value="{{ $item->name }}" class="form-control text-dark ps-5" placeholder="Type Service Name" required>
                        <i class="fa-light fa-location-dot position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3"></div>

            <!-- Thumbnail Image -->
            <div class="col-lg-6 mb-3">
                <div class="form-group">
                    <label class="label">Thumbnail Image</label>
                    <input type="file" name="image" class="form-control text-dark" accept="image/*" />
                    @if($item->image)
                        <img src="{{ asset($item->image) }}" alt="Thumbnail" class="img-thumbnail mt-2" width="150">
                    @endif
                </div>
            </div>

            <!-- Service Images -->
            <div class="col-lg-6 mb-3">
                <div class="form-group">
                    <label class="label">Service Images</label>
                    <input type="file" name="service_image[]" class="form-control text-dark" multiple accept="image/*" />
                </div>
                @if($item->service_images->count())
                    <div class="mt-3">
                        <label>Existing Images:</label>
                        <div class="row">
                            @foreach($item->service_images as $image)
                                <div class="col-md-3 position-relative" id="image-{{ $image->id }}">
                                    <input type="hidden" name="service_image_id[]" value="{{ $image->id }}">
                                    <img src="{{ asset($image->image) }}" alt="Service Image" class="img-thumbnail mb-2" width="150">
                                    <button data-id="{{ $image->id }}" type="button" class="btn btn-info btn-sm position-absolute top-0 end-0 remove-service-image" style="border-radius: 50%;">
                                        <i class="fa fa-trash text-white"></i>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>


            <!-- Overview -->
            <div class="col-lg-6 mb-3">
                <div class="form-group">
                    <label class="label">Overview</label>
                    <textarea name="short_description" id="service_overview2" rows="10" class="form-control">{{ $item->short_description }}</textarea>
                </div>
            </div>

            <!-- Description -->
            <div class="col-lg-6 mb-3">
                <div class="form-group">
                    <label class="label">Description</label>
                    <textarea name="long_description" id="service_description2" rows="10" class="form-control">{{ $item->long_description }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary text-white">Submit</button>
    </div>
</form>
