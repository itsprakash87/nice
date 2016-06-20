<?php
/**
 * The main template file
 *
 * It is the dafault template which loads when nothing more specific matches a query.
 *
 *
 * @package WordPress
 * @subpackage Nice
 */
?>


<!-- Load the header template. -->

<?php get_header(); ?>
			

<?php if ( have_posts() ) : ?>
    <section id="testimornial-area">
        <div class="container">

            <!-- Start the loop and display the most recent post. -->

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="row">

                    <?php get_template_part( 'content',get_post_format());?>
                    
                </div>

                <?php break; ?>

            <?php endwhile; ?>

            <!-- Start the loop and display the remaining post. -->

        <?php if ( is_front_page() && is_home() ) : ?>
            <div class="row text-center later-post">
                <div class="col-sm-8">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-sm-6">
                        <div class="testimonial-content">
                            <?php if ( has_post_thumbnail() ) :{
                                the_post_thumbnail();
                            } 
                            endif;?>

                            <?php if ( !has_post_thumbnail() ):?>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/4-1.jpg" alt="Image">
                            <?php endif?>
                            
                            <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                            <div class="post-meta"><p> <strong><?php _e('Published on','nice') ?> : <?php the_time( get_option( 'date_format' ) ); ?> by <?php the_author_posts_link(); ?></strong></p></div>

                            <p><?php the_content(); ?></p>
                            <a href="<?php the_permalink() ?>" class="content-link"><?php _e('Read it','nice') ?></a>
                            <br>
                            <p id="redd"></p>
                        </div>
                    </div>

                    <?php endwhile; ?>
                    <div class="col-sm-12">
                        <!-- Display the pagination. -->
                        <?php the_posts_pagination();?>
                    </div>
                    
                </div>
                <?php get_sidebar();?>
            </div>
        <?php endif; ?>
        </div>
    </section>

<?php else : ?>
    <!-- If no post was there load content-none. -->

    <?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

<?php if ( is_front_page() && is_home() ) : ?>

    <!-- Load the remaining contents. -->
	<?php get_template_part( 'content', 'services' );?>
	<?php get_template_part( 'content', 'contact' );?>

<?php endif; ?>

<?php get_footer();?>
				

					

						