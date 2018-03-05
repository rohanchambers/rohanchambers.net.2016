<?php
    $PRODUCTION = true;
    $browserTitle = 'EDF Energy | Case study';
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
				<li><a href="../debenhams/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../jaguar/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>EDF Energy</h1>
            <p><strong>Date: </strong>2009</p>
            <p><strong>Client: </strong>EDF Energy</p>
            <p><strong>Agency: </strong><a href="http://www.redhouselane.com/" class="targetBlank">RedHouseLane</a></p>
            <p><strong>Technologies: </strong>XHTML, CSS</p>
            <p><strong>Tasks:</strong> HTML email development
            <p><strong>Summary: </strong></p>
			<p>I developed the email newsletter for EDF Energy. Built in tables so this would work with their in house email client system.</p>

			<strong>View site:</strong> View image</li>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/edf-energy.jpg" alt="Debenhams Personal Finance">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>