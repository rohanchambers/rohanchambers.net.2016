<?php
    $PRODUCTION = true;
    $browserTitle = 'Heineken, Beauty of Brewing | Rohan Chambers';
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
				<li><a href="../perfectPeaksBrews/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../jaguar/livefearless.php" class="go-next" title="Next Project"></a></li>
			</ul>

            <h1>The Beauty of Brewing</h1>
            <p><strong>Date: </strong>2015</p>
            <p><strong>Client: </strong>Heineken</p>
            <p><strong>Agency: </strong>We are Social</p>
            <p><strong>Technologies: </strong>HTML5, CSS3, jQuery, Skrollr plugin, Canvas, CSS transitions, Fully responsive</p>
            <p><strong>Tasks:</strong> <p>Front end development of app.</p>
            <p><strong>Summary: </strong></p>
			<p>I helped develop Heinken's 'The Beauty of Brewing'. This is a parallax website that explains the story of how beer is made. It is broken down in to sections, each of being a vital ingredient to the brewing process Barley, Hops and Water.</p>
			<p>I developed this site to be fully responsive for all major devices. There was a lot of interaction with the designer on this project to get all the animations perfect as well as all the other design elements in the project.</p>
			<p>The beauty of brewing is that it's a natural process, enhanced by craftsmanship to create the perfect beverage.</p>
            <p><strong>View site:</strong> <a href="http://heineken.co.uk/beautyofbrewing" class="targetBlank">http://heineken.co.uk/beautyofbrewing</a></p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/home.jpg" alt="Heineken, The Beauty of Brewing" />
        </section>
	</div><!-- End of container -->

    <?php include("../../incl/inc-footer.php"); ?>