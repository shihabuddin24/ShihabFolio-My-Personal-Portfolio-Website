"use strict;"

$(document).ready(function () {

    // Setup Ajax
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    // Setup Spinner
    let $submitSpinner = `<div class="spinner-border spinner-border-sm  text-light" role="status"><span class="visually-hidden">Loading...</span></div>`

    // Global Ajax Form Submit
    $(document).on("submit", ".ajax-form", function (e) {
        e.preventDefault();

        let form = $(this);
        let btn = form.find(".submit-btn");
        let originalBtn = btn.html();

        btn.prop("disabled", true).html($submitSpinner);

        $.ajax({
            url: form.attr("action"),
            type: form.attr("method") || "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,

            success: function (res) {

                // Message
                let message = typeof res === "string" ? res : res.message;

                if (message) {
                    toastr.success(message);
                }

                // Reset Form
                if (form.data("reset")) {
                    form[0].reset();
                }

                // Redirect
                if (res.redirect) {
                    window.location.href = res.redirect;
                }

                // Secondary Redirect
                if (res.secondary_redirect_url) {
                    window.open(res.secondary_redirect_url, "_blank");
                }
            },

            error: function (xhr) {

                // Validation Error
                if (xhr.status === 422) {

                    let errors = xhr.responseJSON?.errors;

                    if (errors) {

                        let allErrors = Object.values(errors).flat();
                        let firstError = allErrors[0].replace(/\.$/, "");
                        let extraCount = allErrors.length - 1;

                        let message = firstError;

                        if (extraCount > 0) {
                            message += ` & ${extraCount} more error${extraCount > 1 ? 's' : ''}`;
                        }

                        message += ".";
                        toastr.warning(message);

                    } else {
                        toastr.warning(xhr.responseJSON?.message ?? "Validation Error");
                    }

                    return;
                }

                // Other Errors
                toastr.error(xhr.responseJSON?.message ?? "Something went wrong");
            },

            complete: function () {
                btn.prop("disabled", false).html(originalBtn);
            }

        });

    });

});
