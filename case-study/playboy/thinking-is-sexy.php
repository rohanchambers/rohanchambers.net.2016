<?php
    $PRODUCTION = true;
    $browserTitle = 'Playboy UK, Thinking is Sexy | Rohan Chambers';
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
				<li><a href="../playboy/playboyCorporate" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../playboy/playboy-model-uk" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Playboy UK, Thinking is Sexy</h1>
            <p><strong>Date: </strong>2007</p>
            <p><strong>Client: </strong>Playboy UK</p>
            <p><strong>Company: </strong><a href="http://www.playboy.co.uk/" class="targetBlank">http://www.playboy.co.uk/</a></p>
            <p><strong>Technologies: </strong> XHTML, CSS, W3C Compliant, Javascript</p>
            <p><strong>Tasks:</strong> Front-end development

            <p><strong>Summary: </strong></p>
			<p>Playboy Model UK 2007 was a competition that Playboy UK setup to increase sales via mobile texting. The UGC website would allow users to create profiles and add photos and relevant details in order to get as many people to vote for them via texting. Every month the girl with the most votes would get a professional photoshoot with Playboy UK and automatically be entered into the final competition for the Playboy Model UK of the year 2007 where the 1st prize is a shoot at the Playboy Mansion with Hugh Hefner.</p>

			<strong>View site:</strong> <a href="http://www.rohanchambers.net/projects/thinkingIsSexy/" class="targetBlank">http://www.thinkingissexy.com/</a> (This link is not live anymore but the project is hosted on my server)
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/thinking-is-sexy.jpg" alt="Playboy UK Thinking is Sexy">
		</section>
	</div><!-- End of container -->

<?php include("../../incl/inc-footer.php"); ?>