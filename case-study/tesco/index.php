<?php
    $PRODUCTION = true;
    $browserTitle = 'Tesco Personal Finance | Case study';
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
				<li><a href="../harrods/harrods-email" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../merchant/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Tesco Personal Finance</h1>
            <p><strong>Date: </strong>2006</p>
            <p><strong>Client: </strong>DC Interact (Now <a href="http://www.wcrsandco.com/" class="targetBlank">www.WCRS&CoM.com</a>)</p>
            <p><strong>Technologies: </strong> Photoshop, XHTML &amp; inline CSS</p>
            <p><strong>Tasks:</strong> Photoshop

            <p><strong>Summary: </strong></p>
            <p>Design tweaks and amends on request of the client.</p>

			<strong>View site:</strong> <p><a href="http://www.tescobank.com/personal/finance/home.html" class="targetBlank">http://www.tescobank.com/personal/finance/home.html</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/tesco.jpg" alt="Tesco Personal Finance">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>