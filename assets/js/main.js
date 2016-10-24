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

// Back to the top button
$('#back-to-top').click( function(){
    $('html, body').animate({ scrollTop: 0}, 1000);
    return false;
});

$(function($){
	// Portfolio active state for filter buttons
	$('.filter-button-group a').click( function(){
		$('.filter-button-group a').removeClass('active');
		$(this).addClass('active');
	});

	// Main nav active states
	$('#nav-main li').click( function(){
		$('#nav-main li').removeClass('active');
		$(this).addClass('active');
	});

	// Lightbox
	var lightboxbg = $('.lightbox-bg');
	var speed = 500;

	$('.cta-lightbox-home').bind('click', function(){	
		$(lightboxbg).fadeIn(speed, function(){
			$('.lightbox-home').fadeIn('slow');
		});
		return false;
	});

	$('.cta-lightbox-services').bind('click', function(){
		$(lightboxbg).fadeIn(speed, function(){
			$('.lightbox-services').fadeIn('slow');
		});
		return false;
	});
	
	// Close lightbox
	$('html, body, .lightbox-bg, .close a').bind('click', function(){
		console.log(999);
		$('.lightbox-bg, .lightbox-home, .lightbox-services').fadeOut(speed);
	});

	// If user clicks on the lightbox content don't close
	$('.lightbox-panel').bind('click', function(){
		return false;
	});

    // Load isotope only on portfolio apge
	if ($('#page-portfolio').length > 0) {
		// Init Isotope
		var $grid = $('.grid').isotope({
		  	// Options
			itemSelector: '.grid-item',
			percentPosition: true,
			layoutMode: 'fitRows',

			masonry: {
			// use element for option
			columnWidth: '.grid-item'
			}

		});

		// Filter items on button click
		$('.filter-button-group').on( 'click', 'a', function() {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});
	}

	// Open all links in case study in new window
	$("#case-study-content .targetBlank[href^='http://']").attr('target','_blank');

    // Scroll to sections
    $('#nav-main ul li a').click(function(e) {
    	//e.preventDefault();
        var section = $(this).attr('href').split('#')[1];
        // Nav home link go to top
    	if (section == 'home') {
	        $('html, body').animate({
	            scrollTop: 0
	        }, 1000);
	        return false;
    	} else {
	        $('html, body').animate({
	            scrollTop: $('#' + section).offset().top -60
	        }, 1000);
	        return false;
    	}
    });

    // Intro scroll down and up
    $('.intro-scroll-arrow').click(function(e) {    	
		$(this).removeClass('buttonPulse');
    	if( $(this).hasClass('scroll-up') ) {    		
	        $('html, body').animate({
	            scrollTop: 0
	        }, 1000);
	        $(this).toggleClass('scroll-up');
    	} else {
	        $('html, body').animate({
	            scrollTop: $('#' + 'about').offset().top -68
	        }, 1000);
	        $(this).toggleClass('scroll-up');
    	}
    });

    // Load carousel only on homepage
	if ($('#page-home').length > 0) {
		// Init Carousel Jssor
        var options = {
        	$SlideHeight: 420,
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
    }

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

	// Trigger mobile open nav
	$('.c-hamburger').click( function(){
		// Toggle hamburger icon
		$(this).toggleClass('is-active');
		// Toggle main nav
		$('#header-main').toggleClass('mobile');
	});

	// Mobile Nav open logic
	$('#header-main ul li a').on( 'click', function(){
		$('.c-hamburger').toggleClass('is-active');
		$('#header-main.mobile').toggleClass('mobile');
		// Add and remove active states
		$('#nav-main ul li').removeClass('active');
		$(this).parent().addClass('active');
	});
});

// On window resize back to desktop hide mobile nav
$( window ).resize(function() {
	$('.c-hamburger').removeClass('is-active');
	$('#header-main').removeClass('mobile');
});

// Document on scroll change nav state
$(document).on('scroll',function(){

	// Homepage up down arrow. If document pos is at the top switch this arrow down
	if( $(document).scrollTop() == 0) {
		$('.intro-scroll-arrow').removeClass('scroll-up');
	}

	// Is scroll is past button in question switch it up
	if( $(document).scrollTop() > 450) {
		$('.intro-scroll-arrow').addClass('scroll-up');
	}

	// On homeapge only go back to top show hide mini to full desktop nav

	    var homeSectionHeight = 70;
	    if( $(document).scrollTop() > homeSectionHeight) {
	            $('#back-to-top').fadeIn().addClass('buttonTopPulse');
	            $('#header-main').addClass('mini');
	            $('.carousel').addClass('mini');
	        } else {
	            $('#back-to-top').fadeOut().removeClass('buttonTopPulse');
	            $('#header-main').removeClass('mini');
	            $('.carousel').removeClass('mini');
	    }

});