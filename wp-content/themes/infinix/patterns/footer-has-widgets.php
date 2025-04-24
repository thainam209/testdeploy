<?php

/**
 * Title: Footer Has Widgets
 * Slug: infinix/footer-has-widgets
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","right":"var:preset|spacing|50","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50"}}},"backgroundColor":"secondary-alt","className":"footer footer-widgets","layout":{"type":"constrained","wideSize":"1170px"}} -->
<div class="wp-block-group footer footer-widgets has-secondary-alt-background-color has-background" style="padding-top:28px;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0;padding-top:var(--wp--preset--spacing--80)"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"35px"}}} -->
			<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"18px"}}} -->
				<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
					<h2 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Company', 'infinix') ?></h2>
					<!-- /wp:heading -->

					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"12px"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"35px"}}} -->
			<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"18px"}}} -->
				<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
					<h2 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Popular themes', 'infinix') ?></h2>
					<!-- /wp:heading -->

					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"12px"}}} /-->
				</div>
				<!-- /wp:group -->


			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"35px"}}} -->
			<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"18px"}}} -->
				<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
					<h2 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Support', 'infinix') ?></h2>
					<!-- /wp:heading -->

					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"12px"}}} /-->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"35px"}}} -->
			<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"18px"}}} -->
				<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
					<h2 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('stay connected', 'infinix') ?></h2>
					<!-- /wp:heading -->

					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"tiny"} -->
						<p class="has-tiny-font-size"><?php esc_html_e('Subscribe to hear about coupon codes, important notices, new product announcement and more. No nonsense!', 'infinix') ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:mailchimp-for-wp/form {"id":1960} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
