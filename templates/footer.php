<footer class="content-info cf">
  <div class="container">
    <div class="copyright">
        <ul class="nav">
            <li><a href="/terms/">&copy; Copyright <?php echo date('Y'); ?> Date.je. Some Rights Reserved</a></li>
        </ul>
    </div>
    <div class="menu">
        <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
    </div>
    <div class="widgets">
        <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="brand">
        <div class="icons"></div>
        <div class="logo"></div>
    </div>
  </div>
</footer>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.data.je/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.data.je/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
