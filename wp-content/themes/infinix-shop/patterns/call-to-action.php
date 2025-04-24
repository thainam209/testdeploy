<?php

/**
 * Title: Call To Action
 * Slug: infinix-shop/call-to-action
 * Categories: infinix-shop
 * Keywords: Call to action
 * Block Types: core/buttons
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"className":"has-global-padding wp-section-block wp-call-to-action","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-global-padding wp-section-block wp-call-to-action" style="padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"full","className":"wp-section-container-block","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull wp-section-container-block"><!-- wp:group {"align":"full","style":{"typography":"spacing":{"blockGap":"0px"}},"className":"wp-section-content-block","layout":{"type":"default"},"fontSize":"small"} -->
		<div class="wp-block-group alignfull wp-section-content-block has-small-font-size"><!-- wp:cover {"url":"<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cta.jpg","dimRatio":30,"style":{"spacing":{"padding":{"top":"var:preset|spacing|110","bottom":"var:preset|spacing|110","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--110);padding-bottom:var(--wp--preset--spacing--110);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cta.jpg" data-object-fit="cover" />
				<div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
						<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
							<p class="has-text-align-center has-x-large-font-size"><?php esc_html_e('Extra', 'infinix-shop'); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"textColor":"primary","fontSize":"xxx-large"} -->
							<p class="has-primary-color has-text-color has-xxx-large-font-size"><?php esc_html_e('30%', 'infinix-shop'); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"fontSize":"x-large"} -->
							<p class="has-x-large-font-size"><?php esc_html_e('off online', 'infinix-shop'); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0"}}}} -->
						<h2 class="has-text-align-center" style="margin-top:0"><?php esc_html_e('Summer Season Sale.', 'infinix-shop'); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
						<p class="has-text-align-center has-medium-font-size"><?php esc_html_e('Free shipping on orders over 99$', 'infinix-shop'); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
						<div class="wp-block-buttons"><!-- wp:button -->
							<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Shop Now', 'infinix-shop'); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
