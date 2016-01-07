<?php get_template_part('templates/page', 'header'); 

$contentArgs = array(
    'post_type' => array( 'datasets'),
    'cat' => 14,
    'posts_per_page' => 10,
    'orderby' => 'modified',
    'order' => 'DESC',
    'paged' => ( get_query_var('paged') ) ? get_query_var('paged') : 1,
    );
$wp_query = new WP_Query( $contentArgs );
?>

<?php if (!$wp_query->have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found...', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<?php while ($wp_query->have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
