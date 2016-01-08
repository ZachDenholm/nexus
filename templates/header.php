<header class="banner">
  <div class="container">
    <nav class="nav-primary">
      <ul id="menu-main" class="nav">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => false]);
        endif;
        ?>
        <?php if ( is_user_logged_in() ): ?>
          <li class="menu-item menu-your-profile"><a href="<?php echo wp_logout_url( $redirect ); ?>" class="auth logout">Logout</a>
        <?php else: ?>
          <li class="menu-item menu-login"><a href="/login/" class="auth login">Login</a></li>
          <li class="menu-item menu-register"><a href="/register/" class="auth register">Register</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </div>
</header>
