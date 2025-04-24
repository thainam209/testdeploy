<?php

/**
 * Title: Hidden 404
 * Slug: infinix-shop/hidden-404
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"7px","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide","fontSize":"xxx-large"} -->
		<h1 class="alignwide has-text-align-center has-xxx-large-font-size"><?php echo esc_html_x('404 Nothing Foun', 'Error code for a webpage that is not found.', 'infinix-shop'); ?>d</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html_x('Oops! That page can not be found. Maybe try a search?', 'Message to convey that a webpage could not be found', 'infinix-shop'); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"5px"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="margin-top:5px"><!-- wp:search {"label":"<?php echo esc_html_x('Search', 'label', 'infinix-shop'); ?>","placeholder":"<?php echo esc_attr_x('Search a keyword..', 'placeholder for search field', 'infinix-shop'); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_html_e('Search', 'infinix-shop'); ?>","buttonUseIcon":true,"align":"center"} /--></div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
