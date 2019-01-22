<?php
    $PRODUCTION = true;
    $browserTitle = '3D Archi Design | Case study';
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
				<li><a href="../video-3d/virtual-house-ver-1" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../video-3d/virtual-house-ver-1" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>3D Archi Design</h1>
            <!-- <p><strong>Date: </strong>2007</p> -->
            <p><strong>Client: </strong>Uni. project</p>
            <p><strong>Technologies: </strong> 3D Animation &amp;and Video</p>
            <p><strong>Tasks:</strong> 3D modelling, animation and video editing.

            <p><strong>Summary: </strong></p>
			<p>This commercial video was created to promote the setup of a company called 3DArchiDesign ltd. The services that this company provided were to create 3D virtual walkthroughs of houses in the making in order to show clients how a house would look like before its built.</p>						
			<p>The video had to be short, concise, to the point and show off the services 3DArchiDesign can provide. I used software such as final cut pro 4 to edit the video. Music and speech was recorded specially for the video like any other commercial to help convey our message more affectively. "Come and experience your future home, with us"</p>

			<strong>View site:</strong> Video
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/3dArchiDesign.jpg" alt="3dArchiDesign">
			<object width="580" height="400">
	            <param value="true" name="allowfullscreen">
	            <param value="always" name="allowscriptaccess">
	            <param value="http://vimeo.com/moogaloop.swf?clip_id=11477711&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" name="movie"><embed width="580" height="400" allowscriptaccess="always" allowfullscreen="true" type="application/x-shockwave-flash" src="http://vimeo.com/moogaloop.swf?clip_id=11477711&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1">
	        </object>
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>