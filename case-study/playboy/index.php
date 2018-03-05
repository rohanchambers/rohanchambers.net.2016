<?php
    $PRODUCTION = true;
    $browserTitle = 'Playboy UK | Case study';
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
				<li><a href="../jaguar/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../playboy/playboyU" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Playboy UK</h1>
            <p><strong>Date: </strong>2009</p>
            <p><strong>Client: </strong>Playboy UK</p>
            <p><strong>Agency: </strong><a href="http://www.playboy.co.uk/" class="targetBlank">http://www.playboy.co.uk/</a></p>
            <p><strong>Technologies: </strong>I helped on this site as a front end developer creating modules to fit the grid within the CMS. Working with an external web agency that were creating the back end and the build of the CMS.</p>
            <p><strong>Tasks:</strong>  Front-end development

            <p><strong>Summary: </strong></p>
			<p>The all new Playboy UK 2009 has just been launched. With a completely new look and feel this site is backed up with a new tailored CMS to manage all existing and upcoming assets of Playboy UK.</p>

			<strong>View site:</strong> <a href="http://www.playboy.co.uk/" class="targetBlank">http://www.playboy.co.uk/</a>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/articles.jpg" alt="Playboy UK">
			<img src="img/girls.jpg" alt="Playboy UK">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>