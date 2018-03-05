<?php
    $PRODUCTION = true;
    $browserTitle = 'Cadbury, Advent Calendar | Case study';
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
				<li><a href="../hotelsdotcom/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../heinz/" class="go-next" title="Next Project"></a></li>
			</ul>

            <h1>Cadbury, Advent Calendar</h1>
            <p><strong>Date: </strong>2015</p>
            <p><strong>Client: </strong>Cadbury</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, jQuery, Responsive development</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>I developed all of the front end build for the Cadbury Advent Calendar. This site is semi responsive and built to fit within three breaking points. Desktop, Facebook app (810px) and mobile.</p>
			<p>Guess the gift and share to win!</p>
            <p><strong>View site:</strong> <a href="http://www.unwrapcadbury.co.uk/" class="targetBlank">http://www.unwrapcadbury.co.uk/</a></p>
            <p><strong>View app:</strong> <a href="http://www.facebook.com/CadburyUK/app_225899240917375" class="targetBlank">http://www.facebook.com/CadburyUK/</a></p>	
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/advent/cadbury_advent_desktop.jpg" alt="Cadbury, Advent Calendar">
			<img src="img/advent/cadbury_advent_fbapp.jpg" alt="Cadbury, Advent Calendar">
			<img src="img/advent/cadbury_advent_mobile.jpg" alt="Cadbury, Advent Calendar">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>




<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$PRODUCTION = true;
    $browserTitle = 'Cadbury, Advent Calendar | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">			
					<li><a href="../hotelsdotcom/" class="go-back" title="Previous Project"></a></li>													
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../heinz/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Cadbury, Advent Calendar</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>December 2013</li>
					<li><strong>Client: </strong>Cadbury</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, jQuery, Responsive implementation</li>	
					<li><strong>Tasks:</strong> Front end development of app.</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>I developed all of the front end build for the Cadbury Advent Calendar. This site is semi responsive and built to fit within three breaking points. Desktop, Facebook app (810px) and mobile.</p>
						<p>Guess the gift and share to win!</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.unwrapcadbury.co.uk/" class="targetBlank">http://www.unwrapcadbury.co.uk/</a></li>
					<li><strong>View app:</strong> <a href="http://www.facebook.com/CadburyUK/app_225899240917375" class="targetBlank">http://www.facebook.com/CadburyUK/</a></li>															
				</ul>
				<div class="hr"></div>	
				<ul class="case-study-details">
					<li><strong>Share this:</strong></li>
					<li>
						<?php include("../../includes/php/sharethis.php"); ?>						
					</li>
				</ul>				
			</div>
			
			<div id="right-col">
				<ul>
					<li>
						<img src="/img/pages/case-study/cadbury/advent/cadbury_advent_desktop.jpg" alt="Cadbury, Advent Calendar" />
					</li>
					<li>
						<img src="/img/pages/case-study/cadbury/advent/cadbury_advent_fbapp.jpg" alt="Cadbury, Advent Calendar" />
					</li>
					<li>
						<img src="/img/pages/case-study/cadbury/advent/cadbury_advent_mobile.jpg" alt="Cadbury, Advent Calendar" />
					</li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>