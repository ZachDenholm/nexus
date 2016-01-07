<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
      <?php if ( is_user_logged_in() ): ?>
        <a href="<?php echo wp_logout_url( $redirect ); ?>" class="auth logout">Logout</a>
      <?php else: ?>
        <a href="" class="auth login">Login</a>
        <a href="/register/" class="auth register">Register</a>
      <?php endif; ?>
      
    </nav>
  </div>
</header>
