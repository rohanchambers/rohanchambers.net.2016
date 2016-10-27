<?php
    $PRODUCTION = true;
    $browserTitle = 'Stratton and Hesler | Rohan Chambers';
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
				<li><a href="../freelance-work/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../video-3d" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Stratton &amp; Hesler</h1>
            <p><strong>Date: </strong>2010</p>
            <p><strong>Client: </strong>Stratton &amp; Hesler</p>
            <p><strong>Technologies: </strong> XHTML strict, CSS and W3C compliant</p>
            <p><strong>Tasks:</strong> Web Design and Development

            <p><strong>Summary: </strong></p>
			<p>Hesler Group is a company that has been recently divided into 4 sub companies all under the Hesler Group name. It comprises of Straton and Hesler Ltd, Eggshell Ltd, Dry wall Solutions Ltd and facings Ltd. A new corporate Identity was needed for this fast growing company and a complete redesign of the whole site was the task offered to me.</p>
			<p>The idea in mind was to incorporate the 4 existing websites into one general design but at the same time giving the 4 sites their own unique look such as individual banners respective of their company.</p>

			<strong>View site:</strong> <a href="http://www.strattonandhesler.com/" class="targetBlank">http://www.strattonandhesler.com/</a>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/hesler-home.jpg" alt="Stratton &amp; Hesler">
			<img src="img/hesler-about.jpg" alt="Stratton &amp; Hesler">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>