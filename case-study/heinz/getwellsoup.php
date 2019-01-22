<?php
    $PRODUCTION = true;
    $browserTitle = 'Volvic, Tough Mudder | Case study';
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
				<li><a href="../volvic/toughmudder" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../hotelsdotcom/" class="go-next" title="Next Project"></a></li>                
			</ul>

            <h1>Heinz, Get Well Soup</h1>
            <!-- <p><strong>Date: </strong>2015</p> -->
            <p><strong>Client: </strong>Heinz</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, PHP Fat-Free Framework</p>
            <p><strong>Tasks:</strong> <p>Front end development of Facebook app.</p>
            <p><strong>Summary: </strong></p>
			<p>I developed all of the front end build for the Hotels.com photo competition.</p>
			<p>Share your best travel photos with us<br>						
			You could win £500 off your next holiday with Hotels.com!<br>
			We're on the lookout for fantastic photos of your city breaks, beach getaways and adventures in the great outdoors. Whether you've traveled for culture, relaxation, or mother nature at her finest, we want to see your best shots!</p>
            <p><strong>View site:</strong> <a href="http://www.facebook.com/HeinzSoupUK/app_130419560462124" class="targetBlank">http://www.facebook.com/HeinzSoupUK/</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/getwellsoup/home.jpg" alt="Heinz, Get Well Soup">
			<img src="img/getwellsoup/buycan.jpg" alt="Heinz, Get Well Soup">
			<img src="img/getwellsoup/buycan_form.jpg" alt="Heinz, Get Well Soup">
			<img src="img/getwellsoup/videoshare.jpg" alt="Heinz, Get Well Soup">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>