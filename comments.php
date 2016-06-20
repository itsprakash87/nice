<?php
/**
 * The template for displaying comments.
 *
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
?>

<?php 
if ( post_password_required() ) {
	return;
}
?>

<section id="comments">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="comments" class="comments">

					<?php if ( have_comments() ) : ?>
						<h2 class="comments-title">
							<?php
								if(get_comments_number() == 1):
									echo "One thought on ".get_the_title()."";

								else:
									echo "".get_comments_number()." thoughts on ".get_the_title()."";

								endif;
							?>
						</h2>

						<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
						<nav id="comment-nav-above" class="navigation comment-navigation">
							<h2 class="screen-reader-text"><?php __('Comment navigation','nice') ?></h2>
							<div class="nav-links">
								<div class="nav-next"><?php next_comments_link( __(' Newer Comments','nice')); ?></div>
							</div>
						</nav>
						<?php endif; ?>

						<ol class="comment-list">
							<?php
								wp_list_comments( array(
									'style'	   => 'ol',
									'short_ping'  => true,
									'avatar_size' => 40
								) );
							?>
						</ol>

						<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
						<nav id="comment-nav-below" class="navigation comment-navigation">
							<h2 class="screen-reader-text"><?php __('Comment navigation','nice') ?></h2>
							<div class="nav-links">
								<div class="nav-previous"> <?php previous_comments_link(__(' Older Comments','nice')); ?></div>
							</div>
						</nav>
						<?php endif; ?>

					<?php endif; ?>

					<?php
						if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
					?>
						<p class="no-comments"><?php _e('Comments are closed.','nice') ?></p>
					<?php endif; ?>

					<?php 
						
						$fields =  array(
							'author' => '<p class="comment-form-author"><input class="form-control" id="author" name="author" type="text" placeholder="'.__('Your Name','nice').'" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"/></p>',
							'email' => '<p class="comment-form-email"><input class="form-control" id="email" name="email" type="text" placeholder="'.__('Your email','nice').'" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"/></p>',
							'url' => '<p class="comment-form-url"><input class="form-control" id="url" name="url" type="text" placeholder="'.__('Website','nice').'" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
						);

						$comment_args = array(
							'comment_field' =>  '<p class="comment-form-comment"><textarea class="form-control" id="comment" name="comment" cols="45" rows="8" placeholder="'.__('Your comment here ','nice').'" aria-required="true">' .
							'</textarea></p>',
							'fields' => apply_filters( 'comment_form_default_fields', $fields ),
						);
						
						comment_form($comment_args); 

					?>
				</div>
			</div>
		</div>
	</div>
</section>