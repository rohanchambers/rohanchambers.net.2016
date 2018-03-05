<?php
    $PRODUCTION = true;
    $browserTitle = 'Volvic, Tough Mudder | Case study';
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
				<li><a href="../jaguar/livefearless" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../heinz/getwellsoup" class="go-next" title="Next Project"></a></li>                
			</ul>

            <h1>Volvic, Toughmudder got the bottle</h1>
            <p><strong>Date: </strong>2015</p>
            <p><strong>Client: </strong>Volvic</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, PHP Fat-Free Framework</p>
            <p><strong>Tasks:</strong> <p>Front end development of Facebook app.</p>
            <p><strong>Summary: </strong></p>
			<p>I developed all of the front end build for Volic, Toughmudder Get the Bottle Facebook app. while working closely with the backend developers that were integrating my templates in the PHP Fat-Free Framework.</p>
			<p>If you've #GOTTHEBOTTLE go on, show us your Game Face and you'll be in with a chance to win an adrenalin packed trip to Las Vegas or free entry to Tough Mudder.</p>
			<strong>HOW TO ENTER?</strong>
			<ul class="bullets">
				<li>Step 1: Take a photo of your toughest game face</li>
				<li>Step 2: Upload your photo to Twitter or Instagram using #GOTTHEBOTTLE</li>
			</ul>
            <p><strong>View site:</strong> <a href="http://www.facebook.com/VolvicUK/app_368491036625155" class="targetBlank">http://www.facebook.com/VolvicUK</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/toughmudder/toughmudder_home.jpg" alt="Volvic, Toughmudder got the bottle">
			<img src="img/toughmudder/toughmudder_lightbox.jpg" alt="Volvic, Toughmudder got the bottle">
			<img src="img/toughmudder/toughmudder_mobile.jpg" alt="Volvic, Toughmudder got the bottle">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>