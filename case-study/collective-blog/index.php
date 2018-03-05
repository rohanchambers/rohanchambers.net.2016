<?php
    $PRODUCTION = true;
    $browserTitle = 'Collective London Internal Blog | Case study';
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
				<li><a href="../honda/made-in-britain" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../pringles/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Collective London Internal Blog</h1>
            <p><strong>Date: </strong>2011</p>
            <p><strong>Client: </strong>E.TAUTZ</p>
            <p><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3 and jQuery, Wordpress</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>Collective London needed an internal blog for all employees to be able to post various updates on the agency or anything that is relevant to digital media or our work in general.</p>
			<p>I built all of the front end in HTML5, CSS3, jQuery and then integrated this into Wordpress for its CMS capabilities as a theme.</p>
			<p><strong>View app:</strong> Internal site only</p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/collective-blog.jpg" alt="Collective Internal Blog">
			<img src="img/collective-blog-single-post.jpg" alt="Collective Internal Blog">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>