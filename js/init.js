jQuery(document).ready(function($){

    $('.reviewSlider__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 4000,
        draggable: true,
        fade: false,
        prevArrow: '<div class="slick-prev slick-arrow"></div>',
        nextArrow: '<div class="slick-next slick-arrow"></div>',
    });

    function removeSlider( $elem ) {
        if ( $elem.hasClass('slick-initialized') ) {
            $elem.slick('unslick');
        }
    }


    function initRemoveSliders (){
        if ( $(window).width() < 992 ) {
            if ( !$('.mainScreen__items').hasClass('slick-initialized') ) {
                $('.mainScreen__items').on('init', function(event, slick){
                    var stHeight = $(this).find('.slick-track').height();
                    $(this).find('.slick-slide').css('height',stHeight + 'px' );
                });

                $('.mainScreen__items').slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    fade: false,
                    cssEase: 'linear',
                    prevArrow: '<div class="slick-prev slick-arrow"></div>',
                    nextArrow: '<div class="slick-next slick-arrow"></div>',
                });
            }

            if ( !$('.offers__list').hasClass('slick-initialized') ) {
                $('.offers__list').slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    fade: false,
                    cssEase: 'linear',
                    prevArrow: '<div class="slick-prev slick-arrow"></div>',
                    nextArrow: '<div class="slick-next slick-arrow"></div>',
                });
            }
        } else {
            removeSlider( $('.mainScreen__items') );
            removeSlider( $('.offers__list') );
        }
    }

    $(window).load(function(){
        initRemoveSliders();
    });

    $(window).on('resize', function(){
        initRemoveSliders();
    });


    /*
    $('.singleGood__sliderNav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.singleGood__sliderFor',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        autoplay: false,
        arrows: true,
        centerPadding: 0,
    });

    if ( window.matchMedia('(max-width: 500px)').matches ) {

        $('.similarGoods__row').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
        });

    } else if (window.matchMedia('(min-width: 768px)').matches) {
        /!*$($menu).show();*!/
    }

    $('.singleGood__sliderForLink').magnificPopup({
        type: 'image',
        removalDelay: 500,
        mainClass: 'mfp-fade popup_image',
        showCloseBtn: true,
        closeMarkup: '<div class="mfp-close">x</div>',
        closeBtnInside: true,
        closeOnContentClick: false,
        closeOnBgClick: true,
        alignTop: false,
        fixedContentPos: true,
        gallery: {
            enabled: true
        }
    });*/







    /*$('.mainTabs__inner').tabs();
    $('.reg__popup__tabs').tabs();

    $('.header__support, .header__regLink, .searchPage__searchItem_orderBtn, .header__hamburger, .hamburger__menuPopup__support').magnificPopup({
        type:'inline',
        removalDelay: 0,
        mainClass: 'mfp-fade popup_inline',
        showCloseBtn: true,
        closeMarkup: '<div class="mfp-close"></div>',
        closeBtnInside: true,
        closeOnContentClick: false,
        closeOnBgClick: true,
        alignTop: false,
        fixedContentPos: true,
    });

    $('.mainTabs__mob').magnificPopup({
        type:'inline',
        removalDelay: 0,
        mainClass: 'mfp-fade popup_inline',
        showCloseBtn: true,
        closeMarkup: '<div class="mfp-close"></div><div class="mfp-close done"></div>',
        closeBtnInside: true,
        closeOnContentClick: false,
        closeOnBgClick: false,/!* нельзя закрыть кликнув на фоне *!/
        alignTop: false,
        fixedContentPos: true,
        callbacks: {
            beforeOpen: function() {
                var $triggerEl = $(this.st.el),
                    newClass = 'mainTabs__mob_modal_wrap';
                    this.st.mainClass = this.st.mainClass + ' ' + newClass;

                $triggerEl.find('.mainTabs__orderQty').append('<button type="button" onClick="closePopup();">Close</button>');
            }
        },
    });

    function closePopup() {
        $.magnificPopup.close();
    }
*/

    $('.log-in-dropdown-link').magnificPopup({
        type:'inline',
        removalDelay: 0,
        mainClass: 'mfp-fade popup_inline popup__login',
        showCloseBtn: true,
        closeMarkup: '<div class="mfp-close"></div>',
        closeBtnInside: true,
        closeOnContentClick: false,
        closeOnBgClick: true,
        alignTop: false,
        fixedContentPos: true,
        callbacks: {
            open: function() {

            },
            close: function() {

            },
        }
    });

    $('.hamburger').magnificPopup({
        type:'inline',
        removalDelay: 0,
        mainClass: 'mfp-fade popup_inline menu__popup',
        showCloseBtn: true,
        closeMarkup: '<div class="mfp-close-custom"><span></span><span></span><span></span></div>',
        closeBtnInside: true,
        closeOnContentClick: false,
        closeOnBgClick: true,
        alignTop: false,
        fixedContentPos: true,
        callbacks: {
            open: function() {
                var elemTop = ( $(window).width() >= 500 ) ? $('.hamburger').offset().top - $(window).scrollTop() : '20px';

                $('.headerBottom__menuWrap').css({
                    'margin-top': elemTop,
                });

                $('.mfp-content .headerBottom__menuWrap').css({
                    'width': $('.headerBottom__inner').width(),
                    'margin-left': 'auto',
                    'margin-right': 'auto',
                });
            },
            close: function() {
                $('.mfp-content .headerBottom__menuWrap').css({
                    'width': '',
                    'margin-left': '',
                    'margin-right': '',
                });
            },
            beforeOpen: function() {
                var $triggerEl = $(this.st.el),
                    newClass = 'menu__popup';
                this.st.mainClass = this.st.mainClass + ' ' + newClass;
            }
        }
    });

    $(document).on('click', '.mfp-close-custom', function(){
        $.magnificPopup.close();
    });


    $('.formPopupLink').magnificPopup({
        type:'inline',
        removalDelay: 0,
        mainClass: 'mfp-fade popup_inline form__popup',
        showCloseBtn: true,
        closeBtnInside: true,
        closeOnContentClick: false,
        closeOnBgClick: true,
        alignTop: false,
        fixedContentPos: true,
        callbacks: {
            open: function() {

            },
            close: function() {

            },
            beforeOpen: function() {

            }
        }
    });


});

