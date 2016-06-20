<?php
/**
 * This template is for displaying single posts.
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
			<div class="post-meta"><p> <strong><?php _e('Published on','nice') ?> : <?php the_time( get_option( 'date_format' ) ); ?> by <?php the_author_posts_link(); ?></strong></p></div>

			<p class="tm-box-p"><?php the_content(); ?></p><br />

			<?php
			wp_link_pages( array(
				'before'	  => '<ul class="pager">',
				'after'	   => '</ul>',
				'link_before' => '<li><span>',
				'link_after'  => '</span></li>',
			) );
			?>

			<?php if(!has_category('Uncategorized')):?>
			<div class="post-meta"><p> <strong><?php _e('Categories','nice') ?> : <?php the_category(', '); ?></strong></p></div>
			<?php endif; ?>
			<?php the_tags( '<span class="tags-links">', ', ', '<span>' ); ?>
		</div>                        
	</div>                    
</div>