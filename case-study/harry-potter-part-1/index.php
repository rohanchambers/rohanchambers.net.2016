<?php
    $PRODUCTION = true;
    $browserTitle = 'Harry Potter and the Deathly Hallows, Part 1 | Case study';
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
				<li><a href="../honda/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../honda/made-in-britain" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Harry Potter and the Deathly Hallows,<br /> Part 1</h1>
            <p><strong>Date: </strong>2011</p>
            <p><strong>Client: </strong>EA</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3 and jQuery, Wordpress</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>Front end development site updates. Mainly updating the Harry Potter Deathly Hallow's site with new sections and pages. This site is maintained and translated in multiple languages in countries such as Spain and many more.</p>
			<p><strong>View app:</strong> Site offline <a href="http://harrypotter.ea.com/" class="targetBlank">http://harrypotter.ea.com/</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/wallpaper.jpg" alt="Harry Potter and the Deathly Hallows, Part 1" >
			<img src="img/home.jpg" alt="Harry Potter and the Deathly Hallows, Part 1">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>