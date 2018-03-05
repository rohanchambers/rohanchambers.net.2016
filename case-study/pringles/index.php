<?php
    $PRODUCTION = true;
    $browserTitle = 'Pringles, Help the Oversharers | Case study';
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
				<li><a href="../collective-blog/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../cadbury/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Pringles, Help the Oversharers</h1>
            <p><strong>Date: </strong>2011</p>
            <p><strong>Client: </strong>Pringles</p>
            <p><strong>Agency: </strong><a href="http://www.wunderman.co.uk/" class="targetBlank">Wunderman</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3 and jQuery</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>Pringles Help the oversharers is a site primarily built in Flash. Its aimed to show or wake up people on how sharing too many posts on Facebook can become very tedious and how oversharing can end up sounding totally ridiculous when pointed out. Visit the site to show your friends how much they over share.</p>						
			<p>I developed the pages that would show if Flash or Javascript are not installed or turned off respectively. Mainly XHTML and CSS build's of new pages with strict accessibility and W3C standards.</p><p>This was a freelance job I worked on for one of the top 5 digital advertising agency's in the UK, Wunderman.</p>
			<p><strong>View app:</strong> Site offline</p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/campaign.jpg" alt="Pringles, Help the Oversharers">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>