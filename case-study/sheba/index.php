<?php
    $PRODUCTION = true;
    $browserTitle = 'Sheba UK Follow your Passion | Case study';
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
				<li><a href="../uefa/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../anglo-american/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Sheba UK Follow your Passion</h1>
            <p><strong>Date: </strong>2012</p>
            <p><strong>Client: </strong>Sheba UK</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, Javascript and jQuery</p>
            <p><strong>Tasks:</strong> Site front-end development, Facebook tab page, cross browser compatibility testing.
            <p><strong>Summary: </strong></p>
			<p>I developed the holding page and the Facebook tab page for Sheba UK which has just introduced the lovely Eva Longoria as part of the new Sheba story. Built in HTML5, CSS3 and JavaScript/jQuery for the background image resizing functionality. This was so the page resized proportionality depending on the size of the viewers browser window.</p>
			<p><strong>View app:</strong> Site offline <a href="http://uk.sheba.com" class="targetBlank">http://uk.sheba.com</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/sheba.jpg" alt="Sheba UK Follow your Passion">
			<img src="img/shebaFB.jpg" alt="Sheba UK Follow your Passion Facebook Tab">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>