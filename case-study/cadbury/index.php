<?php
    $PRODUCTION = true;
    $browserTitle = 'Cadbury Cakes | Case study';
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
				<li><a href="../pringles/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../kpmg/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Cadbury Cakes</h1>
            <p><strong>Date: </strong>2010</p>
            <p><strong>Client: </strong>Cadbury</p>
            <p><strong>Agency: </strong><a href="http://www.elviscommunications.com/" class="targetBlank">Elvis Communications</a></p>
            <p><strong>Technologies: </strong>XHTML Strict, CSS3, jQuery, Cufon, Curvy corners, Cross browser compatibility and W3C web standards.</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>Premierfoods were needing individual supporting websites for their food brands which included Cadbury, Birds, Haywards, Branston, Mr. Kipling, Angel Delight, Hartleys and many more. I worked on this project as a front end developer working from a template to develop all these sites keeping in line with the design briefs.</p>
			<p>All the builds were then passed on to a third party agency to implement into a bespoke CMS.</p>	
			<p><strong>View app:</strong> Sites offline</p>
			<p><a href="http://www.cadburycakes.co.uk/" class="targetBlank">CadburyCakes.co.uk</a>, <a href="http://www.ambrosia.co.uk/" class="targetBlank">Ambrosia.co.uk</a>, <a href="http://www.birdscustard.co.uk/" class="targetBlank">BirdsCustard.co.uk</a>, <a href="http://www.haywardspickles.co.uk/" class="targetBlank">HaywardsPickles.co.uk</a>, <a href="http://www.angeldelightdesserts.co.uk/" class="targetBlank">AngelDelightDeserts.co.uk</a></p>			
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/home.jpg" alt="Cadbury cakes"></li>
			<img src="img/about.jpg" alt="Cadbury cakes"></li>
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>