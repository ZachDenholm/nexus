<header class="banner">
  <div class="container">
    <h1>Data.je - The Jersey Open Data Project</h1>
    <nav class="navbar nav-primary" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbar',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        <ul class="nav navbar-nav">
        <?php if ( is_user_logged_in() ): ?>
          <li class="menu-item menu-your-profile"><a href="<?php echo wp_logout_url( $redirect ); ?>" class="auth logout">Logout</a>
        <?php else: ?>
          <li class="menu-item menu-login"><a href="/login/" class="auth login">Login</a></li>
          <li class="menu-item menu-register"><a href="/register/" class="auth register">Register</a></li>
        <?php endif; ?>
            </ul>
        </div>
    </nav>
  </div>
</header>
