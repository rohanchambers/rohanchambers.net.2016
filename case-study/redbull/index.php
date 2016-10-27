<?php
    $PRODUCTION = true;
    $browserTitle = 'Redbull Editions Instagram your Inspiration | Rohan Chambers';
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
				<li><a href="../kleenex/collection" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../jaguar/jaguar-desire" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Redbull Editions<br>Instagram your Inspiration</h1>
            <p><strong>Date: </strong>2014</p>
            <p><strong>Client: </strong>Redbull</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive development</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>I developed the complete front-end build for this Redbull microsite. The site is completely responsive for all major mobile devices including the iPad and iPhone. Interaction with the Instagram API for all data calling by the back-end developers I work with.</p>
			<p>Instagram your inspiration in Red, Silver or Blue to claim a can. Below is a small get started instruction outline of how the site works and integrates with Instagram.</p>
			<ul class="bullets">
				<li>Shoot &amp; Upload: Upload your most creative red, blue or silver photo to Instagram.</li>
				<li>Tag &amp; Share Tag your Instagrams with <b>@RedBullUK</b> and either <b>#rededitionplease #silvereditionplease</b> or <b>#blueditionplease</b> in your caption.</li>
				<li>Claim a can: If your Instagram makes our gallery we will be in touch with details of how to claim your Red Bull Edition.</li>
				<li>Give your Instagram Wings: The most inspiring Instagrams as chosen by our editors will be exhibited in cities across the UK.</li>
			</ul>
            <p><strong>View site:</strong> Site offline <a href="http://redsilverblue.redbull.co.uk/" class="targetBlank">RedSilverBlue.Redbull.co.uk</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/home.jpg" alt="Redbull, Our Editions">
			<img src="img/home-mobile.jpg" alt="Redbull, Our Editions">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>