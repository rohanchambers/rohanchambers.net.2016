<?php
    $PRODUCTION = true;
    $browserTitle = 'Tiger Beer Zodiac Pairs | Rohan Chambers';
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
				<li><a href="../redbull/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../evian/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Tiger Beer Zodiac Pairs</h1>
            <p><strong>Date: </strong>2014</p>
            <p><strong>Client: </strong>Tiger Beer</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive development</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>I worked on this Facebook app. game for Tiger Beer as a front end developer. It's a simple little pairs game which however has a lot of back end functionality to make the game work well within Facebook.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.facebook.com/tigerbeeruk/app_521667997866887" class="targetBlank">http://www.facebook.com/tigerbeeruk</a>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/likegate.jpg" alt="Tiger Beer Zodia Pairs">
			<img src="img/leaderboard.jpg" alt="Tiger Beer Zodia Pairs">
			<img src="img/play.jpg" alt="Tiger Beer Zodia Pairs">
		</section>
	</div><!-- End of container -->

<?php include("../../incl/inc-footer.php"); ?>