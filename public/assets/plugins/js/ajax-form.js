"use strict;"

$(document).ready(function () {

    // Setup Ajax
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    // Setup Toastr Message
    toastr.options = {preventDuplicates: true};

    // Setup Spinner
    let $submitSpinner = `<div class="spinner-border spinner-border-sm  text-light" role="status"><span class="visually-hidden">Loading...</span></div>`


    $(document).on("submit", ".ajax-form", function (e) {
        e.preventDefault();

        let form = $(this);
        let url = form.attr("action");
        let method = form.attr("method") || "POST";

        let btn = form.find(".submit-btn");
        let originalBtn = btn.html();

        btn.prop("disabled", true);
        btn.html($submitSpinner);

        $.ajax({
            url: url,
            type: method,
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,

            success: function (res) {

                if (res.message) {
                    sessionStorage.setItem("hasPreviousMessage", "1");
                    sessionStorage.setItem("previousMessage", res.message);
                    sessionStorage.setItem("notifyType", res.type ?? "success");
                }

                if (!res.redirect && res.message) {
                    toastr.success(res.message);
                }

                if(form.data("reset")){
                    form[0].reset();
                }

                if (res.redirect) {
                    window.location.href = res.redirect;
                }

                if (res.secondary_redirect_url) {
                    window.open(res.secondary_redirect_url, "_blank");
                }

            },

            error: function (xhr) {

                if (xhr.status === 422) {

                    let errors = xhr.responseJSON.errors;

                    $.each(errors, function (key, value) {
                        toastr.warning(value[0]);
                    });

                    return;
                }

                if (xhr.status === 500) {
                    toastr.error(xhr.responseJSON?.message ?? "Internal Server Error");
                    return;
                }

                toastr.error("Something went wrong");

            },

            complete: function () {
                btn.prop("disabled", false);
                btn.html(originalBtn);
            }

        });

    });

});
