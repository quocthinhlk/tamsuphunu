/* Back to top */
jQuery(window).scroll(function(){
    if (window.pageYOffset > 100){
        jQuery(".go-to-top").css("display","flex");
        jQuery(".wapper_menu").addClass("wapper_menu_active");
    } else {
        jQuery(".go-to-top").css("display","none");
        jQuery(".wapper_menu").removeClass("wapper_menu_active");
    }
});

jQuery(document).ready(function ($) {
    "use strict";
    /* Scroll to top */
    $('.go-to-top').on('click', function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});

/* Show/Hide search form */
jQuery( document ).ready(function() {
    jQuery(".btn_search").on('click', function (event) {
        event.preventDefault();
        if (jQuery('.search-text').hasClass('search-form-active')) {
            jQuery('.search-text, .search-close').removeClass('search-form-active');
        } else {
            jQuery('.search-text, .search-close').addClass('search-form-active');
        }
        return false;
    });
    jQuery(".close_button").on('click', function (event) {
        jQuery('.search-text, .search-close').removeClass('search-form-active');
        });
})
/* Slider */
jQuery( document ).ready(function() {
    jQuery('.slider').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:true,
        mouseDrag:false,
        autoplay:true,
        animateOut: 'fadeOut',
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
});

/* Mobile menu */
jQuery( document ).ready(function() {
    jQuery(".burger").on('click', function (event) {
        event.preventDefault();
        if (jQuery('.burger').hasClass('burger_active')) {
            jQuery('.burger').removeClass('burger_active');
            jQuery('.nav-menu-mobile').removeClass('menu-mobile-active');
        } else {
            jQuery('.burger').addClass('burger_active');
            jQuery('.nav-menu-mobile').addClass('menu-mobile-active');
        }
        return false;
    });
})

/*Tab*/
function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabs-content");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("tab-active", "");
    }
    document.getElementById(cityName).style.display = "block";
evt.currentTarget.className += " tab-active";
}

jQuery(document).ready(function() {
    jQuery(".nav-menu-mobile .menu-item-has-children").append("<i class='fas fa-angle-right'></i>");
    jQuery(".nav-menu-mobile .menu-item-has-children > i").attr("data-active", "0");
    jQuery(".nav-menu-mobile .menu-item-has-children > i").click(function(){
        data = jQuery(this).attr("data-active");
        li = jQuery(this).closest(".menu-item-has-children");
        if(data == '0') {
            jQuery(this).attr("data-active", "1");
            jQuery(this).addClass("i-rote");
            jQuery(this).addClass("fa-angle-down");
            jQuery(this).removeClass("fa-angle-right");
            jQuery(li).children(".sub-menu").show();
            jQuery(li).children(".sub-menu").addClass("data-active");

        } else {
            jQuery(this).attr("data-active", "0");
            jQuery(li).children(".sub-menu").hide();
            jQuery(this).removeClass("i-rote");
            jQuery(this).removeClass("fa-angle-down");
            jQuery(this).addClass("fa-angle-right");
        }
    });
});