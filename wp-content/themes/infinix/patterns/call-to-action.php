<?php

/**
 * Title: Call To Action
 * Slug: infinix/call-to-action
 * Categories: infinix
 * Keywords: Call to action
 * Block Types: core/buttons
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80"}}},"className":"has-global-padding wp-section-block wp-call-to-action","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-global-padding wp-section-block wp-call-to-action" style="padding-top:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","className":"wp-section-container-block","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide wp-section-container-block"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"className":"wp-section-content-block","layout":{"type":"default"},"fontSize":"small"} -->
		<div class="wp-block-group alignfull wp-section-content-block has-small-font-size"><!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri('/assets/images/call-to-action.jpg'); ?>","dimRatio":30,"style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--30)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri('/assets/images/call-to-action.jpg'); ?>" data-object-fit="cover" />
				<div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"15px"}}},"fontSize":"normal"} -->
						<p class="has-text-align-center has-normal-font-size" style="margin-bottom:15px"><?php esc_html_e('Promotion Headline', 'infinix') ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"huge"} -->
						<h2 class="wp-block-heading has-text-align-center has-huge-font-size" style="margin-top:0"><?php esc_html_e('Build innovative layouts in Gutenberg with infinix', 'infinix') ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
						<p class="has-text-align-center has-medium-font-size"><?php esc_html_e('Multipurpose WordPress themes are designed to be all things to all people', 'infinix') ?>.</p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
						<div class="wp-block-buttons"><!-- wp:button {"className":"btn-style-one btn-style-one-outline is-style-fill"} -->
							<div class="wp-block-button btn-style-one btn-style-one-outline is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get Started', 'infinix') ?></a></div>
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
