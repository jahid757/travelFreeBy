$(function() {
    "use strict";
    initSparkline();
    initCounters();
    skinChanger();
    CustomScrollbar();
});
// Sparkline
function initSparkline() {
    $(".sparkline").each(function() {
        var $this = $(this);
        $this.sparkline('html', $this.data());
    });
}
// Counters JS 
function initCounters() {
    $('.count-to').countTo();
}

//Skin changer
function skinChanger() {
    $('.right-sidebar .choose-skin li').on('click', function() {
        var $body = $('body');
        var $this = $(this);

        var existTheme = $('.right-sidebar .choose-skin li.active').data('theme');
        $('.right-sidebar .choose-skin li').removeClass('active');
        $body.removeClass('theme-' + existTheme);
        $this.addClass('active');

        $body.addClass('theme-' + $this.data('theme'));
    });
}

// All Custom Scrollbar JS
function CustomScrollbar() {
    $('.sidebar .menu .list').slimscroll({
        height: 'calc(100vh - 60px)',
        color: 'rgba(0,0,0,0.2)',
        position: 'left',
        size: '2px',
        alwaysVisible: false,
        borderRadius: '3px',
        railBorderRadius: '0'
    });

    $('.navbar-left .dropdown-menu .body .menu').slimscroll({
        height: '300px',
        color: 'rgba(0,0,0,0.2)',
        size: '3px',
        alwaysVisible: false,
        borderRadius: '3px',
        railBorderRadius: '0'
    });
    $('.chat-widget').slimscroll({
        height: '300px',
        color: 'rgba(0,0,0,0.4)',
        size: '2px',
        alwaysVisible: false,
        borderRadius: '3px',
        railBorderRadius: '2px'
    });

    $('.right-sidebar .slim_scroll').slimscroll({
        height: 'calc(100vh - 60px)',
        color: 'rgba(0,0,0,0.4)',
        size: '2px',
        alwaysVisible: false,
        borderRadius: '3px',
        railBorderRadius: '0'
    });   
}

$(function() {
    // Theme Light and Dark  ============
    $('.theme-light-dark .t-light').on('click', function() {
        $('.sidebar').removeClass('menu_dark');
    });

    $('.theme-light-dark .t-dark').on('click', function() {
        $('.sidebar').addClass('menu_dark');
    });

    $(".m_img_btn").on('click',function() {
        $(".sidebar").toggleClass("menu_img");
    });

    //========
    $(".ls-toggle-btn").on('click',function() {
        $("body").toggleClass("ls-toggle-menu");
    });

    //Chat widget js ====
    $('.chat-launcher').on('click', function() {
        $('.chat-launcher').toggleClass('active');
        $('.chat-wrapper').toggleClass('is-open pullUp');
    });

    //=========
    $('.form-control').on("focus", function() {
        $(this).parent('.input-group').addClass("input-group-focus");
    }).on("blur", function() {
        $(this).parent(".input-group").removeClass("input-group-focus");
    });
});

// Thememakker Livechat script
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59f5afbbbb0c3f433d4c5c4c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();