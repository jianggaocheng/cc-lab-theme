<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package CC-Lab-Amaze
 */

// 防止恶意打开
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
	die ('Please do not load this page directly. Thanks!');
}

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3>
			<?php
				printf('有%1$s条评论', number_format_i18n(get_comments_number()));
			?>
		</h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'CC-Lab-Amaze' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'CC-Lab-Amaze' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'CC-Lab-Amaze' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ul class="am-comments-list">
			<?php
				wp_list_comments(array(
					'style'       => 'ol',
					'short_ping'  => true,
					'callback'    => 'cc_lab_amaze_comment',
				));
			?>
		</ul><!-- .comment-list -->

	<?php else: ?>
  <h2>亲，留下点评论吧:)</h2>
	<?php endif;  // have_comments() ?>
	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
  <h2><?php _e( '评论已关闭:(', 'CC-Lab-Amaze' ); ?></h2>
	<?php endif; ?>

	<?php comment_form(); ?>
</div><!-- .comments-area -->
