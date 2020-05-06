$(document).ready(function(){
    $('#menu-icon').click (function () {
        $('#search-collapse').removeClass('show');
    });

    $('.mobileSearch').click (function () {
        $('#nav-menu-mobile').removeClass('show');
    });
    $( document ).on( "click",".show-hidden-cells", function(e) {
        e.preventDefault();
        $(this).toggleClass('shown');
        $(this).closest('.casino-list-row').toggleClass('opened-row');
    });

    $('.dropdown-submenu a.dropdown-toggle').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });

    $( ".reply-btn").on("click", function(event){
        event.preventDefault();
        if($(this).siblings(".reply-button, .reply-content").is(":hidden")) {
            $(this).siblings(".reply-button, .reply-content").show();
        }
    });

    $(function () {
        $(".tooltip-btn").tooltip();
    });

    if($('.copy-code').length) {
        $('.copy-code').each(function(){
            var code = $(this);
            code.on('click', function(event){
                $('#copyText').val($.trim(code.text())).select();
                document.execCommand("copy");
                code.tooltip('show');
                $(".tooltip-hover").tooltip('hide');
                setTimeout(function() {
                    code.tooltip('hide');
                }, 1000)
            });
        });
    }

    $('.lazyload').lazyload({
        effect : "fadeIn",
        threshold : 200
    });

    $("#carouselHeader").on("slide.bs.carousel", function(ev) {
        $("img.lazyload").lazyload();
    });

    if($(".latest-bonus-slider").length) {
        $(".latest-bonus-slider").not('.slick-initialized').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
        $('.latest-bonus-slider').on('init', function(){
            $('.latest-bonus-slider').find("img.lazyload").lazyload();
        });
        $('.latest-bonus-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            $('.latest-bonus-slider').find("img.lazyload").lazyload();
        });
    }

    if($(".review-bonus-list").length) {
        $(".review-bonus-list").not('.slick-initialized').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        arrows:false,
//                         adaptiveHeight: true,
                    }
                }
            ]
        });
    }

    if($(".slider-big-img").length) {
        $(".slider-big-img").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: ".slider-thumb-nav"
        });
    }

    if($(".slider-thumb-nav").length) {
        $(".slider-thumb-nav").slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: ".slider-big-img",
            dots: false,
            arrows: false,
            focusOnSelect: true
        });
    }

    $( document ).on( "click",".show-more", function(e) {
        e.preventDefault();
        const $this = $(this),
            data = $this.attr('data-controls'),
            state = $this.attr('data-state'),
            text = $this.text();
        $this.attr('data-state', state === 'closed' ? 'opened'  : 'closed');
        $this.text(state === 'closed' ? 'SHOW LESS' : 'SHOW MORE');
        $this.siblings().toggleClass('show-more-height' + data);
        return false;
    });

    if($(".morecasinowar").length) {
        $( ".morecasinowar" ).each(function(){
            $( this ).hover(
              function() {
                $( this ).find('.casinowar').show();
              }, function() {
                $( this ).find('.casinowar').hide();
              }
            );
        });
    }

    if ($(".cover-image-holder").length) {
        var bckgMovementStrength = 25;
        var bckgHeight = bckgMovementStrength / $(window).height();
        var bckgWidth = bckgMovementStrength / $(window).width();
        $(".cover-image-holder").css("height", $(".header-holder").height());
        $(".cover-image-holder").mousemove(function(e){
              var pageX = e.pageX - ($(window).width() / 2);
              var pageY = e.pageY - ($(window).height() / 2);
              var newvalueX = bckgWidth * pageX * -1 - 25;
              var newvalueY = bckgHeight * pageY * -1 - 50;
              $('.cover-image-holder').css("background-position", newvalueX+"px "+newvalueY+"px");
        });
    }

    if ($("#ouibounce-modal").length) {
        var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {timer: 5000});
        $('body').on('click', function() {
            $('#ouibounce-modal').hide();
        });
        $('#ouibounce-modal .ouibounce-footer').on('click', function() {
            $('#ouibounce-modal').hide();
        });
        $('#ouibounce-modal .modal-inner').on('click', function(e) {
            e.stopPropagation();
        });
    }

});

 $('body').popover({
    placement: 'bottom',
    container: 'body',
    trigger: 'hover',
    html: true,
    animation: false,
    selector: '[data-toggle="popover"]'
});

if($('.secondMenu').length) {
    $('.secondMenu').click(function (){
        $('li.active').removeClass('active');
        $(this).addClass('active');
    });
}

function moveAccordion() {
    if($('.main-text-section').length) {
        if (window.matchMedia('(max-width: 766px)').matches) {
            $('.main-text-section').insertAfter($('.join-content'));
        } else {
            $('.main-text-section').insertAfter($('.latest-news-section'));
        }
    }
}
$(document).ready(function(){
   moveAccordion();
});
$( window ).resize(function() {
   moveAccordion();
});