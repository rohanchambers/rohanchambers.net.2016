<?php
    $PRODUCTION = true;
    $browserTitle = 'Jaguar Desire Calendar | Case study';
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
				<li><a href="../redbull/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../tiger/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Jaguar Desire Calendar</h1>
            <!-- <p><strong>Date: </strong>2014</p> -->
            <p><strong>Client: </strong>Jaguar</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive development</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>I developed the complete front-end build for the Jaguar Desire Calendar, Facebook app. </p>
			<p>To celebrate the imminent launch of the all-new F-TYPE, a car that we believe encapsulates desire, we have created a calendar based on the ultimate F-TYPE desires outlined by our social communities.</p>
			<p>Each day we will be revealing one of your desires via this Facebook app and giving you a chance to win a whole host of prizes, including exclusive trips, drives and gifts to be won every day over the next fortnight</p>
            <p>View app: Site offline <a href="http://www.facebook.com/JaguarUK/app_194134714044030" class="targetBlank">https://www.facebook.com/jaguarUK</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/jaguar_calendar.jpg" alt="Jaguar Design Calendar">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>