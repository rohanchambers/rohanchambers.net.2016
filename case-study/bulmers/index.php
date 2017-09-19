<?php
    $PRODUCTION = true;
    $browserTitle = 'Bulmers, Blends | Case study';
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
				<li><a href="../tesco/tescoWines" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../london2012/supportyourteam" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Bulmers, Blends</h1>
            <p><strong>Date: </strong>2014</p>
            <p><strong>Client: </strong>Bulmers, Blends</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>I developed the whole front end build of this Facebook app for Bulmers.</p>
			<p>Here's your chance to be one of the first people in the UK to taste our brand new BULMERS cider blends: Bold Black Cherry and Pressed Red Grape.
			<br>WHAT DO I NEED TO DO? It's simple - sign up below and we'll pick 20 of you at random to win a case of your choice delivered to your door.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.facebook.com/pages/Bulmers-UK/22251068827?sk=app_488481941186963" class="targetBlank">https://www.facebook.com/bulmersUK</a>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/bulmers-UK-likegate.jpg" alt="Bulmers, Blends">
			<img src="img/bulmers-UK.jpg" alt="Bulmers, Blends">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>