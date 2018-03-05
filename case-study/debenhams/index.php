<?php
    $PRODUCTION = true;
    $browserTitle = 'Debenhams Personal Finance | Case study';
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
				<li><a href="../bbc-6music/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../edf-energy/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Debenhams Personal Finance</h1>
            <p><strong>Date: </strong>2009</p>
            <p><strong>Client: </strong>Debenhams</p>
            <p><strong>Agency: </strong><a href="http://www.steellondon.com/" class="targetBlank">Steel London</a></p>
            <p><strong>Technologies: </strong>XHTML, CSS</p>
            <p><strong>Tasks:</strong> Site updates
            <p><strong>Summary: </strong></p>
			<p>I worked on the Debenhams Personal Finance website as a front end developer mainly doing xhtml and css ammends for various sections of the site.</p>

			<strong>View site:</strong> <a href="http://finance.debenhams.com/" class="targetBlank">http://finance.debenhams.com/</a></li>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/debenhams-home.jpg" alt="Debenhams Personal Finance">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>