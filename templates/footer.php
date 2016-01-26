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
