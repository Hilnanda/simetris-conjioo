/*  ---------------------------------------------------
    Template Name: Hotel Template
    Description: Hotel HTML Template
    Author: colorlib
    Author URI: https://www.colorlib.com/
    Version: 1.0
    Created: colorlib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
		Date Picker
	--------------------*/
    $(".datepicker-1").datepicker();
    $(".datepicker-2").datepicker();

    /*------------------
		Nice Selector
	--------------------*/
    $('.suit-select').niceSelect();


    /*------------------
        Room Pic Slider
    --------------------*/
    $(".room-pic-slider").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        items: 1,
        dots: false,
        navText: ['<i class="lnr lnr-arrow-left"></i>', '<i class="lnr lnr-arrow-right"></i>'],
        smartSpeed: 800,
        autoplay: false,
    });

    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });
    window.onload = function() {
        var widget = document.querySelector('.wa-widget');
        widget.style.opacity = 1;
    };
    function checkVisibility() {
        var elementsLeft = document.querySelectorAll('.fade-left');
        var elementsRight = document.querySelectorAll('.fade-right');
        var elementsBottom = document.querySelectorAll('.fade-bottom');
        var elementsTop = document.querySelectorAll('.fade-top');
        var windowHeight = window.innerHeight;

        elementsBottom.forEach(function(element) {
            var position = element.getBoundingClientRect();

            if (position.top < windowHeight && position.bottom >= 0) {
                element.classList.add('fade-in');
            } else {
                element.classList.remove('fade-in');
            }
        });
        elementsTop.forEach(function(element) {
            var position = element.getBoundingClientRect();

            if (position.top < windowHeight && position.bottom >= 0) {
                element.classList.add('fade-in');
            } else {
                element.classList.remove('fade-in');
            }
        });
        elementsLeft.forEach(function(element) {
            var position = element.getBoundingClientRect();

            if (position.top < windowHeight && position.bottom >= 0) {
                element.classList.add('fade-in');
            } else {
                element.classList.remove('fade-in');
            }
        });

        elementsRight.forEach(function(element) {
            var position = element.getBoundingClientRect();

            if (position.top < windowHeight && position.bottom >= 0) {
                element.classList.add('fade-in');
            } else {
                element.classList.remove('fade-in');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility);
    checkVisibility();

    /*------------------
        Magnific Popup
    --------------------*/
    $('.pop-up').magnificPopup({
        type: 'iframe'
    });

})(jQuery);