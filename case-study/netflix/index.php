<?php
    $PRODUCTION = true;
    $browserTitle = 'Breaking Bad Spoiler Foiler | Rohan Chambers';
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
				<li><a href="../bulmers/harvestimator" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../pgtips/cuppaclub2" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Breaking Bad Spoiler Foiler</h1>
            <p><strong>Date: </strong>2015</p>
            <p><strong>Client: </strong>Netflix</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, jQuery</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>I built all the front end development on this project.</p>
			<p>Behind on Breaking Bad? Now you can check your feed without fear. Any tweets with danger words get blacked out, as below. When you've caught up, it's safe to go back to normal Twitter. Until Heisenberg comes knocking again on Monday.</p>
            <p><strong>View site:</strong> <a href="http://www.spoilerfoiler.com/" class="targetBlank">SpoilerFoiler.com/</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/spoilerfoiler.jpg" alt="Spoiler Foiler">
        </section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>