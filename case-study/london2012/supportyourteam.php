<?php
    $PRODUCTION = true;
    $browserTitle = 'London 2012 Olympics, Support your Team | Case study';
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
				<li><a href="../bulmers/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../london2012/pulse" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>London 2012 Olympics,<br> Support your Team</h1>
            <p><strong>Date: </strong>2012</p>
            <p><strong>Client: </strong>London 2012 Olympics</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong>Front end development for the desktop and mobile versions including iPhone and iPad. (75% of the JavaScript/jQuery code)</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>Support your team to Olympic glory. This site was built to allow fans to tweet about their favourite event and represent their tweets as a visual reference via a timeline/podium animation. Other data is spread around the site such as latest activity and a leader board panel to show team rankings. <br>Click on the link below to see the live site.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.london2012.com/countries/supportyourteam/" class="targetBlank">www.london2012.com/countries/supportyourteam/</a>
        </section>
        <div id="case-study-img" class="col-8">
			<h3>Desktop Version, Home</h3>
			<img src="img/supportyourteam_home.jpg" alt="London 2012 Olympics, Support your Team">
			<h3>Desktop Version, Timeline</h3>
			<img src="img/supportyourteam_timeline.jpg" alt="London 2012 Olympics, Support your Team">
			<h3>Mobile Version</h3>
			<img src="img/supportyourteam_mobile.jpg" alt="London 2012 Olympics, Support your Team">
			<h3>Mobile Version</h3>
			<img src="img/supportyourteam_mobile2.jpg" alt="London 2012 Olympics, Support your Team">
			<h3>Desktop Version, Podium</h3>
			<img src="img/supportyourteam_podium.jpg" alt="London 2012 Olympics, Support your Team">
			<h3>Desktop Version, Leaderboard</h3>
			<img src="img/supportyourteam_overall.jpg" alt="London 2012 Olympics, Support your Team">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>