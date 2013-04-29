<div id="footer">
</div> <!-- #footer -->

</div><!--/#inner-wrap-->
</div><!--/#outer-wrap-->
</div><!-- end main-container -->

<!-- Modernizer script to get SVG fallback -->
  <script>
if(!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function() {
        return $(this).attr('src').replace('.svg', '.png');
    });
}
</script>

<!-- Parallax javascript -->
<script type="text/javascript" src="/js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!-- Navigation Script -->
<script src="<?php echo $this->getThemePath()?>/js/nav.js"></script>
<!-- end scripts-->

<!-- Google Anlytics Code -->

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
</body>
</html>