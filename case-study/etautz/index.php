<?php
    $PRODUCTION = true;
    $browserTitle = 'E.TAUTZ Fashion | Rohan Chambers';
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
				<li><a href="../harry-potter-part-1/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../honda/made-in-britain" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>E.TAUTZ Fashion</h1>
            <p><strong>Date: </strong>2011</p>
            <p><strong>Client: </strong>E.TAUTZ</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3 and jQuery, Wordpress</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>Front end development site updates. Mainly keeping the site up to date with new promotions and page developments for new product launches.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.etautz.com/" class="targetBlank">http://www.etautz.com/</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/etautz.jpg" alt="E.TAUTZ">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>