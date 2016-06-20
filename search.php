<?php
/**
 * The template for displaying all search results.
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

			<div class="col-lg-12"><?php get_search_form(); ?></div>
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();


				get_template_part( 'content','search');
				
				endwhile;
				
				
			// End the loop.
			?>
			<div class="col-sm-12">
                <!-- Display the pagination. -->
                <?php the_posts_pagination();?>
            </div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

<?php else : ?>
    
    <?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>


<?php get_footer(); ?>
