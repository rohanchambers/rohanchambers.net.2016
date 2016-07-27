$(function($){
		// Init Carousel Jssor
        var options = {
        	//$SlideHeight: 400,
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
                                        
        //Scale slider while window load/resize/orientationchange.
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
});