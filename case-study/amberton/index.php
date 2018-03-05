<?php
    $PRODUCTION = true;
    $browserTitle = 'Amberton Neumann Consultancy | Case study';
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
				<li><a href="../flh/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../freelance-work/stratton-hesler" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Amberton Neumann Consultancy</h1>
            <p><strong>Date: </strong>2012</p>
            <p><strong>Client: </strong>Amberton Neumann</p>
            <p><strong>Technologies: </strong> HTML5, CSS, jQuery, Wordpress Theme development</p>
            <p><strong>Tasks:</strong> Design, Front-end development, cross browser compatibility testing, build of templates, CMS integration

            <p><strong>Summary: </strong></p>
			<p>Complete design, front end build and CMS integration of Wordpress for the client to update on a daily basis. This site was designed and built to revamp the image of Amberton Neumann.</p>

			<strong>View site:</strong> <a href="http://www.ambertonneumann.co.uk/" class="targetBlank">http://www.ambertonneumann.co.uk/</a>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/amberton.jpg" alt="Amberton Neumann">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>
    <?php }
?>