<?php
    $PRODUCTION = true;
    $browserTitle = 'Fashion-istical | Case study';
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
				<li><a href="../amberton/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../freelance-work/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Fashion-istical</h1>
            <p><strong>Date: </strong>2010</p>
            <p><strong>Client: </strong>Fashion-istical (Personal project)</p>
            <p><strong>Technologies: </strong> XHTML, CSS, jQuery, Wordpress integration</p>
            <p><strong>Tasks:</strong> XHTML, CSS, jQuery, Wordpress integration

            <p><strong>Summary: </strong></p>
			<p>Complete design and development of the look and feel of Fashion-istical magazine website. Worpress cms integration as a theme curently in process.</p>
			<p>I designed and developed an idea for a fashion magazine that will be based upon articles about fashion. This is a personal project/idea for friends that maybe starting up a fashion magazine company. The site will be integrated into Wordpress for its cms capabilities to allow regular updates of the sites content.</p>

			<strong>View site:</strong> <a href="http://www.rohanchambers.net/projects/fashion-istical/index.html" class="targetBlank">Fashion-istical template</a>
        </section>
        <section id="case-study-img" class="col-8">
			<img src="img/template.jpg" alt="Fashion-istical Template">
		</section>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>