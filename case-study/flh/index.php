<?php
    $PRODUCTION = true;
    $browserTitle = 'Future Life Happy, Interviews with people that matter | Rohan Chambers';
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
				<li><a href="../merchant/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../amberton/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Future Life Happy,<br> Interviews with people that matter</h1>
            <p><strong>Date: </strong>2012</p>
            <p><strong>Client: </strong>Future Life Happy</p>
            <p><strong>Technologies: </strong> HTML5, CSS3, JavaScript/jQuery, Campaign monitor and Vimeo setup</p>
            <p><strong>Tasks:</strong> Front end build of site

            <p><strong>Summary: </strong></p>
			<p>Fascinating intimate interviews with people that matter sharing their wisdom and experience. FLH is creating a library of new videos with the world's most admired personalities. Compelling and entertaining, these videos are designed to feed your mind and change the way you think about the world.</p>

			<strong>View site:</strong> <a href="http://www.futurelifehappy.co.uk/" class="targetBlank">www.futurelifehappy.co.uk/</a>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/flh.jpg" alt="Future Life Happy">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>