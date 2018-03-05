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
			<div id="copyright">
				<p>Website Designed and Developed by Rohan Chambers &copy;<?php echo date("Y"); ?><br />
				Valid <a href="http://validator.w3.org/check?uri=referer">HTML 5</a> and <a href="http://rohanchambers.net/includes/css/layout.css">CSS 3</a> | <a href="http://www.rohanchambers.net/site-map.php">Site map</a> | <a href="http://www.rohanchambers.net/accessibility.php">Accessibility</a> | <a href="contact.php">Contact</a></p>
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
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=2795365; 
var sc_invisible=1; 
var sc_security="dbf7ea22"; 
</script>
<script type="text/javascript"
src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div
class="statcounter"><a title="tumblr statistics"
class="statcounter"
href="http://www.statcounter.com/tumblr/"><img
class="statcounter"
src="http://c.statcounter.com/2795365/0/dbf7ea22/1/"
alt="tumblr statistics" /></a></div></noscript>
<!-- End of StatCounter Code -->

<!-- Start of Google Analytics Code -->
<!--
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2815826-1");
pageTracker._trackPageview();
} catch(err) {}</script>
-->
<!-- End of Google Analytics Code -->        
</body>
</html>