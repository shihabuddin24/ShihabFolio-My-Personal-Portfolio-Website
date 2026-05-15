"use strict;"

$(document).ready(function () {

    // Setup Ajax
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    // Setup Toastr Message
    toastr.options = {
        closeButton: true,
        progressBar: true,
        newestOnTop: true,
        positionClass: "toast-top-right",
        timeOut: 3000
    };

    // Setup Spinner
    let $submitSpinner = `<div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div>`


    // =========================
    // GLOBAL AJAX FORM HANDLER
    // =========================
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

                // ======================
                // FIX 1: STORE MESSAGE ONLY (NO DUPLICATE TOAST HERE)
                // ======================
                if (res.message) {
                    sessionStorage.setItem("previousMessage", res.message);
                    sessionStorage.setItem("notifyType", res.type ?? "success");
                }

                // ======================
                // FIX 2: REMOVE IMMEDIATE TOAST (IMPORTANT)
                // ======================
                // ❌ আগের bug ছিল: এখানে toastr + redirect race condition
                // তাই এটা remove করা হলো

                // ======================
                // RESET FORM
                // ======================
                form[0].reset();

                // ======================
                // REDIRECT (IMPROVED - NO DELAY)
                // ======================
                if (res.redirect) {
                    window.location.href = res.redirect;
                }

                // ======================
                // SECONDARY REDIRECT
                // ======================
                if (res.secondary_redirect_url) {
                    window.open(res.secondary_redirect_url, "_blank");
                }

            },

            error: function (xhr) {

                if (xhr.status === 422) {

                    $.each(xhr.responseJSON.errors, function (key, value) {
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
