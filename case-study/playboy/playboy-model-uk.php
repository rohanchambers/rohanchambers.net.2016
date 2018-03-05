<?php
    $PRODUCTION = true;
    $browserTitle = 'Playboy Model UK | Case study';
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
				<li><a href="../playboy/thinking-is-sexy" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../playboy/playboy-email" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Playboy Model UK</h1>
            <p><strong>Date: </strong>2008</p>
            <p><strong>Client: </strong>Playboy UK</p>
            <p><strong>Company: </strong><a href="http://www.playboy.co.uk/" class="targetBlank">http://www.playboy.co.uk/</a></p>
            <p><strong>Technologies: </strong> The Playboy Model UK page currently shows the results of the winners for the months of 2007. This was built with compliant XHTML 1.0 and CSS.</p>
            <p><strong>Tasks:</strong> Front-end development

            <p><strong>Summary: </strong></p>
			<p>Playboy Model UK 2007 was a competition that Playboy UK setup to increase sales via mobile texting. The UGC website would allow users to create profiles and add photos and relevant details in order to get as many people to vote for them via texting. Every month the girl with the most votes would get a professional photoshoot with Playboy UK and automatically be entered into the final competition for the Playboy Model UK of the year 2007 where the 1st prize is a shoot at the Playboy Mansion with Hugh Hefner.</p>

			<strong>View site:</strong> <a href="http://www.rohanchambers.net/projects/playboyModelUK/" class="targetBlank">http://www.playboymodeluk.co.uk/</a> (This link is not live anymore but the project is hosted on my server)
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/playboymodeluk.jpg" alt="Playboy Model UK">
			<img src="img/playboymodeluk-2.jpg" alt="Playboy Model UK">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>