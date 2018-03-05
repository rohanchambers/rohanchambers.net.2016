<?php
    $PRODUCTION = true;
    $browserTitle = 'London 2012 Olympics, Social Media Dashboard | Case study';
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
				<li><a href="../london2012/pulse" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../uefa/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>London 2012 Olympics,<br> Social Media Dashboard</h1>
            <p><strong>Date: </strong>2012</p>
            <p><strong>Client: </strong>London 2012 Olympics</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, Javascript and jQuery</p>
            <p><strong>Tasks:</strong> Complete front end development
            <p><strong>Summary: </strong></p>
			<p>London2012 Social Media Dashboard. A collection of Olympic data from Facebook, Twitter, Google+ and YouTube. <br>Click on the link below to see the live site.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.london2012.com/social/" class="targetBlank">www.london2012.com/social/</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/dashboard.jpg" alt="London 2012 Olympics, Social Media Dashboard">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>