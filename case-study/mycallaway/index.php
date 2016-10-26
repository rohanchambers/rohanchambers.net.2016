<?php
    $PRODUCTION = true;
    $browserTitle = 'MyCallaway.eu | Rohan Chambers';
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
				<li><a href="../harry-potter-part-2/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../honda/test-drive-prototype" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>MyCallaway.eu,<br /> Part 2</h1>
            <p><strong>Date: </strong>2011</p>
            <p><strong>Client: </strong>Callaway</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3 and jQuery, Wordpress</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>Callaway is a high end brand of golfing equipment and this site is to promote all there latest equipment and news. Currently there is a competition to win a one year test drive of a Lamborghini car.</p>
			<p>I developed some of the front end build for this site as a support to another developer in my team.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.mycallaway.eu/" class="targetBlank">http://www.mycallaway.eu/</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/mycallaway-home.jpg" alt="MyCallaway Golfing">
		</section>
	</div><!-- End of container -->

<?php include("../../incl/inc-footer.php"); ?>