<?php
    $PRODUCTION = true;
    $browserTitle = 'Bulmers, Begin with a Bulmers | Case study';
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
				<li><a href="../kleenex/vote" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../kleenex/collection" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Bulmers, Begin with a Bulmers</h1>
            <!-- <p><strong>Date: </strong>2014</p> -->
            <p><strong>Client: </strong>Bulmers</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive development, PHP Fat-Free Framework</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>I developed the front end of this Facebook app for both desktop and mobile which lets the user share their Bulmers moments on Facebook or on Twitter, using #beginwithabulmers to win great prizes.</p>
			<p>Our competition is powered by your good times. The more Facebook posts and Tweets you share with us the more rewards we'll unlock. With new weekly winners and massive prizes on offer we've got it covered if you keep the ideas flowing. Enter now to get involved and keep checking back to see when the next prize is revealed.</p>
            <p><strong>View site:</strong> Site offline <a href="http://www.facebook.com/Bulmers/app_451962378216467" class="targetBlank">Facebook.com/BulmersUK</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/bulmers-begin-home.jpg" alt="Bulmers, Begin with a Bulmers">
			<img src="img/bulmers-begin-mobile.jpg" alt="Bulmers, Begin with a Bulmers">
			<img src="img/bulmers-begin-mobile2.jpg" alt="Bulmers, Begin with a Bulmers">
			<img src="img/bulmers-begin-mobile3.jpg" alt="Bulmers, Begin with a Bulmers">
			<img src="img/bulmers-begin-mobile4.jpg" alt="Bulmers, Begin with a Bulmers">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>