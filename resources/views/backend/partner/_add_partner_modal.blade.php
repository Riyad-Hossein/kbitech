
<div class="modal fade travelooms-modal" id="addPartnerModal" tabindex="-1" aria-labelledby="faq-addlabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
            <form action="{{ route('admin.partner.store') }}" id="partnerStoreForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="faq-addlabel">Add Partner</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom-modal-body">
                    <div class="row gap-3">
                        <div class="col-lg-12">
                            <div class="form-group ">
                                <label class="label">Partner Name <span class="text-danger">*</span></label>
                                <div class="form-group position-relative">
                                    <input type="text" name="name" class="form-control text-dark" placeholder="Partner Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="label">Partner Logo <span class="text-danger">*</span></label>
                                <div class="form-group position-relative">
                                    <input type="file" name="image" class="form-control" required>
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
		</div>
	</div>
</div>