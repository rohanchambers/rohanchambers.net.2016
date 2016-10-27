<?php
    $PRODUCTION = true;
    $browserTitle = '3D Virtual House Version 2. | Rohan Chambers';
    $activePortfolio = 'active';
?>
<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-header.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-header.php"); ?>
    <?php }
?>

    <div id="case-study" class="container">
        <section id="case-study-content" class="col-3">
            <h2>Case study</h2>
			<ul id="controls">
				<li><a href="../freelance-work/stratton-hesler" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../video-3d/virtual-house-ver-1" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>3D Virtual House Version 2.</h1>
            <p><strong>Date: </strong>2007</p>
            <p><strong>Client: </strong>Uni. thesis project</p>
            <p><strong>Technologies: </strong> 3D Animation &amp;and Video</p>
            <p><strong>Tasks:</strong> 3D modelling, animation and video editing.

            <p><strong>Summary: </strong></p>
			<p>These stills are from the thesis practical I made for my degree year. It was a continuation from the house project below. It has much more detail and really shows the model in every conceivable angle. To view the whole movie use the links below. As previously mentioned I recommend the larger movie but then again it all depends on your internet speed connection. But its worth the wait.</p>

			<strong>View site:</strong> Video &amp; images
        </section>
        <section id="case-study-img" class="col-8">
			<object width="580" height="400">
                <param value="true" name="allowfullscreen">
                <param value="always" name="allowscriptaccess">
                <param value="http://vimeo.com/moogaloop.swf?clip_id=11476255&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" name="movie">
                <embed width="580" height="400" allowscriptaccess="always" allowfullscreen="true" type="application/x-shockwave-flash" src="http://vimeo.com/moogaloop.swf?clip_id=11476255&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" style="">
            </object>
			<img src="img/3Dhouse-3.jpg" alt="3D Virtual House Version 2.">
	    	<img src="img/3Dhouse-4.jpg" alt="3D Virtual House Version 2.">
	    	<img src="img/3Dhouse-5.jpg" alt="3D Virtual House Version 2.">
	    	<img src="img/3Dhouse-2.jpg" alt="3D Virtual House Version 2.">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>