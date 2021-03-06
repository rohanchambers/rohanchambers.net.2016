<?php
    $PRODUCTION = true;
    $browserTitle = 'London 2012 Olympics, Olympic Pulse | Case study';
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
				<li><a href="../london2012/supportyourteam" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../london2012/dashboard" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>London 2012 Olympics, <br>Olympic Pulse</h1>
            <!-- <p><strong>Date: </strong>2012</p> -->
            <p><strong>Client: </strong>London 2012 Olympics</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong>Front end development for the desktop and mobile versions including iPhone and iPad. (75% of the JavaScript/jQuery code)</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>London2012 Social Media Dashboard. A collection of Olympic data from Facebook, Twitter, Google+ and YouTube. <br>Click on the link below to see the live site.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.london2012.com/join-in/Olympic-pulse/" class="targetBlank">www.london2012.com/Olympic-pulse/</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/pulse.jpg" alt="London 2012 Olympics, Pulse">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>