<div class="modal fade review-modal" id="reviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-0 pb-0">
                <h4 class="modal-title fw-bold">Review Me</h4>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <form action="" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" class="form-control custom-input" placeholder="Enter your full name">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Email Address</label>
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
                            <label class="form-label fw-semibold d-block"> Rating</label>
                            <div class="rating-stars">
                                <input type="radio" name="rating" id="star5">
                                <label for="star5">★</label>

                                <input type="radio" name="rating" id="star4">
                                <label for="star4">★</label>

                                <input type="radio" name="rating" id="star3">
                                <label for="star3">★</label>

                                <input type="radio" name="rating" id="star2">
                                <label for="star2">★</label>

                                <input type="radio" name="rating" id="star1">
                                <label for="star1">★</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary px-4">Submit</button>
            </div>
        </div>
    </div>
</div>
