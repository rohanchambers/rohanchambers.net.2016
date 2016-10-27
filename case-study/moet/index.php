<?php
    $PRODUCTION = true;
    $browserTitle = 'Mo&euml;t &amp; Chandon | Rohan Chambers';
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
				<li><a href="../pgtips/cuppaclub2" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../volvic/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Mo&euml;t &amp; Chandon</h1>
            <p><strong>Date: </strong>2015</p>
            <p><strong>Client: </strong>Mo&euml;t &amp; Chandon</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive development</p>
            <p><strong>Tasks:</strong> Development of holding page
            <p><strong>Summary: </strong></p>
			<p>I built the holding page for the #Mo&euml;t Momente site using the Tumblr platform.</p>			
            <p><strong>View site:</strong> <a href="http://moetmomente.de/" class="targetBlank">MoetMomente.de/</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/moetMomente.jpg" alt="#Mo&euml;t Momente">
			<img src="img/moetMomenteMobile.jpg" alt="#Mo&euml;t Momente">
        </section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>