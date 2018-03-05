<?php
    $PRODUCTION = true;
    $browserTitle = 'Live young this January with Evian | Case study';
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
				<li><a href="../tiger/" class="go-back" title="Previous Project"></a></li>
				<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
				<li><a href="../lenovo/" class="go-next" title="Next Project"></a></li>
			</ul>
            <h1>Live young this January with Evian</h1>
            <p><strong>Date: </strong>2014</p>
            <p><strong>Client: </strong>Evian</p>
            <p><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></p>
            <p><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive development</p>
            <p><strong>Tasks:</strong> Front end development of Facebook app.
            <p><strong>Summary: </strong></p>
			<p>I developed the complete front end builds of the Facebook apps. for Evian, Live young this January Hub, Evian Slingshot and the Evian Photo competition while working closely with the backend developers that were integrating my templates in the PHP Fat-Free Framework.</p>
			<p>The hub linked to two other apps, one being the Evian Slingshot which is a new piece of functionality that allows users to buy Evian products by linking your online grocery basket with any of the following retailers: Tesco, Sainsbury's, Waitrose or Ocado. <br>The second one was a photo competition to upload a picture demonstrating how you're Living young this January for a chance to win a trip in Lapland and watch the Northern Lights from your very own igloo.</p>

			<p><strong>View app:</strong> Sites offline 
			<a href="http://www.facebook.com/evianUK/app_455902297806653" class="targetBlank">http://www.facebook.com/evianUK (Hub)</a>
			<a href="http://www.facebook.com/evianUK/app_511977748836025" class="targetBlank">http://www.facebook.com/evianUK (Slingshot)</a>
			<a href="http://www.facebook.com/evianUK/app_254553244581393" class="targetBlank">http://www.facebook.com/evianUK (Photo Competition)</a>
        </section>
        <div id="case-study-img" class="col-8">
			<img src="img/evianuk_hub.jpg" alt="Evian, Live young this January">
			<img src="img/evianuk_slingshot.jpg" alt="Evian, Live young this January">
			<img src="img/evianuk_comp.jpg" alt="Evian, Live young this January">
		</div>
	</div><!-- End of container -->

<?php if ($PRODUCTION) { ?>
        <?php include("../../incl/dist/inc-footer.php"); ?>
    <?php } else { ?>
        <?php include("../../incl/inc-footer.php"); ?>
    <?php }
?>