<?php
    $PRODUCTION = true;
    $browserTitle = 'Ford Galaxy Email Newsletter | Case study';
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
				<li><a href="../range-rover/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../bbc-6music/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Ford Galaxy Email Newsletter</h1>
            <p><strong>Date: </strong>2010</p>
            <p><strong>Client: </strong>Range Rover</p>
            <p><strong>Agency: </strong><a href="http://www.wunderman.co.uk/" class="targetBlank">Wunderman</a></p>
            <p><strong>Technologies: </strong>HTML tables, inline CSS, Campaign monitor</p>
            <p><strong>Tasks:</strong> HTMLs email template build
            <p><strong>Summary: </strong></p>
			<p>Email template build for Ford UK's Galaxy newsletter. Built so that Ford employees can update email on a weekly/monthly basis. Extensive testing on all major email clients with all major browsers such as Outlook 2007, Hotmail, Yahoo, Google mail... Accessibly built so that all content expands email without breaking when text size is increased.</p>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/ford-email.jpg" alt="Ford Email Newsletter">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>