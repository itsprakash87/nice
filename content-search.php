<?php
/**
 * The template file to display search result.
 *
 *
 * @package WordPress
 * @subpackage Nice
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	 <section id="testimornial-area">
        <div class="container">

        	<div class="col-lg-12">
				<div class="tm-box">
					
					<!-- Display the featured image if has one. -->

					<?php if ( has_post_thumbnail() ) :{
						the_post_thumbnail();
					} 
						endif;?>


					<!-- Display the title and content. -->
					<div class="tm-box-description">
						<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
						<p class="tm-box-p"><?php the_excerpt(); ?></p>  

						<?php if ( is_search() ) : ?>
							<a href="<?php the_permalink() ?>" class="content-link"><?php __('Read More','nice') ?></a> 
						<?php endif; ?>
					</div>                        
				</div>                    
			</div>
		
		</div>
	</section>

	
</article><!-- search result -->