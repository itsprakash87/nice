<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 *
 * @package WordPress
 * @subpackage Nice
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<section id="testimornial-area">
		<div class="container">
			<div class="row">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/* Call the content-single to 
				*  display the single page. */

				get_template_part( 'content','page');

				
				// If comments are allowed or we have some comments, then load the comment template.
				
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			// End the loop.
			endwhile;
			?>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

<?php else : ?>
    
    <?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>


<?php get_footer(); ?>
