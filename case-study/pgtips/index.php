<?php
    $PRODUCTION = true;
    $browserTitle = 'PG tips, Warm up Britain | Case study';
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
				<li><a href="../lenovo/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../kleenex/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>PG tips, Warm up Britain</h1>
            <p><strong>Date: </strong>2014</p>
            <p><strong>Client: </strong>PG tips</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive development</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>I developed all of the front end build for the PG tips, Warm up Britain Facebook app. while working closely with the backend developers that were integrating my templates in the PHP Fat-Free Framework.</p>
			<p>This app. allowed fans of PG to help Monkey "Warm Up Britain" by buying a friend a box of PG and a mug. Those kind enough to help a friend out in need could get a chance to get a free PG monkey for themselves.</p>
			<p>We sold all 5,000 packs of tea in a smidge over 24 hours, when the campaign was originally intended to last a month.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.facebook.com/PGtips?sk=app_416359025098342" class="targetBlank">http://www.facebook.com/PGtips</a>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/pgTips-home.jpg" alt="PG tips, Warm up Britain">
			<img src="img/pgTips-form.jpg" alt="PG tips, Warm up Britain">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>