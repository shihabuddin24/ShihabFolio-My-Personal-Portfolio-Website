"use strict";

$(document).ready(function () {

    $('#toggleBtn').click(function () {

        if ($(window).width() <= 991) {

            $('#sidebar').toggleClass('mobile-show');

            $('#sidebarOverlay').toggleClass('show');

        } else {

            $('#sidebar').toggleClass('collapsed');

            $('#mainHeader').toggleClass('expand');

            $('#mainContent').toggleClass('expand');

        }

    });

    /* overlay click */

    $('#sidebarOverlay').click(function () {

        $('#sidebar').removeClass('mobile-show');

        $(this).removeClass('show');

    });

    /* close button */

    $('#sidebarCloseBtn').click(function () {

        $('#sidebar').removeClass('mobile-show');

        $('#sidebarOverlay').removeClass('show');

    });

    /* resize fix */

    $(window).resize(function () {

        if ($(window).width() > 991) {

            $('#sidebar').removeClass('mobile-show');

            $('#sidebarOverlay').removeClass('show');

        }

    });

});
