</div><!-- end content -->

<footer>

        <div id="custom-footer-text">
            <?php if ( $footerText = get_theme_option('Footer Text') ): ?>
            <p><?php echo $footerText; ?></p>
            <?php endif; ?>
            <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                <p><?php echo $copyright; ?></p>
            <?php endif; ?>
        </div>
 
        <p><?php echo __('Teresa Deevy Archive, <a href="http://www.nuim.ie">NUI Maynooth</a>. Phone +353 (1) 474 7197 <a href="mailto:padraic.stack@nuim.ie">Email</a>. '); ?></p>
        
    <?php fire_plugin_hook('public_footer'); ?>

    <a href="http://library.nuim.ie"><img src="/files/theme_uploads/scale_library.jpg" /></a> <a href="http://forasfeasa.ie"><img src="/files/theme_uploads/scale_aff.png" /></a> <a href="http://3upartnership.ie"> <img src="/files/theme_uploads/3U_partnership.png" /></a>
</footer>

</div><!--end wrap-->

<script type="text/javascript">
jQuery(document).ready(function () {
    Seasons.showAdvancedForm();
    Seasons.mobileSelectNav();
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50822888-1', 'nuim.ie');
  ga('send', 'pageview');

</script>




</body>

</html>
