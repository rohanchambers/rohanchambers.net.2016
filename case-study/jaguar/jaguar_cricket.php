<?php
    $PRODUCTION = true;
    $browserTitle = 'Jaguar, Cricket India | Case study';
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
				<li><a href="../jaguar/jaguar_ftype" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../tesco/tescoWines" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Jaguar, Cricket India</h1>
            <p><strong>Date: </strong>2014</p>
            <p><strong>Client: </strong>Jaguar</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>Built a Facebook app. so that people could tweet in real time about the live video using the #JaguarCricket hashtag. All tweets displayed in a twitter feed component.</p> 
            <p><strong>View app:</strong> Site offline <a href="http://www.facebook.com/Jaguar/" class="targetBlank">http://www.facebook.com/Jaguar</a>                   
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/jaguar_cricket_likegate.jpg" alt="Jaguar cricket">
			<img src="img/jaguar_cricket.jpg" alt="Jaguar cricket">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>