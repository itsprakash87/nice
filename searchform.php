<?php
/**
 * The template to display search bar.
 *
 *
 * @package WordPress
 * @subpackage Nice
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
	<div class="form-group">
		<div class="input-group">
			<input class="form-control" type="search" placeholder="Type the keywords" value="<?php echo esc_html(get_search_query()); ?>" name="s" title="Search for" />
			<span class="input-group-btn">
				<input type="submit" class="btn btn-primary" value="Search" />
			</span>
		</div>
	</div>
</form>
