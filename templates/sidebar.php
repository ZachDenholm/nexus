<?php dynamic_sidebar('sidebar-primary'); ?>


<section class="widget">
    <div>
        <h3>Recent Datasets</h3>
        <ul>  
<?php
$args=array(
  'post_type' => 'dataset',
  'post_status' => 'publish',
  'posts_per_page' => 3,
  'caller_get_posts'=> 1,
  'cat' => 14,
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
        </ul>
    </div>
</section>

<section class="widget">
    <div>
        <h3>New Datasets for Review</h3>
        <ul>  
<?php
$args=array(
  'post_type' => 'dataset',
  'post_status' => 'publish',
  'posts_per_page' => 3,
  'caller_get_posts'=> 1,
  'cat' => 13,
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
        </ul>
    </div>
</section>