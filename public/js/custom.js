$(window).load(function() {
    $('#slider').nivoSlider({
            effect: 'random',
            slices: 15,
            boxCols: 8,
            boxRows: 4,
            animSpeed: 500,
            pauseTime: 4000,
            startSlide: 0,
            directionNav: true,
            controlNav: false,
            controlNavThumbs: false,
            pauseOnHover: false,
            manualAdvance: false,
            prevText: '',
            nextText: '',
            randomStart: false,
        });
        new WOW().init();
        $('.slick-slider').slick({
            autoplay:true,
            autoplaySpeed:3000,
            fade:true,
            cssEase: 'linear',
            arrows:false
        });

        $(window).scroll(function() {
            if($(window).scrollTop() > 0) $('#static-nav').hide();
            else $('#static-nav').show();

            if($(window).scrollTop() > 15){
                $('#header').css('background-color', '#583c30').fadeIn();
                if($(window).outerWidth() > 576) $('#header button').fadeIn();
            }
            else{
                $('#header').fadeOut();
                $('#header button').fadeOut();
            }
        });

        $('.trigger-sideNav').click(function(){
            $('#sideNav').animate({left : 0});
            $('#sideNav-overlay').fadeIn();
        })

        $('.closeSideNav').click(function(){
            $('#sideNav').animate({left : '-15rem'});
            $('#sideNav-overlay').fadeOut();
        })

        $('#sideNav-overlay').click(function(){
            $('#sideNav').animate({left : '-15rem'});
            $('#sideNav-overlay').fadeOut();
        });

        if($(window).outerWidth() < 576){
            $(".gradient-border").focus(function(){
                $(this).parent().css({position:'relative', right :'4rem'})
            })
            $(".gradient-border").focusout(function(){
                $(this).parent().css({position:'relative', right :0})
            })
        }
});