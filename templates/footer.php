<footer class="content-info">
  <div class="container">
    <div class="copyright">
        <a href="/license">&copy; Copyright <?php echo date('Y'); >?> Date.je. Some Rights Reserved</a>
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
  </div>
</footer>
