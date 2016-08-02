// Detect browser width
function getWidth() {
	if (self.innerHeight) {
		return self.innerWidth;
	}

	if (document.documentElement && document.documentElement.clientHeight) {
		return document.documentElement.clientWidth;
	}

	if (document.body) {
		return document.body.clientWidth;
	}
}

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$('#header-main').addClass('mobile');
}

$(function($){

	    // Scroll to sections
	    $('#nav-main ul li a').click(function(e) {
	        var section = $(this).attr('href').split('#')[1];

	        $('html, body').animate({
	            scrollTop: $('#' + section).offset().top
	        }, 300);
	    });

	    // Intro scroll down and up
	    $('.intro-scroll-arrow').click(function(e) {
	    	if( $(this).hasClass('scroll-up') ) {
		        $('html, body').animate({
		            scrollTop: $('#' + 'nav-main').offset().top
		        });
		        $(this).toggleClass('scroll-up');
	    	} else {
		        $('html, body').animate({
		            scrollTop: $('#' + 'about').offset().top
		        });
		        $(this).toggleClass('scroll-up');
	    	}
	    });


		// Init Carousel Jssor
        var options = {
        	$SlideHeight: 250,
        	$ArrowNavigatorOptions: true,
        	$AutoPlay: true,
        	$Loop: 1,
        	$PauseOnHover: 2,
        	$FillMode: 2,
	        $ArrowNavigatorOptions: {
	            $Class: $JssorArrowNavigator$
	        }
    	};

        var jssor_slider1 = new $JssorSlider$('carousel', options);

        //responsive code begin | you can remove responsive code if you don't want the slider scales
        //while window resizing
        function ScaleSlider() {
	        var parentWidth = $('#carousel').parent().width();

	        if (parentWidth) {
	            jssor_slider1.$ScaleWidth(parentWidth);
	        } else {
	        	window.setTimeout(ScaleSlider, 30);
	        }
	    }

        //Scale slider after document ready
        ScaleSlider();

        //Scale slider while window load/resize/orientation change.
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end


        // Bourbon Refill Accordion
		$('.accordion-tabs-minimal').each(function(index) {
			$(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
		});

		$('.accordion-tabs-minimal').on('click', 'li > a.tab-link', function(event) {
			if (!$(this).hasClass('is-active')) {
				event.preventDefault();
				var accordionTabs = $(this).closest('.accordion-tabs-minimal');
				accordionTabs.find('.is-open').removeClass('is-open').hide();

				$(this).next().toggleClass('is-open').toggle();
				accordionTabs.find('.is-active').removeClass('is-active');
				$(this).addClass('is-active');
			} else {
				event.preventDefault();
			}
		});

		// Hamburger functionality
		var navMain = $('#nav-main');

		$('.c-hamburger').click( function(){
			// Toggle hamburger icon
			$(this).toggleClass('is-active');
			// Toggle main nav
			$('#nav-main').toggleClass('mobile');
		});

		// fixme
		$('#nav-main ul li a').on( 'click', function(){
			$('.c-hamburger').toggleClass('is-active');
			$('#nav-main.mobile').toggleClass('mobile');
			$('#nav-main ul li').removeClass('active');
			$(this).parent().addClass('active');
		});
});

// Document on scroll change nav state
$(document).on('scroll',function(){
	if(getWidth() > 980){
		// On scroll of 100px activate minified nav
	    if($(document).scrollTop() > 70) {
	    	$('.c-hamburger').fadeIn(300);
	        $('#nav-main ul').fadeIn();

	    } else {
	        $('.c-hamburger').fadeOut(300);
	        //$('#nav-main ul').fadeOut();
	    }
	}
});

// On window resize back to desktop hide mobile nav
$( window ).resize(function() {
	$('.c-hamburger').removeClass('is-active');
	$('#nav-main').removeClass('mobile');
});



