<?php
    $PRODUCTION = true;
    $browserTitle = 'The Merchant adventurers club | Rohan Chambers';
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
				<li><a href="../tesco/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../flh/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>The Merchant adventurers' club</h1>
            <p><strong>Date: </strong>2012</p>
            <p><strong>Client: </strong>The Merchant adventurers' club</p>
            <p><strong>Technologies: </strong> HTML5, CSS3, JavaScript/jQuery, Responsive design implementation</p>
            <p><strong>Tasks:</strong> Front end build of site

            <p><strong>Summary: </strong></p>
            <p>I built the complete front end build of this micro-site including the implementation of responsive design for iPad and iPhone.</p>

			<strong>View site:</strong> <p><a href="http://www.merchantadventurersclub.com/" class="targetBlank">http://www.merchantadventurersclub.com/</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/home.jpg" alt="The Merchant adventurers' club">
			<img src="img/about.jpg" alt="The Merchant adventurers' club">
			<img src="img/benefits.jpg" alt="The Merchant adventurers' club">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>