<?php
    $PRODUCTION = true;
    $browserTitle = 'Armani, Guerlain, Acqua Di Parma, DuChamp, Harrods Ties | Case study';
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
				<li><a href="../playboy/playboy-summer-rain" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../harrods/harrods-email" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Armani, Guerlain, Acqua Di Parma, DuChamp, Harrods Ties</h1>
            <p><strong>Date: </strong>2006</p>
            <p><strong>Client: </strong>Harrods</p>
            <p><strong>Company: </strong><a href="http://www.harrods.com/" class="targetBlank">http://www.harrods.com/</a></p>
            <p><strong>Technologies: </strong> Photoshop, XHTML &amp; CSS</p>
            <p><strong>Tasks:</strong> Design &amp; build of landing pages

            <p><strong>Summary: </strong></p>
            <p>Mainly keeping Harrods.com up to date with upcoming news, events and products. Working on premium consumer brands for the likes of Emporio Armanim, Hugo Boss, Guerlain, La Prairie and many more. Design and development of landing pages and micro sites with the use of XHTML, CSS and the Harrods bespoke CMS.</p>

			<strong>View site:</strong> View images
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/armani-underwear.jpg" alt="Armani Underwear">
			<img src="img/guerlain-kiss-kiss.jpg" alt="Guerlain Kiss">
			<img src="img/acquaDiParma.jpg" alt="Acqua Di Parma">
			<img src="img/duChamp.jpg" alt="Du Champ">
			<img src="img/harrods-ties.jpg" alt="Du Champ">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>