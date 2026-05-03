"use strict";

$(document).ready(function () {

    // Hero Review Count Start
    $('.animate-counter').each(function () {
        let $this = $(this);
        let countTo = parseInt($this.text());

        $this.text('0');

        $({ countNum: 0 }).animate(
            { countNum: countTo },
            {
                duration: 1500,
                easing: 'swing',
                step: function () {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function () {
                    $this.text(this.countNum);
                }
            }
        );
    });
    // Hero Review Count End

    // Slider Start
    $('.services-owl').owlCarousel({
        loop: $('.services-owl .item').length > 1,
        margin: 20,
        autoplay: $('.services-owl .item').length > 1,
        autoplayTimeout: 2500,
        smartSpeed: 600,
        nav: false,
        dots: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 1,
                loop: $('.services-owl .item').length > 1
            },
            576: {
                items: 2,
                loop: $('.services-owl .item').length > 2
            },
            768: {
                items: 3,
                loop: $('.services-owl .item').length > 3
            },
            1200: {
                items: 4,
                loop: $('.services-owl .item').length > 4
            }
        }
    });

    $('.testimonial-owl').owlCarousel({
        loop: $('.testimonial-owl .item').length > 1,
        margin: 20,
        autoplay: $('.testimonial-owl .item').length > 1,
        autoplayTimeout: 2500,
        smartSpeed: 600,
        nav: false,
        dots: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 1,
                loop: $('.testimonial-owl .item').length > 1
            },
            576: {
                items: 2,
                loop: $('.testimonial-owl .item').length > 2
            },
            992: {
                items: 3,
                loop: $('.testimonial-owl .item').length > 3
            }
        }
    });
    // Slider Start End

    // Custom Dropdown Start
    const $dropdown = $('.custom-dropdown');
    const $trigger = $dropdown.find('.nav-link');

    $trigger.on('click', function (e) {
        if ($(window).width() < 992) {
            e.preventDefault();
            $dropdown.toggleClass('active');
        }
    });

    $(document).on('click', function (e) {
        if (!$dropdown.is(e.target) && $dropdown.has(e.target).length === 0) {
            $dropdown.removeClass('active');
        }
    });
    // Custom Dropdown End

});
