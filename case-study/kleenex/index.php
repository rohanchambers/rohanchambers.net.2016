<?php
    $PRODUCTION = true;
    $browserTitle = 'Kleenex, Christmas Sparkle Competition | Case study';
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
				<li><a href="../pgtips/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../jaguar/jaguar_ftype" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Kleenex, Christmas Sparkle Competition</h1>
            <!-- <p><strong>Date: </strong>2014</p> -->
            <p><strong>Client: </strong>Kleenex</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3 and Offer Pop (Social Marketing Platform)</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>I developed the Kleenex Sparkle Facebook app. using social marketing platform Offer Pop.</p>
			<p>It's a competition that allows you to upload your christmas decorations, lights or tree to enter and the winner receives luxury christmas dinner with &pound;200 to spend at Waitrose.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.facebook.com/KleenexUK/app_254553244581393" class="targetBlank">http://www.facebook.com/KleenexUK</a>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/kleenex_likegate.jpg" alt="Kleenex, Christmas Sparkle Competition">
			<img src="img/kleenex_about.jpg" alt="Kleenex, Christmas Sparkle Competition">
			<img src="img/kleenex_form.jpg" alt="Kleenex, Christmas Sparkle Competition">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>