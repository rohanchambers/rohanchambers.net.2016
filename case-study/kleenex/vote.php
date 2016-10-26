<?php
    $PRODUCTION = true;
    $browserTitle = 'Kleenex Vote | Rohan Chambers';
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
				<li><a href="../pgtips/cuppaclub" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../bulmers/begin" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Kleenex Vote</h1>
            <p><strong>Date: </strong>2014</p>
            <p><strong>Client: </strong>Kleenex</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive development, PHP Fat-Free Framework</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>I developed the Kleenx vote, Facebook app.</p>
			<p>We've been searching high and low across the UK design community for the best, innovative designs for our next range of Kleenex Collection boxes. We had some amazing entries, but together with Kelly Hoppen MBE, we've managed to whittle it down to our favourite 10 designs. Now we need your help! Please vote on the design you like <strong>the best and the top three with the most votes will be the ones that we'll put on the shelf in-store this Autumn.</strong></p>
            <p><strong>View site:</strong> Site offline <a href="https://www.facebook.com/KleenexUK/app_307317556065287" class="targetBlank">Facebook.com/KleenexUK</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/kleenex-vote.jpg" alt="Kleenex Vote">
        </section>
	</div><!-- End of container -->

<?php include("../../incl/inc-footer.php"); ?>