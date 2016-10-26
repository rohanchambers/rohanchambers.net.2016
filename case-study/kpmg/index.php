<?php
    $PRODUCTION = true;
    $browserTitle = 'KPMG and Burberry | Rohan Chambers';
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
				<li><a href="../cadbury/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../nokia/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>KPMG &amp; Burberry</h1>
            <p><strong>Date: </strong>2011</p>
            <p><strong>Client: </strong>KPMG</p>
            <p><strong>Agency: </strong><a href="http://www.conrandesigngroup.com/" class="targetBlank">Conran Design Group</a></p>
            <p><strong>Technologies: </strong>HTML, CSS3 and jQuery</p>
            <p><strong>Tasks:</strong> Site build
            <p><strong>Summary: </strong></p>
			<p>Front end development for the KPMG Burberry website. I was working on the build of the site with another front end developer. This site is heavily based on the jQuery library for its functionality. Very tight deadline of 4 days to develop the whole site to hand over to the clients. This site is not for public viewing but only for internal employees of KPMG so only a snapshot is here available.</p>
			<p><strong>View app:</strong> Internal site only</p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/kpmg-home.jpg" alt="KPMG &amp; Burberry">
			<img src="img/kpmg-audit.jpg" alt="KPMG &amp; Burberry">
			<img src="img/kpmg-team.jpg" alt="KPMG &amp; Burberry">
		</section>
	</div><!-- End of container -->

<?php include("../../incl/inc-footer.php"); ?>