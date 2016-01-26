<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('dataset'); ?>>
    <header>
      <h1 class="entry-title">Dataset - <?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
      <h4>Description</h4>
      <?php the_field('description'); ?>
    </div>
    <div class="entry-meta">
        <?php get_template_part('templates/dataset-meta'); ?>
    </div>
    
    <footer style:background:none;>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
