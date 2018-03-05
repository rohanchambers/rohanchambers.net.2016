<?php
    $PRODUCTION = true;
    $browserTitle = 'Jaguar XK | Case study';
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
				<li><a href="../edf-energy/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../playboy/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Jaguar XK</h1>
            <p><strong>Date: </strong>2009</p>
            <p><strong>Client: </strong>Jaguar XK</p>
            <p><strong>Agency: </strong><a href="http://www.wunderman.co.uk/" class="targetBlank">Wunderman</a></p>
            <p><strong>Technologies: </strong>My brief was to put together all the assets given to me from the client (Jaguar) such as background image, rollover images, Logos, videos etc... into a simple DVD menu. I Created this using Apple's DVD Studio Pro 3.</p>
            <p><strong>Tasks:</strong> DVD Authoring: Creation of DVD Menu, chapters etc...

            <p><strong>Summary: </strong></p>
			<p>This job which I took on as a freelancer consisted in me putting together the DVD menu for the all new 2006 release of the Jaguar XK car. For those who want to buy one of Jaguar' s finest cars to date you will receive a package of Jaguar brand items including the DVD which shows off Jaguar 's sleek new XK series with 5 videos explaining how the car made it from testing to a road car, a complete run through of the cars body structure such as the motor, suspension and much more.</p>

			<strong>View site:</strong> View image</li>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/jaguar.jpg" alt="Jaguar XK">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>