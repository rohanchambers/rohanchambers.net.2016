<?php
    $PRODUCTION = true;
    $browserTitle = 'HP Movember | Case study';
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
				<li><a href="../cadbury/advent-calendar" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../bulmers/harvestimator" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>HP Movember</h1>
            <p><strong>Date: </strong>2015</p>
            <p><strong>Client: </strong>Heinz</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, jQuery</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>I developed all of the front end build for the PG Bulmers Harvestimator Facebook app. while working closely with the backend developers that were integrating my templates in the PHP Fat-Free Framework.</p>
			<p>We've been making Bulmers cider here in Hereford for over 125 years, and we take our cider-making very seriously indeed.</p>
			<p>BUT, it isn't all work, work, work down here on Broome Farm, no sir! For this year's apple harvest, we want you - the great Bulmers fans - to be a part of it. Take your guesses as we challenge our trees to the ultimate harvest showdown, for your chance to win FANTASTIC PRIZES!</p>
            <p><strong>View site:</strong> <a href="https://www.facebook.com/HPSauceUK/app_682253515127994" class="targetBlank">https://www.facebook.com/HPSauceUK/</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/movember/home.jpg" alt="Heinz, HP Movember" />
			<img src="img/movember/challenge.jpg"" alt="Heinz, HP Movember" />
			<img src="img/movember/gallery.jpg"" alt="Heinz, HP Movember" />
        </section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>
    <?php }
?>