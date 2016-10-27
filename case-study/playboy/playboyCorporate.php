<?php
    $PRODUCTION = true;
    $browserTitle = 'Playboy Corporate Site | Rohan Chambers';
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
				<li><a href="../playboy/playboyU" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../playboy/thinking-is-sexy" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Playboy Corporate Site</h1>
            <p><strong>Date: </strong>2008</p>
            <p><strong>Client: </strong>Playboy UK</p>
            <p><strong>Company: </strong><a href="http://www.playboy.co.uk/" class="targetBlank">http://www.playboy.co.uk/</a></p>
            <p><strong>Technologies: </strong> XHTML, CSS, W3C Compliant, Javascript</p>
            <p><strong>Tasks:</strong> Front-end development

            <p><strong>Summary: </strong></p>
			<p>Work project for the company I work for, Playboy UK. Fully developed the Playboy UK Corporate website as a marketing asset to the company so that potential clients know what Playboy have to offer.</p>

			<strong>View site:</strong>  <a href="http://www.pbtv.eu/" class="targetBlank">http://www.pbtv.eu/</a>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/playboyEU.jpg" alt="Playboy EU">
			<img src="img/playboyEU-2.jpg" alt="Playboy EU">		
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>