<?php
    $PRODUCTION = true;
    $browserTitle = 'Interactive CD-Rom, Stalker project | Case study';
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
				<li><a href="../video-3d/drumset-3d" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="/portfolio" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Interactive CD-Rom, Stalker project</h1>
            <!-- <p><strong>Date: </strong>2007</p> -->
            <p><strong>Client: </strong>Uni. project</p>
            <p><strong>Tasks:</strong> The software' s used for this project were Illustrator, Photoshop and the more advanced use of Director MX using its lingo scripting.

            <p><strong>Summary: </strong></p>
			<p>This project was assigned to me during my Multimedia degree year which consisted in modelling any still object of my choice. I chose to model a drumset.</p>	

			<strong>View site:</strong> Images
        </section>
        <div id="case-study-img" class="col-8">
            <img src="img/stalker-home.jpg" alt="Stalker project">
			<img src="img/stalker-main.jpg" alt="stalker-main-2">
			<img src="img/stalker-main-2.jpg" alt="stalker-main-2">
			<img src="img/stalker-main-3.jpg" alt="stalker-main-3">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>