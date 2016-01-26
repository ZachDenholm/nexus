<?php 
    $terms = get_field('license');
    $formats = get_field('formats');
    $groups = get_field('groups');
?>

<h4>Source</h4>
<p class="link"><a rel="link" target="_blank" href="<?php the_field('source_url'); ?>"><?php the_field('source_url'); ?></a></p>

<div class="meta-classification">
    <h4>License</h4>
    <p class="license" rel="license">
        <?php
        if ($terms):
            foreach( $terms as $term ):
                echo $term->name;
            endforeach;
        else:
            echo 'No License Supplied';
        endif;
        ?>
    </p>

    <h4>Formats</h4>
    <p class="format" rel="format">
        <?php
        if ($formats):
            foreach( $formats as $format ):
                echo $format->name;
            endforeach; 
        else:
            echo 'No Formats Supplied';
        endif;
        ?>
    </p>

    <h4>Categories</h4>
    <p class="group" rel="group">
        <?php
        if ($groups):
            foreach( $groups as $group ):
                echo $group->name;
            endforeach;
        else:
            echo 'No Groups Supplied';
        endif;
        ?>
    </p>
</div>

<div class="meta-submittor">

    <h4>Quality</h4>
    <p class="quality" rel="quality">
    <?php
        switch (get_field('quality')->name) {
            case '5':
                echo '<img src="http://lab.linkeddata.deri.ie/2010/lod-badges/img/data-badge-5.png" alt="no star Web data" />';
                break;

            case '4':
                echo '<img src="http://lab.linkeddata.deri.ie/2010/lod-badges/img/data-badge-4.png" alt="no star Web data" />';
                break;

            case '3':
                echo '<img src="http://lab.linkeddata.deri.ie/2010/lod-badges/img/data-badge-3.png" alt="no star Web data" />';
                break;

            case '2':
                echo '<img src="http://lab.linkeddata.deri.ie/2010/lod-badges/img/data-badge-2.png" alt="no star Web data" />';
                break;

            case '1':
                echo '<img src="http://lab.linkeddata.deri.ie/2010/lod-badges/img/data-badge-1.png" alt="no star Web data" />';
                break;
            
            default:
                echo '<img src="http://lab.linkeddata.deri.ie/2010/lod-badges/img/data-badge-0.png" alt="no star Web data" />';
                break;
        }
    ?>
    </p>
    
    <h4>Updated</h4>
    <p><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>

    <h4>Submitted by</h4>
    <p class="byline author vcard"><a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
</div>