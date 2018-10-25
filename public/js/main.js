$(document).ready(function () {

    var toggleAffix = function (affixElement, scrollElement, wrapper) {

        var height = affixElement.outerHeight(),
                top = wrapper.offset().top;

        if (scrollElement.scrollTop() >= top) {
            wrapper.height(height - 35);

            affixElement.addClass("affix");
            $('.logo').attr('src', 'http://www.maxiskippers.pl/img/logoinvtext.svg');
            $('.badges-row').css({
                'padding-top': '100px'
            });
            $('#language').css({
                'visibility': 'visible'
            });
        } else {
            affixElement.removeClass("affix");
            $('.logo').attr('src', 'http://www.maxiskippers.pl/img/logotext.svg');
            $('.badges-row').css({
                'padding-top': '60px'
            });
            $('#language').css({
                'visibility': 'hidden'
            });
            wrapper.height('auto');
        }

    };


    $('[data-toggle="affix"]').each(function () {
        var ele = $(this),
                wrapper = $('<div></div>');


        //blank.height(videoHeight);
        ele.before(wrapper);
        //wrapper.before(blank);
        $(window).on('scroll resize', function () {
            toggleAffix(ele, $(this), wrapper);
        });

        // init
        toggleAffix(ele, $(window), wrapper);
    });

    $('body').scrollspy({target: '#maxi-navbar'});

    /* smooth scroll from website: https://css-tricks.com/snippets/jquery/smooth-scrolling/*/
//    $('a[href*=#]:not([href=#])').click(function () { // for all link starting with '#'
//        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
//                || location.hostname === this.hostname) {
//
//            var target = $(this.hash);
//            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//            if (target.length) {
//                $('html,body').animate({
//                    scrollTop: target.offset().top - 190
//                }, 1000);
//                return false;
//            }
//        }
//    });

});