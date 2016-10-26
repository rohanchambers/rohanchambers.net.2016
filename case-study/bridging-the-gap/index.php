<?php
    $PRODUCTION = true;
    $browserTitle = 'London 2012, Bridging the Gap | Rohan Chambers';
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
				<li><a href="../honda/test-drive-prototype" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../london2012/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>London 2012, Bridging the Gap</h1>
            <p><strong>Date: </strong>2011</p>
            <p><strong>Client: </strong>London 2012</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong> XHTML, CSS, jQuery</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>Bridging the gap is a supporting site for the London 2012 Olympics site. I developed all of the front end templates for the site to be integrated in to a CMS by a third party agency using the DotNetNuke CMS. All pages had to be accessible as this is a government site so functionality was built to allow font size change, dyslexia and high resolution versions of the site.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.bridging-the-gap.co.uk/" class="targetBlank">http://www.bridging-the-gap.co.uk/</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/bridging-the-gap.jpg" alt="The London 2012 Olympics - Bridging the Gap">
			<img src="img/bridging-the-gap-2.jpg" alt="The London 2012 Olympics - Bridging the Gap">
			<img src="img/bridging-the-gap-3.jpg" alt="The London 2012 Olympics - Bridging the Gap">
		</section>
	</div><!-- End of container -->

<?php include("../../incl/inc-footer.php"); ?>