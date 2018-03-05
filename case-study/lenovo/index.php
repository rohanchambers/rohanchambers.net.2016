<?php
    $PRODUCTION = true;
    $browserTitle = 'Lenovo, The Year of the Do | Case study';
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
				<li><a href="../evian/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../pgtips/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Lenovo, The Year of the Do</h1>
            <p><strong>Date: </strong>2014</p>
            <p><strong>Client: </strong>Lenovo</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive development</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>I worked on the front end build of the Lenovo, The year of do Facebook app. while working closely with the backend developers that were integrating my templates in the PHP Fat-Free Framework.</p>
			<p>With New Year coming soon, Lenovo asked We Are Social to build a Facebook app to make 2013 "The Year of Do". With this app, people worldwide can submit what they will do for the New Year, from a variety of tags. Everyone who pledges a resolution gets their profile pic added to a wall of faces which you can then explore and see what the world has pledged.</p>
			<p>It automatically detects which country you are visiting it from and works out what language to display (including German, Portuguese, Ukraininan, Vietnamese and Thai). You can search by name, resolution and tag or country as well.</p>

			<p><strong>View app:</strong> Sites offline <a href="http://www.facebook.com/lenovo/app_568121793204954" class="targetBlank">http://www.facebook.com/lenovo</a>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/lenovo_resolutions.jpg" alt="Lenovo, The year of the do">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>