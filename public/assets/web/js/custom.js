"use strict";

$(document).ready(function () {
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
});
