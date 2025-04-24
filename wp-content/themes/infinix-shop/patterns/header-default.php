<?php

/**
 * Title: Header Default
 * Slug: infinix-shop/header-default
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:0px;padding-bottom:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"21px","top":"21px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-top:21px;padding-bottom:21px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:site-logo {"width":60,"shouldSyncIcon":true} /-->

				<!-- wp:site-title {"level":0} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","width":420,"widthUnit":"px","buttonText":"Search","buttonUseIcon":true,"query":{"post_type":"product"},"className":"wp-header-product-search"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"secondary","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"spacing":{"blockGap":"0px"}}} /-->

			<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","fontSize":"small"} /-->

			<!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","hasHiddenPrice":true,"fontSize":"x-small"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

