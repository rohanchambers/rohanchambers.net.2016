<?php
    $PRODUCTION = true;
    $browserTitle = 'Tesco, Live Christmas Wine Tasting and Q&A | Case study';
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
				<li><a href="../jaguar/jaguar_cricket" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../bulmers/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Tesco, Live Christmas Wine Tasting and Q&amp;A</h1>
            <!-- <p><strong>Date: </strong>2014</p> -->
            <p><strong>Client: </strong>Tesco</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery and live streaming through Ustream software.</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>Complete front end build for multiple pages of this campaign.</p>
			<p>I was on location helping out the hosting of a live wine tasting at the Hospital Club, and we were there to film it and live stream it online. Tesco Wine fans could ask questions via Twitter, which we streamed with a live rolling carousel of Tweets, and the whole thing was broadcast via Ustream.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.tescowinecommunity.com/live-christmas-wine-tasting-and-qa.html" class="targetBlank">http://www.tescowinecommunity.com/live-christmas-wine-tasting-and-qa.html</a>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/tesco_countdown.jpg" alt="Tesco Live Christmas Wine Tasting and Q&A">
			<img src="img/tesco_video.jpg" alt="Tesco Live Christmas Wine Tasting and Q&A">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>