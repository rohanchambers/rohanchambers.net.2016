<?php
    $PRODUCTION = true;
    $browserTitle = 'London 2012, Young Leaders | Case study';
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
				<li><a href="../bridging-the-gap/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../honda/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>London 2012, Young Leaders</h1>
            <!-- <p><strong>Date: </strong>2011</p> -->
            <p><strong>Client: </strong>London 2012</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong> XHTML, CSS, jQuery</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>I developed a section to the London 2012 website called 'Young Leaders'. I had to understandably develop this around the original site and its framework to work in the CMS.</p>
			<p><strong>View app:</strong> Site offline <a href="http://www.london2012.com/young-leaders/" class="targetBlank">http://www.london2012.com/young-leaders/</a></p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/london2012-young-leaders-home.jpg" alt="The London 2012 Olympics - Young Leaders">
			<img src="img/london2012-young-leaders-meet.jpg" alt="The London 2012 Olympics - Young Leaders">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>