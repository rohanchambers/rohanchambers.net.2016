<?php
    $PRODUCTION = true;
    $browserTitle = 'BBC 6Music | Rohan Chambers';
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
				<li><a href="../ford/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../debenhams/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>BBC 6Music</h1>
            <p><strong>Date: </strong>2010</p>
            <p><strong>Client: </strong>BBC</p>
            <p><strong>Agency: </strong><a href="http://www.atticmedia.com/" class="targetBlank">Attic Media</a></p>
            <p><strong>Technologies: </strong>XHTML, CSS</p>
            <p><strong>Tasks:</strong> Site updates
            <p><strong>Summary: </strong></p>
			<p>The BBC are creating a music and radio section on their website developed by the agency Attic media. I worked on the BBC 6Music section of bbc.co.uk as a front end developer mainly doing xhtml and css cross browser fixes, bugs and ammends.</p>

			<strong>View site:</strong> <a href="http://www.bbc.co.uk/6music/" class="targetBlank">http://www.bbc.co.uk/6music/</a></li>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/bbc-6music.jpg" alt="BBC 6Music">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>