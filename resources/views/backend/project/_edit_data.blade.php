<form action="{{ route('admin.project.update', $item->id) }}" id="partnerUpdateForm" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="faq-addlabel">Edit Project</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body custom-modal-body">
        <div class="row">
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
                        <select name="project_category" id="category_id2" class="form-select select2 form-control h-58 ps-5" required>
                            <option value="" class="text-dark">Select Category</option>
                            @foreach ($service_categories as $category)
                                <option value="{{ $category->id }}" {{ ($item->project_category_id == $category->id) ? 'selected' : '' }} class="text-dark">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <i class="fa-light fa-location-dot position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group ">
                    <label class="label">Project Name <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <input type="text" value="{{$item?->name}}" name="name" class="form-control text-dark" placeholder="Type Project Name" required>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group ">
                    <label class="label">Client <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <input type="text" value="{{$item?->client}}" name="client" class="form-control text-dark" placeholder="Type Client Name" required>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group ">
                    <label class="label">Date <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <input type="date" value="{{$item?->project_date}}" name="project_date" class="form-control text-dark" required>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group ">
                    <label class="label">Team Members </label>
                    <div class="form-group position-relative">
                        <input type="text" value="{{$item?->team_members}}" name="team_members" class="form-control text-dark" placeholder="Type Team Members">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group ">
                    <label class="label">Location </label>
                    <div class="form-group position-relative">
                        <input type="text" value="{{$item?->location}}" name="location" class="form-control text-dark" placeholder="Type Project Location">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group">
                    <label class="label">Project Image <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control text-dark" accept="image/*" />
                    @if($item->image)
                        <img src="{{ asset($item->image) }}" alt="Thumbnail" class="img-thumbnail mt-2" width="120">
                    @endif
                </div>
            </div>
            <div class="col-lg-12 mb-3">
                <div class="form-group">
                    <label class="label">Project Details</label>
                    <textarea name="details" id="project_description2" rows="10" class="form-control">{{ $item->details }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary text-white">Submit</button>
    </div>
</form>
