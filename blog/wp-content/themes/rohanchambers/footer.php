<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<footer class="layout">
			<div id="copyright">
				<p>Website Designed and Developed by Rohan Chambers &copy;<?php echo date("Y"); ?></p>
			</div>
		</footer>
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<!-- Start of StatCounter Code for Default Guide -->
<script>
var sc_project=2795365; 
var sc_invisible=1; 
var sc_security="dbf7ea22"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="website
statistics" href="http://statcounter.com/free-web-stats/"
target="_blank"><img class="statcounter"
src="//c.statcounter.com/2795365/0/dbf7ea22/1/" alt="website
statistics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->     
</body>
</html>