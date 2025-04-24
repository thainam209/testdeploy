<?php

/**
 * Title: Hero
 * Slug: infinix/hero
 * Categories: infinix
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|90"},"margin":{"bottom":"0"}}},"className":"wp-section-block wp-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-section-block wp-hero" style="margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"wp-section-container-block","layout":{"type":"constrained","contentSize":"","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide wp-section-container-block"><!-- wp:group {"align":"wide","className":"wp-section-content-block","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide wp-section-content-block"><!-- wp:media-text {"mediaId":1935,"mediaLink":"#","mediaType":"image","mediaWidth":45} -->
			<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:45% auto">
				<figure class="wp-block-media-text__media"><img src="<?php echo get_parent_theme_file_uri('/assets/images/hero-content.jpg'); ?>" alt="" class="wp-image-1935 size-full" /></figure>
				<div class="wp-block-media-text__content"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
					<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"15px"}}},"fontSize":"normal"} -->
						<p class="has-text-align-left has-normal-font-size" style="margin-bottom:15px"><?php esc_html_e('Hero Content', 'infinix') ?></p>
						<!-- /wp:paragraph --><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"huge"} -->
						<h2 class="wp-block-heading has-text-align-left has-huge-font-size" style="margin-top:0"><?php esc_html_e('Important points to know in collagen induction therapy.', 'infinix') ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
						<p class="has-text-align-left has-medium-font-size"><?php esc_html_e('Hero sections are designed to be large and attention-grabbing. With the right plugins and themes, you can create large hero sections that get attention. There are even specific templates for this type of design.', 'infinix') ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><?php esc_html_e('However, if you don’t want to use a plugin, and you’re happy with the theme you have already, you can easily simulate the hero section with your own hero block right in your Gutenberg editor.', 'infinix') ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
						<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
							<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get Started', 'infinix') ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
