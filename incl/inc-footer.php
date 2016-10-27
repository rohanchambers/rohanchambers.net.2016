    <footer>
        <div class="container">
            <div id="copyright">
                <img src="/assets/img/global/rohanchambers_logo.png" alt="Rohan Chambers" width="100" height="31" />
                <div><p>Website Designed and Developed by Rohan Chambers &copy;2016<br />
                Valid <a href="http://validator.w3.org/check?uri=referer">HTML 5</a> and <a href="http://jigsaw.w3.org/css-validator/">CSS 3</a> | <a href="/site-map">Site map</a> | <a href="/accessibility">Accessibility</a> | <a href="/contact">Contact</a></p></div>
                <a href="#" class="cta-lightbox-home"><img id="under-hood" src="/assets/img/icons/under_hood.png" alt="Under the Hood of RohanChambers.net" title="Under the Hood of RohanChambers.net"></a>
            </div>
        </div>
    </footer>
    <button id="back-to-top" class="buttonTopPulse"></button>
    <!-- Lightbox markup -->
    <div class="lightbox-bg"></div>
    <div class="lightbox-home">
        <div class="lightbox-panel">
            <div class="close"><a href="#">Close X</a></div>
            <div class="lightbox-content">
                <?php include("../../incl/inc-light-under-hood.php"); ?>
            </div>
        </div>
    </div><!-- End of Lightbox -->
    <!--(if target dev)><!-->
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/jquery-validation/dist/jquery.validate.js"></script>
    <script src="/assets/js/vendor/jssor.slider.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <!--<!(endif)-->
    <!--(if target dist)>
    <script src="/assets/js/compiled.min.js?{{rlsdate}}"></script>
    <!(endif)-->
</body>
</html>