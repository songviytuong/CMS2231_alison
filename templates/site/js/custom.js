$(document).ready(function () {
    var words = ["^1000" + Lang.get('form.course-1'), "^1000" + Lang.get('form.course-2'), "^1000" + Lang.get('form.course-3'), "^1000" + Lang.get('form.course-4'), "^1000" + Lang.get('form.course-5')];
    var formTarget = $(".banner-hp .categories-search .form-control"),
            button = $('.banner-hp .trigger-search'),
            backTimer = 2000;
    if ($(window).width() > 767) {
        formTarget.focus();
    }
    formTarget.typed({
        strings: words,
        typeSpeed: 100,
        loop: true,
        backDelay: backTimer,
        showCursor: true,
        cursorChar: "|",
        preStringTyped: function () {
            button.removeClass('highlighted');
        },
        onStringTyped: function () {
            button.addClass('highlighted');
            setTimeout(function () {
                button.removeClass('highlighted');
            }, backTimer)
        },
    });
    var active = true;
    formTarget.on('click keypress', function () {
        if (active === true) {
            button.removeClass('highlighted');
            $(this).data('typed').reset();
            $(this).val('');
            active = false;
        }
    });
    button.click(function () {
        formTarget.data('typed').reset();
    });
    var $slide = $('.user-testimonial-slider');
    $slide.slick({
        variableWidth: true,
        centerMode: true,
        centerPadding: '0',
        dots: false,
        arrows: false,
    });
    $('.testimonial-navigation span').click(function () {
        var direction = $(this).hasClass('right') ? 'slickNext' : 'slickPrev';
        $slide.slick(direction);
    });
    $slide.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var text = $('.slick-slide[data-slick-index="' + nextSlide + '"]').find('.slide-text').text();
        $('.user-current-text').height($('.user-current-text').height()).find('p').fadeOut(function () {
            $(this).html(text).fadeIn()
        });
        $('.user-current-text').attr('style', '')
    });
    if ($(window).width() < 768) {
        $('.buttons-container-inner').slick({
            centerPadding: '0',
            dots: false,
            arrows: false,
            slidesToShow: 3,
            responsive: [{
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 360,
                    settings: {
                        slidesToShow: 1
                    }
                }]
        });
        $('.homepage-publishers-images').slick({
            centerPadding: '0',
            dots: false,
            arrows: false,
            slidesToShow: 3,
            responsive: [{
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 361,
                    settings: {
                        slidesToShow: 1
                    }
                }]
        });
        var tabsSlider = $('.buttons-container-inner'),
                pubSlider = $('.homepage-publishers-images');
        $('.slide-buttons span').click(function () {
            var targetSlider = ($(this).parent().hasClass('publishers-slider')) ? pubSlider : tabsSlider,
                    direction = $(this).hasClass('move-right') ? "slickNext" : "slickPrev";
            targetSlider.slick(direction)
        });
    }
    $('.course-tab').click(function () {
        $('.course-tab.active').removeClass('active');
        $(this).addClass('active');
    });
});