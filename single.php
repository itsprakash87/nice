<?php
/**
 * The template for displaying all single posts and attachments
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
				*  display the single post. */

				get_template_part( 'content','single');

				// If comments are allowed or we have some comments, then load the comment template.
				
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				// Previous/next post navigation.
				
				the_post_navigation( array(
					'next_text' => '<div class="prev-next-nav"><h4>'. __('Next','nice') .': <span class="post-title">%title</span></h4></div> ',
					'prev_text' => '<div class="prev-next-nav"><h4>'. __(' Previous','nice') .' : <span class="post-title">%title</span></h4></div> ',
				) );

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
