<?php
    $PRODUCTION = true;
    $browserTitle = 'Jaguar UK, Live Fearless | Case study';
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
				<li><a href="../heineken/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../volvic/toughmudder" class="go-next" title="Next Project"></a></li>
			</ul>

            <h1>Jaguar UK, Live Fearless</h1>
            <p><strong>Date: </strong>June, 2015</p>
            <p><strong>Client: </strong>Jaguar</p>
            <p><strong>Agency: </strong>We are Social</p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Fully responsive, Tumblr framework</p>
            <p><strong>Tasks:</strong> Tumblr theme creation and build
			<p>I helped develop the front end build for Jaguar, Live Fearless. This tumblr theme is fully responsive.</p>
			<p>The F-TYPE Coupé is Jaguar’s commitment to a life lived by harnessing fear. A hunger and desire to improve, to challenge and to find a better way.</p>
			<p>Join us to celebrate the extraordinary for your chance to win a week-long loan of the F-TYPE Coupé and an unforgettable Fearless experience.</p>
            <p><strong>View site:</strong> <a href="http://jaguaruk.tumblr.com" class="targetBlank">http://jaguaruk.tumblr.com</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/livefearless/jaguar_fearless_home.jpg" alt="Heineken, The Beauty of Brewing">
			<img src="img/livefearless/jaguar_fearless_lightbox.jpg" alt="Heineken, The Beauty of Brewing">
			<img src="img/livefearless/jaguar_fearless_mobile.jpg" alt="Heineken, The Beauty of Brewing">
        </section>
	</div><!-- End of container -->

    <?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>