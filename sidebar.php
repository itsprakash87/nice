<?php
/**
 * The template file to display sidebar.
 *ult template which loads when nothing more specific matches a query.
 *
 *
 * @package WordPress
 * @subpackage Nice
 */
?>

<div>
	<div class="col-sm-4">
		<aside class="sidebar right third">
			<?php if ( is_active_sidebar( 'sidebar-widget-area' ) ) : ?>
				<div class="bdr grd-vt-main rnd shdw-centered">
					<?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
				</div>
			<?php endif; ?>
		</aside>
										
	</div>
</div>