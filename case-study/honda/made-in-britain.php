<?php
    $PRODUCTION = true;
    $browserTitle = 'Honda Made in Britain | Case study';
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
				<li><a href="../collective-blog/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Honda Made in Britain</h1>
            <p><strong>Date: </strong>2011</p>
            <p><strong>Client: </strong>Honda UK</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3 and jQuery</p>
            <p><strong>Tasks:</strong> Facebook app. build
            <p><strong>Summary: </strong></p>
			<p>Facebook page build for Honda Made in Britain. Honda UK is a client of Collective London which is the agency I work for.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.facebook.com/hondamadeinbritain?v=app_10442206389" class="targetBlank">www.facebook.com/hondamadeinbritain</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/honda-made-in-britain.jpg" alt="Honda Made in Britain Facebook">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>