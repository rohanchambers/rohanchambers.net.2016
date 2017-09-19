<?php
    $PRODUCTION = true;
    $browserTitle = 'Playboy UK Email Newsletter | Case study';
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
				<li><a href="../playboy/playboy-model-uk" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../playboy/playboy-summer-rain" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Playboy UK Email Newsletter</h1>
            <p><strong>Date: </strong>2008</p>
            <p><strong>Client: </strong>Playboy UK</p>
            <p><strong>Company: </strong><a href="http://www.playboy.co.uk/" class="targetBlank">http://www.playboy.co.uk/</a></p>
            <p><strong>Technologies: </strong> XHTML Tables, Inline CSS</p>
            <p><strong>Tasks:</strong> Tabless markup

            <p><strong>Summary: </strong></p>
			<p>This is the new 2009 Playboy Newsletter email that we send out to all our subscribers. I developed this newsletter template to allow the content managers to update it on a weekly basis.</p>

			<strong>View site:</strong> View images
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/playboy-email-thanks.jpg" alt="Playboy UK Email Newsletter Thank you">
			<img src="img/playboy-email.jpg" alt="Playboy UK Email Newsletter">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>