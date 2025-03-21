<?php
if ( post_password_required() ) {
    return;
}
?>
<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                $comments_number = get_comments_number();
                printf( _n( '%s件のコメント', '%s件のコメント', $comments_number, 'textdomain' ), number_format_i18n( $comments_number ) );
            ?>
        </h2>
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 50,
                ) );
            ?>
        </ol>
    <?php endif; ?>
    <?php comment_form(); ?>
</div>
