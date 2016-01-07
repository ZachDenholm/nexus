<?php 
    $terms = get_field('license');
    $formats = get_field('formats');
    $groups = get_field('groups');
?>

<h4>Source</h4>
<p class="link"><a rel="link" target="_blank" href="<?php the_field('source_url'); ?>"><?php the_field('source_url'); ?></a></p>

<h4>License</h4>
<p class="license" rel="license">
    <?php foreach( $terms as $term ): ?>
        <?php echo $term->name; ?>
    <?php endforeach; ?>
</p>

<h4>Formats</h4>
<p class="format" rel="format">
    <?php foreach( $formats as $format ): ?>
        <?php echo $format->name; ?>
    <?php endforeach; ?>
</p>

<h4>Categories</h4>
<p class="group" rel="group">
    <?php foreach( $groups as $group ): ?>
        <?php echo $group->name; ?>
    <?php endforeach; ?>
</p>

<h4>Updated</h4>
<p><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>

<h4>Submitted by</h4>
<p class="byline author vcard"><a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>

