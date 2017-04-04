var APP = {};

$(function(){
	APP.nav();
	APP.lightbox();
	APP.caseStudy();
	APP.animateTo();
	APP.mobileLogic();
	APP.accordion();
	APP.plugins();
		APP.jssor();
});

// On load
$(window).load(function() {
	// Load when document is complete otherwise there is a layout issue
	APP.isotope();
	function test() {
		console.log('test!!!');
	}
});

// Change nav state
$(window).resize(function() {
	APP.windowResize();
});

// On scroll
$(document).on('scroll',function(){
	APP.onScroll();	
});

APP.nav = function() {
	// Main nav active states
	$('#nav-main li').click( function(){
		$('#nav-main li').removeClass('active');
		$(this).addClass('active');
	});

    // Main nav scroll to sections
    $('#nav-main ul li a, #logo a').click(function(e) {
    	//e.preventDefault();
        var section = $(this).attr('href').split('#')[1];
        // Nav home link go to top
    	if (section === 'home') {
	        $('html, body').animate({
	            scrollTop: 0
	        }, 1000);
	        return false;
    	} else {
	        $('html, body').animate({
	            scrollTop: $('#' + section).offset().top -75
	        }, 1000);
	        return false;
    	}
    });

	// Portfolio filter buttons active state for 
	$('.filter-button-group a').click( function(){
		$('.filter-button-group a').removeClass('active');
		$(this).addClass('active');
	});
};


APP.lightbox = function() {
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
		$('.lightbox-bg, .lightbox-home, .lightbox-services').fadeOut(speed);
	});

	// If user clicks on the lightbox content don't close
	$('.lightbox-panel').bind('click', function(){
		return false;
	});
};


APP.caseStudy = function() {
	// Open all links in case study in new window
	$("#case-study-content .targetBlank[href^='http://']").attr('target','_blank');

	// Fade in Case study images 
	$('#case-study-img img').hide();
	$('#case-study-img img').fadeIn();
};


APP.animateTo = function() {
    // Home Page links scroll to section
	function goToByScroll(id){
		$('html, body').animate({scrollTop: $('#'+id).offset().top - 75}, 1500);
	}

	$('#about a, #what-i-do a').click( function(e){
		e.preventDefault();
		var linkName = $(this).attr('href').replace('#', '');
		goToByScroll(linkName);
	});

	// Back to top button
	$('#back-to-top').click( function(){
	    $('html, body').animate({ scrollTop: 0}, 1000);
	    return false;
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
};


APP.mobileLogic = function() {
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
};


APP.accordion = function() {
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
};


APP.plugins = function() {

	APP.jssor = function() {
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

	        var jssorSlider = new $JssorSlider$('carousel', options);

	        //responsive code begin | you can remove responsive code if you don't want the slider scales
	        //while window resizing
	        function scaleSlider() {
		        var parentWidth = $('#carousel').parent().width();

		        if (parentWidth) {
		            jssorSlider.$ScaleWidth(parentWidth);
		        } else {
		        	window.setTimeout(scaleSlider, 30);
		        }
		    }

	        //Scale slider after document ready
			scaleSlider();

	        //Scale slider while window load/resize/orientation change.
	        $(window).bind('load', scaleSlider);
	        $(window).bind('resize', scaleSlider);
	        $(window).bind('orientationchange', scaleSlider);
	        //responsive code end
	    }
	};

	APP.isotope = function() {
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
	};
};


APP.windowResize = function() {
	// On window resize back to desktop hide mobile nav
	$('.c-hamburger').removeClass('is-active');
	$('#header-main').removeClass('mobile');
};


APP.onScroll = function() {
	// Homepage up down arrow. If document pos is at the top switch this arrow down
	if( $(document).scrollTop() === 0) {
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
};