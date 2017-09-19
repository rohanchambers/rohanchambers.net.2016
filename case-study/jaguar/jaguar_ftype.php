<?php
    $PRODUCTION = true;
    $browserTitle = 'Jaguar, F-TYPE Sketch | Case study';
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
				<li><a href="../kleenex/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../jaguar/jaguar_cricket" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Jaguar, F-TYPE Sketch</h1>
            <p><strong>Date: </strong>2014</p>
            <p><strong>Client: </strong>Jaguar</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>Win a limited edition signed F-Type sketch with Jaguar's F-Type magazine for iPad. </p>
			<p>In association with our access-all-areas iPad apps, we are giving sketches signed by Jaguar's Design Team - includiing Director of Design, Ian Callum.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.facebook.com/Jaguar/app_204797316323588" class="targetBlank">http://www.facebook.com/Jaguar</a>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/jaguar_map.jpg" alt="Jaguar, F-TYPE Sketch">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>