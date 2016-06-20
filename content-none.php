<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package WordPress
 * @subpackage Nice
 */
?>

<?php get_header(); ?>

	<section id="testimornial-area">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<div class="tm-box">

						<!-- Display the title and content. -->
						<div class="tm-box-description">
							<a href="<?php the_permalink() ?>"><h2><?php _e('Nothing Found','nice') ?></h2></a>

							<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

								<p class="tm-box-p"><?php _e('No Post was found.','nice') ?></p>

							<?php elseif ( is_search() ) : ?>

							   <p class="tm-box-p"><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.','nice') ?></p>
								<?php get_search_form(); ?>

							<?php else : ?>

								<p class="tm-box-p"><?php _e('It seems we cannot find what you are looking for. Perhaps searching can help.','nice') ?></p>
								<?php get_search_form(); ?>

							<?php endif; ?>
							
						</div>                        
					</div>                    
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

<?php get_footer(); ?>