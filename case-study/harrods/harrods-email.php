<?php
    $PRODUCTION = true;
    $browserTitle = 'Harrods Email Newsletter | Case study';
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
				<li><a href="../harrods/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../tesco/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Harrods Email Newsletter</h1>
            <!-- <p><strong>Date: </strong>2006</p> -->
            <p><strong>Client: </strong>Harrods</p>
            <p><strong>Company: </strong><a href="http://www.harrods.com/" class="targetBlank">http://www.harrods.com/</a></p>
            <p><strong>Technologies: </strong> Photoshop, XHTML &amp; inline CSS</p>
            <p><strong>Tasks:</strong> Design &amp; build of Harrods email newsletter.

            <p><strong>Summary: </strong></p>
            <p>I developed Harrods weekly email newsletter that is sent out to all Harrods subscribers.</p>

			<strong>View site:</strong> View images
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/harrods-email-newsletter.jpg" alt="Harrods Email Newsletter">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>