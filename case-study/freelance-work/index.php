<?php
    $PRODUCTION = true;
    $browserTitle = 'Qube Managed Services Limited | Case study';
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
				<li><a href="../fashion-istical/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../freelance-work/stratton-hesler" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Qube Managed Services Limited</h1>
            <p><strong>Date: </strong>2010</p>
            <p><strong>Client: </strong>Qube MS</p>
            <p><strong>Technologies: </strong> XHTML strict, CSS, Javascript, Jquery, PHP. Built with semantic markup and with SEO and accessibilitiy in mind. Cross browser compatibility will be thorougly tested to work on all major browsers and versions.</p>
            <p><strong>Tasks:</strong> Web Design and Development

            <p><strong>Summary: </strong></p>
			<p>Qube networks were needing a complete revamp of their site to reflect the companies growing size and professionalism. They are a hosting company that provide hosting solutions for major brand companies. They share their office building with Yahoo and many other big names.</p>

			<strong>View site:</strong> <a href="http://www.qubenet.net/" class="targetBlank">http://www.qubenet.net/</a>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/qube-home.jpg" alt="Qube Managed Services Limited">
			<img src="img/qube-servers.jpg" alt="Qube Managed Services Limited">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>