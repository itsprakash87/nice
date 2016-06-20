<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element.
 *
 * @package WordPress
 * @subpackage Nice
 */
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php wp_title(); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

    <?php wp_head();?>
</head>


<body <?php body_class(); ?> class="no-js">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>   
			
			<!-- Display Menus -->
			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class' => 'nav navbar-nav',
				'container_class' => 'single-page-nav sticky-wrapper' 
				)); 
			?>
		</div>
	</nav> <!-- End of navigation -->

	<div id="section1">
		<header id="header-area" class="intro-section" style="background: url('<?php header_image(); ?>') no-repeat scroll 0% 0% / cover;">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="header-content">
							<!-- Display Logo -->
							<a href="<?php the_permalink() ?>"><?php the_custom_logo(); ?></a>

							<!-- Display Title and slogan -->
							<h1 style="color:#<?php echo get_theme_mod("header_textcolor");?>;"><?php bloginfo( 'name' ); ?></h1>
							<h4><?php bloginfo( 'description' ); ?></h4>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div><!-- End of header -->