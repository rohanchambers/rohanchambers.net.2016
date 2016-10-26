<?php
    $PRODUCTION = true;
    $browserTitle = 'PG tips, Cuppa Club 2 | Rohan Chambers';
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
				<li><a href="../netflix/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../moet/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>PG tips, Cuppa Club 2</h1>
            <p><strong>Date: </strong>2015</p>
            <p><strong>Client: </strong>PG tips</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, PHP Fat-Free Framework</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>I developed all of the front end build for the PG tips, Cuppa Club 2 Facebook app. while working closely with the backend developers that were integrating my templates in the PHP Fat-Free Framework.</p>
			<p>Isn't it all nice and shiny? Why don't you share a photo of your own cuppa club to be in with a chance of winning a free pack of PG tips, with your very own Cuppa Club points on it, of course!</p>
			<p>Share a photo of your fantastic cuppa club and you will be in with a chance of winning one out of 100 packs of PG tips every month!</p>
            <p><strong>View site:</strong> <a href="https://www.facebook.com/PGtips/app_485954381503668" class="targetBlank">http://www.facebook.com/PGtips</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/cuppaclub2-home.jpg" alt="PG tips, Cuppa Club">
			<img src="img/cuppaclub2-login.jpg" alt="PG tips, Cuppa Club">
			<img src="img/cuppaclub2-gallery.jpg" alt="PG tips, Cuppa Club">
        </section>
	</div><!-- End of container -->

<?php include("../../incl/inc-footer.php"); ?>