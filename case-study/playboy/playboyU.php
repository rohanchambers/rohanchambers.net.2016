<?php
    $PRODUCTION = true;
    $browserTitle = 'PlayboyU | Case study';
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
				<li><a href="../playboy/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../playboy/playboyCorporate" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>PlayboyU</h1>
            <!-- <p><strong>Date: </strong>2009</p> -->
            <p><strong>Client: </strong>Playboy UK</p>
            <p><strong>Company: </strong><a href="http://www.playboy.co.uk/" class="targetBlank">http://www.playboy.co.uk/</a></p>
            <p><strong>Technologies: </strong>This page was built using validated XHTML and CSS. PHP was used to capture the data information users would enter and then sent to our database. Our marketing team would then use these details to analyse and market PlayboyU as best we can.</p>
            <p><strong>Tasks:</strong>  Front-end development of site

            <p><strong>Summary: </strong></p>
			<p>I developed this page for the Playboy U campaign. Playboy is looking for outgoing and highly motivated university students in the UK to help market Playboy's businesses.</p>

			<strong>View site:</strong> <a href="http://www.rohanchambers.net/projects/playboyU/" class="targetBlank">http://www.playboyu.co.uk/</a> (This link is not live anymore but the project is hosted on my server)
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/playboyU.jpg" alt="PlayboyU">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>