$(function(){
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

        $('.password_eye').click(function(){
            $(this).toggle();
            $(this).next().toggle();
            $('#password').attr('type', 'text');
            $('[name=password_confirmation]').attr('type', 'text');
        })
        $('.password_eye').next().click(function(){
            $(this).prev().toggle();
            $(this).toggle();
            $('#password').attr('type', 'password');
            $('[name=password_confirmation]').attr('type', 'password');
        })
    });

    // Register Logic
    $('#registerForm').submit(function(e){
        e.preventDefault();

        // $(this).find('[type = submit]').html("<i class='fa fa-spinner'></i> Creating");
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url : $(this).attr('action'),
            type : 'POST',
            dataType: 'application/json',
            data : {
                'username' : $('#username').val(),
                'email' : $('#email').val(),
                'password' : $('#password').val(),
                '_token' : $('input[name=_token]').val()
            },
            success : function(response){
                if(response){
                    // $(this).find('[type = submit]').html("<i class='fa fa-check'></i> Created")
                }
            },
            error: function(response){
                $('#username_r_e').text('');
                $('#email_r_e').text('');
                $('#password_r_e').text('');
                let errors = JSON.parse(response.responseText);
                
                for(error in errors){
                    $(`#${error}_r_e`).text(errors[error].join(''));
                }
                $('#password').val('');
                $('#cPassword').val('');
            }
        });
    })

    // login Logic
    $('#loginForm').submit(function(e){
        e.preventDefault();

        // $(this).find('[type = submit]').html("<i class='fa fa-spinner'></i> Loading");
        $(this).find('[type=submit]').css({'background-color': '#39190c', 'color' : 'white'});
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url : $(this).attr('action'),
            type : 'POST',
            dataType : 'application/json',
            data : {
                'email' : $('#email').val(),
                'password' : $('#password').val(),
                '_token' : $('input[name=_token]').val()
            },
            error : function(response){
                $('#email_l_e').text('');
                $('#password_l_e').text('');
                $('.gen_err_message').text('');
                let errors = JSON.parse(response.responseText);
                $('.gen_error_message').text(JSON.parse(response.responseText).message);
                for(error in errors){
                    if(error == 'email' || error == 'password'){
                        $(`#${error}_l_e`).text(errors[error].join(''));
                    }
                    else if(error == 'errors'){
                        for(errError in errors[error]){
                            $(`#${errError}_l_e`).text(errors[error][errError].join(''));
                        }
                    }
                }
                $('#password').val('');
            }

        });
    })

    // Verify Email Logic
    $('#verifyEmail').submit(function(e){
        e.preventDefault();

        // $(this).find('button').html("<i class='fa fa-spinner'></i> Sending");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url : $(this).attr('action'),
            type : 'POST',
            dataType : 'application/json',
            success : function(){
                $(this).find('button').html('Sent');
                $('.verification-message').text('A new verification link has been sent to the email you provided during registration');
            }
        });
    })


})
