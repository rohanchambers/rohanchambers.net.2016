<?php
    $PRODUCTION = true;
    $browserTitle = 'Honda Test Drive Prototype | Case study';
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
				<li><a href="../mycallaway/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../bridging-the-gap/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Honda Test Drive Prototype</h1>
            <p><strong>Date: </strong>2011</p>
            <p><strong>Client: </strong>Honda UK</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong> XHTML, CSS, jQuery, Google Chrome</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>I developed a prototype for the Honda book a test drive section to improve the current one on the Honda.co.uk website. Its a step by step process with multiple variations of routes/user journeys for the user to end up booking a car.</p>
			<p>It was tested in a professional environment to understand how users were interacting with the interface and the journey. Amends were then made with the feedback we received/observed from the test users. As this was just a prototype it was developed for the Google Chrome browser.</p>
			<p><strong>View app:</strong> <a href="http://www.rohanchambers.net/projects/test-drive-prototype/index.html" class="targetBlank">Book a Test Drive Prototype</a> <br />(View in Google Chrome browser)</p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/prototype-home.jpg" alt="prototype-home">
			<img src="img/prototype-time.jpg" alt="prototype-time">
			<img src="img/prototype-dealer.jpg" alt="prototype-dealer">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>