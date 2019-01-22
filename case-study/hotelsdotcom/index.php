<?php
    $PRODUCTION = true;
    $browserTitle = 'Hotels.com Photo competition | Case study';
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
				<li><a href="../heinz/getwellsoup.php" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../cadbury/advent-calendar" class="go-next" title="Next Project"></a></li>
			</ul>

            <h1>Hotels.com Photo competition</h1>
            <!-- <p><strong>Date: </strong>2015</p> -->
            <p><strong>Client: </strong>Hotels.com</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Isotope.js, PHP Fat-Free Framework</p>
            <p><strong>Tasks:</strong> <p>Front end development of Facebook app.</p>
            <p><strong>Summary: </strong></p>
			<p>I developed all of the front end build for the Cadbury Advent Calendar. This site is semi responsive and built to fit within three breaking points. Desktop, Facebook app (810px) and mobile.</p>
			<p>Guess the gift and share to win!</p>
			<ul class="bullets">
				<li>Select whether you would like to 'buy' a can or 'share' a digital can of 'Get Well' Soup</li>
				<li>Enter your details and the details of your loved one to see how your can will look</li>
				<li>If you buy a can you'll be directed to Paypal to confirm your purchase</li>
				<li>If you 'share' a can you just need to confirm a few details before posting to your friend's Facebook profile</li>
			</ul>
            <p><strong>View site:</strong> <a href="http://www.facebook.com/Hotels.comEurope/app_1376986462540953" class="targetBlank">http://www.facebook.com/Hotels.comEurope/</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/home.jpg" alt="Hotels Photo competition">
			<img src="img/fancybox.jpg" alt="Hotels Photo competition">
			<img src="img/entry.jpg" alt="Hotels Photo competition">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>