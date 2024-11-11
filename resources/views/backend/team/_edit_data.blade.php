<form action="{{ route('admin.team.update', $item->id) }}" id="partnerUpdateForm" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="faq-addlabel">Edit Project</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body custom-modal-body">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="form-group ">
                    <label class="label"> Name <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <input type="text" value="{{ $item?->name }}" name="name" class="form-control text-dark" placeholder="Type Name" required>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group ">
                    <label class="label">Designation <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <input type="text" value="{{ $item?->designation }}" name="designation" class="form-control text-dark" placeholder="Type Designation" required>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group ">
                    <label class="label">Email <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <input type="email" value="{{ $item?->email }}" name="email" class="form-control text-dark" placeholder="Type Email" required>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group ">
                    <label class="label">Linkedin Url </label>
                    <div class="form-group position-relative">
                        <input type="text" value="{{ $item?->linkedin_url }}" name="linkedin_url" class="form-control text-dark" placeholder="Type Linkedin Url">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group ">
                    <label class="label">Facebook Url </label>
                    <div class="form-group position-relative">
                        <input type="text" value="{{ $item?->facebook_url }}" name="facebook_url" class="form-control text-dark" placeholder="Type Facebook Url">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group ">
                    <label class="label">Twitter Url </label>
                    <div class="form-group position-relative">
                        <input type="text" value="{{ $item?->twitter_url }}" name="twitter_url" class="form-control text-dark" placeholder="Type Twitter Url">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-group">
                    <label class="label">Profile Image <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control text-dark" accept="image/*" />
                    @if($item->image)
                        <img src="{{ asset($item->image) }}" alt="Thumbnail" class="img-thumbnail mt-2" width="150">
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary text-white">Submit</button>
    </div>
</form>
