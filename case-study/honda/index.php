<?php
    $PRODUCTION = true;
    $browserTitle = 'Honda Jazz | Case study';
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
				<li><a href="../london2012/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../harry-potter-part-1/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Honda Jazz</h1>
            <!-- <p><strong>Date: </strong>2011</p> -->
            <p><strong>Client: </strong>Honda UK</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong> XHTML, CSS, jQuery</p>
            <p><strong>Tasks:</strong> Facebook app. build
            <p><strong>Summary: </strong></p>
			<p>Facebook page build for the new Honda Jazz car. Honda UK is a client of Collective London which is the agency I work for.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.facebook.com/hondacarsuk?sk=app_4949752878" class="targetBlank">www.facebook.com/hondacarsuk</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/honda-jazz.jpg" alt="Honda Jazz Facebook">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>