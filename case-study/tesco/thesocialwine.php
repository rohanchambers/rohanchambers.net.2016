<?php
    $PRODUCTION = true;
    $browserTitle = 'Tesco, The Social Wine | Case study';
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
				<li><a href="../volvic/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../pgtips/cuppaclub" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Tesco, The Social Wine</h1>
            <p><strong>Date: </strong>2015</p>
            <p><strong>Client: </strong>Tesco</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive development, PHP Fat-Free Framework</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>I developed all of the front end build for Tesco, The Social Wine Facebook app. while working closely with the backend developers that were integrating my templates in the PHP Fat-Free Framework.</p>
			<p>Take part in creating the world's first community sourced wine.<br>
			We're launching a completely bespoke bottle of wine, created entirely by you - our online community. There are fantastic prizes up for grabs and one lucky winner will get the chance to visit the vineyards in South Africa and experience first-hand how the wine is made by the local community.</p>
            <p><strong>View site:</strong> Site offline <a href="http://www.facebook.com/tesco/app_210250815791897" class="targetBlank">http://www.facebook.com/Tesco</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/enotria-thesocialwine-home.jpg" alt="Enotria, The Social Wine">
        </section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>