<?php
/**
 * The template for displaying 404 pages (not found)
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
							<a href="<?php the_permalink() ?>"><h2><?php _e('Oops! That page cannot be found','nice') ?></h2></a>

							<p class="tm-box-p"><?php _e('It looks like nothing was found at this location. Maybe try a search?','nice') ?></p>  
							
							<?php get_search_form(); ?>
						</div>                        
					</div>                    
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

<?php get_footer(); ?>