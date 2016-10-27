<?php
    $PRODUCTION = true;
    $browserTitle = 'Perfect Peaks Brews | Rohan Chambers';
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
				<li><a href="../phoneresq/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../heineken/" class="go-next" title="Next Project"></a></li>            
			</ul>

            <h1>Perfect Peaks Brews</h1>
            <p><strong>Date: </strong>2016</p>
            <p><strong>Client: </strong>Perfect Peaks Brews</p>
            <p><strong>Agency: </strong>Freelance project</p>
            <p><strong>Technologies: </strong>HTML5, CSS3, jQuery, Grunt, Wordpress, Bourbon + Neat responsive grid, CSS3 transitions, Fully responsive, Font awesome.</p>
            <p><strong>Tasks:</strong> <p>Project owner and managed a team of graphic and web designers to create the new brand identity of 'Perfect Peaks Brews'. I fully developed the front-end and Wordpress integration of the site.</p>
            <p><strong>Summary: </strong></p>
			<p>Perfect Peaks Brews is a privately owned startup brewery in Switzerland, Geneva that produces 6 blends of Ale and soon to be 3 Ciders.</p>
			<p>The target audience of this beer is for the snow sports fans who after a hard days work can kick back with a cold brew. It will be sold in the winter on all major ski resorts in Switzerland and France.</p>
			<p>During the summer the other blends will mainly be for the surfer and water sports fan, again to kick back with a cold brew... It will be sold mainly in Portugal but also Ibiza and the South of France.</p>
            <p><strong>View site:</strong> Coming soon</p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/logo_large.jpg" alt="Perfect Peaks Brews" />
			<img src="img/black.jpg" alt="Perfect Peaks Brews" />
			<img src="img/yellow.jpg" alt="Perfect Peaks Brews" />
			<img src="img/turquoise.jpg" alt="Perfect Peaks Brews" />
			<img src="img/variations.jpg" alt="Perfect Peaks Brews" />
        </section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>