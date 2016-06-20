<?php
/**
 * This template is for displaying single pages.
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

		
		<!-- Else display the default feature image. -->

		<?php if ( !has_post_thumbnail() && !is_page() ):?>
			<?php if(get_theme_mod("default_feature_image")): ?>

				<img src="<?php echo get_theme_mod("default_feature_image");?>" alt="Image" class="img-responsive">

			<?php else: ?>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/4-5.jpg" alt="Image" class="img-responsive">
			<?php endif; ?>
		<?php endif; ?>


		<!-- Display the title and content. -->
		<div class="tm-box-description">
			<a href="<?php the_permalink() ?>"><h2 class="page-title"><?php the_title(); ?></h2></a>
			<p class="tm-box-p"><?php the_content(); ?></p>  
		</div>                        
	</div>                    
</div>