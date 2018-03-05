<?php
    $PRODUCTION = true;
    $browserTitle = 'Range Rover and Land Rover Facebook Dev. | Case study';
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
				<li><a href="../nokia/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../ford/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Range Rover &amp; Land Rover Facebook Dev.</h1>
            <p><strong>Date: </strong>2010</p>
            <p><strong>Client: </strong>Range Rover</p>
            <p><strong>Agency: </strong><a href="http://www.wunderman.co.uk/" class="targetBlank">Wunderman</a></p>
            <p><strong>Technologies: </strong>HTML, CSS</p>
            <p><strong>Tasks:</strong> Facebook Module Front-end development builds
            <p><strong>Summary: </strong></p>
			<p>Front end development of modules for a Facebook page build for the Land Rover and Range Rover car brands mainly for sharing awareness of the brands with Share buttons and other informational links.</p>					
			<p>I developed these modules in XHTML and CSS strict accessibility and W3C web standards. All work passed through a QA team for passing Wunderman's high standard of delivery.</p>
			<p><strong>View app:</strong> Internal site only</p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/range-rover.jpg" alt="Range Rover &amp; Land Rover Facebook Dev.">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>