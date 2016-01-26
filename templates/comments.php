<?php
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="comments">
  <?php if (have_comments()) : ?>
    <h2><?php printf(_nx('One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?></h2>

    <ol class="comment-list">
      <?php wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'sage')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'sage')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; // have_comments() ?>

  <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <?php _e('Comments are closed.', 'sage'); ?>
    </div>
  <?php endif; ?>

  <?php 
  $comments_args = array(
    // change the title of send button 
    'label_submit'=>'Send',
    // change the title of the reply section
    'title_reply'=>'Discuss this Dataset',
    // remove "Text or HTML to be displayed after the set of comment fields"
    'comment_notes_after' => '',
    // Update the login link
    'must_log_in' => '<p class="must-log-in">You must be <a href="/login/">logged in</a> to post a comment!</p>',
    // redefine your own textarea (the comment body)
    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

  comment_form($comments_args); ?>
</section>
