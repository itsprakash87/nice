<?php
/**
 * The archive file
 *
 *
 * @package WordPress
 * @subpackage Nice
 */
?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>
   
            <!-- Start the loop and display the archive post. -->

            <?php while ( have_posts() ) : the_post(); ?>
             <section id="testimornial-area">
        		<div class="container">

	                <div class="row">

	                    <?php get_template_part( 'content');?>
				
	                </div>
	            </div>
		    </section>

	        <?php endwhile; ?>
	        <section id="testimornial-area">
        		<div class="container">
					<div class="row">
			            <div class="col-sm-12">
				            <!-- Display the pagination. -->
				            <?php the_posts_pagination();?>
				        </div>
				    </div>
		        </div>
		    </section>

	<?php else: ?>
	<!-- If nothing was found...... -->
	<?php  get_template_part( 'content', 'none' ); ?> 

	<?php endif; ?>

<?php get_footer();?>
