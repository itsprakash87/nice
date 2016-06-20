<?php
/**
 * This template is for displaying contents.
 *
 *
 * @package WordPress
 * @subpackage Nice
 */
?>

<div class="col-lg-12">
	<div class="tm-box">
		
		<!-- Display the featured image if has one. -->

		<?php if ( has_post_thumbnail() ) :{
			the_post_thumbnail();
		} 
			endif;?>

		<!-- Else display the default featured image. -->

		<?php if ( !has_post_thumbnail() ):?>
			<?php if(get_theme_mod("default_feature_image")): ?>

				<img src="<?php echo get_theme_mod("default_feature_image");?>" alt="Image" class="img-responsive">

			<?php else: ?>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/4-5.jpg" alt="Image" class="img-responsive">
			<?php endif; ?>
		<?php endif; ?>


		<!-- Display the title and content. -->
		<div class="tm-box-description">
			<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>

			<div class="post-meta"><p> <strong><?php _e('Published on','nice') ?> : <?php the_time( get_option( 'date_format' ) ); ?> by <?php the_author_posts_link(); ?></strong></p></div>

			
			<p class="tm-box-p"><?php the_content(); ?></p>  

			<?php if ( (is_front_page() && is_home()) || is_archive() ) : ?>
				<a href="<?php the_permalink() ?>" class="content-link"><?php _e('Read More','nice') ?></a> 
			<?php endif; ?>
		</div>                        
	</div>                    
</div>
							