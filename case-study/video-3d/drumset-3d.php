<?php
    $PRODUCTION = true;
    $browserTitle = '3D Drumset | Rohan Chambers';
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
				<li><a href="../video-3d/archi-design" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../video-3d/stalker" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>3D Drumset</h1>
            <p><strong>Date: </strong>2007</p>
            <p><strong>Client: </strong>Uni. project</p>
            <p><strong>Technologies: </strong> Maya, Photoshop</p>
            <p><strong>Tasks:</strong>  I had to model, animate, light and finally render stills of the model appropriately using professional 3D software Maya.

            <p><strong>Summary: </strong></p>
			<p>This project was assigned to me during my Multimedia degree year which consisted in modelling any still object of my choice. I chose to model a drumset.</p>	

			<strong>View site:</strong> Images
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/variation2.jpg" alt="3D Drumset variation 1">
			<img src="img/mainImage.jpg" alt="3D Drumset variation 2">
			<img src="img/variation1.jpg" alt="3D Drumset variation 2">
			<img src="img/variation3.jpg" alt="3D Drumset variation 3">
			<img src="img/variation4.jpg" alt="3D Drumset variation 4">
		</section>
	</div><!-- End of container -->

<?php include("../../incl/inc-footer.php"); ?>