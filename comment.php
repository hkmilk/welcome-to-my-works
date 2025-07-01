<?php
if ( post_password_required() ) {
    return;
}
?>
<?php if( have_comments() ): ?>
        <h2 id="comments" class="p-comment__ttl">Comment</h2>
        <?php the_comments_navigation(); ?>
<?php endif; ?>
