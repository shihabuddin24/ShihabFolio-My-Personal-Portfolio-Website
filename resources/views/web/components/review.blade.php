<div class="modal fade review-modal" id="reviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-1">
                <h5 class="modal-title fw-bold"><i class="fa-solid fa-star"></i>Share Your Experience</h5>
                <button type="button" class="custom-close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark fs-5"></i>
                </button>
            </div>
            <div class="modal-body pt-3">
                <form action="" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control custom-input" placeholder="Enter your full name">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control custom-input" placeholder="Enter email address">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Company Name</label>
                            <input type="text" class="form-control custom-input" placeholder="Enter company name">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Designation</label>
                            <input type="text" class="form-control custom-input" placeholder="Enter designation">
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold mb-2"> Rating <span class="text-danger">*</span></label>
                            <div class="rating-stars">
                                <input type="radio" name="rating" id="star5" value="5">
                                <label for="star5"><i class="fa-regular fa-star"></i></label>

                                <input type="radio" name="rating" id="star4" value="4">
                                <label for="star4"><i class="fa-regular fa-star"></i></label>

                                <input type="radio" name="rating" id="star3" value="3">
                                <label for="star3"><i class="fa-regular fa-star"></i></label>

                                <input type="radio" name="rating" id="star2" value="2">
                                <label for="star2"><i class="fa-regular fa-star"></i></label>

                                <input type="radio" name="rating" id="star1" value="1">
                                <label for="star1"><i class="fa-regular fa-star"></i></label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center border-0 pt-0">
                <button type="button" class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn custom-btn px-4">Submit</button>
            </div>
        </div>
    </div>
</div>
