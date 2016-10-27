<?php
    $PRODUCTION = true;
    $browserTitle = 'Nokia Outdoors Series | Rohan Chambers';
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
				<li><a href="../kpmg/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../range-rover/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Nokia Outdoors Series</h1>
            <p><strong>Date: </strong>2010</p>
            <p><strong>Client: </strong>Nokia</p>
            <p><strong>Agency: </strong><a href="http://www.wunderman.co.uk/" class="targetBlank">Wunderman</a></p>
            <p><strong>Technologies: </strong>HTML tables, inline CSS, Campaign monitor</p>
            <p><strong>Tasks:</strong> Newsletter build
            <p><strong>Summary: </strong></p>
			<p>Email template build for the Nokia Outdoor Series newsletter. Built so that Nokia employees can update email on a weekly/monthly basis. Extensive testing on all major email clients with all major browsers such as Outlook 2007, Hotmail, Yahoo, Google mail... Accessibly built so that all content expands email without breaking when text size is increased.</p>
			<p><strong>View app:</strong> Internal site only</p>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/nokia-outdoors.jpg" alt="Nokia Outdoors">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>