<?php

/**
 * Title: Product Categories
 * Slug: infinix-shop/product-categories
 * Categories: infinix-shop
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"className":"has-global-padding wp-section-block wp-product-categories","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-global-padding wp-section-block wp-product-categories" style="padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"wp-section-container-block","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide wp-section-container-block">

		<!-- wp:group {"style":{"spacing":{"blockGap":"14px","margin":{"bottom":"var:preset|spacing|40"}}},"className":"wp-section-header-block","layout":{"type":"constrained"}} -->
		<div class="wp-block-group wp-section-header-block" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"animate-block"} -->
			<h2 class="has-text-align-center animate-block" style="font-style:normal;font-weight:400"><?php esc_html_e('Product Categories.', 'infinix-shop'); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
			<p class="has-text-align-center has-small-font-size"><?php esc_html_e('Discover how our WordPress themes and plugins help you create', 'infinix-shop'); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"wp-section-content-block","layout":{"type":"default"},"fontSize":"small"} -->
		<div class="wp-block-group alignwide wp-section-content-block has-small-font-size"><!-- wp:woocommerce/product-categories {"hasImage":true,"isHierarchical":false,"className":"wp-section-product-categories"} /--></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
