<header class="banner">
  <div class="container">
    
    <nav class="nav-primary">
      <ul id="menu-main" class="nav">
        <li class="menu-item menu-home"><a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></li>
        <li class="active menu-item menu-datasets"><a href="/datasets/">Approved Datasets</a></li>
        <li class="active menu-item menu-pending-datasets"><a href="/category/status/pending/">Pending Datasets</a></li>
        <li class="menu-item menu-submit-a-dataset"><a href="https://nexus.data.je/dataset-submission/">Submit a Dataset</a></li>
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
