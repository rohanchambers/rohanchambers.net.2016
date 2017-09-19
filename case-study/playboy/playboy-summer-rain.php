<?php
    $PRODUCTION = true;
    $browserTitle = 'Playboy UK Summer Rain | Case study';
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
				<li><a href="../playboy/playboy-email" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../harrods/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Playboy UK Summer Rain</h1>
            <p><strong>Date: </strong>2008</p>
            <p><strong>Client: </strong>Playboy UK</p>
            <p><strong>Company: </strong><a href="http://www.playboy.co.uk/" class="targetBlank">http://www.playboy.co.uk/</a></p>
            <p><strong>Technologies: </strong> Photoshop design</p>
            <p><strong>Tasks:</strong> Design for magazine campaign

            <p><strong>Summary: </strong></p>
            <p>I designed a campaign called 'Playboy Summer Rain' for a magazine.</p>

			<strong>View site:</strong> View images
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/playboy-summer-rain.jpg" alt="Playboy UK Summer Rain">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>