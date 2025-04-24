<?php

/**
 * Title: Featured Articles
 * Slug: infinix-shop/featured-articles
 * Categories: infinix-shop
 * Keywords: Featured Articles
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"has-global-padding wp-section-block wp-call-to-action","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-global-padding wp-section-block wp-call-to-action" style="padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"wp-section-container-block","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide wp-section-container-block"><!-- wp:group {"style":{"spacing":{"blockGap":"14px","margin":{"bottom":"var:preset|spacing|40"}}},"className":"wp-section-header-block","layout":{"type":"constrained"}} -->
		<div class="wp-block-group wp-section-header-block" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"animate-block"} -->
			<h2 class="has-text-align-center animate-block" style="font-style:normal;font-weight:400"><?php esc_html_e('Featured Articles.', 'infinix-shop'); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"wp-section-content-block","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide wp-section-content-block"><!-- wp:query {"queryId":18,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"type":"default"}} -->
			<div class="wp-block-query alignwide"><!-- wp:post-template -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"base","className":"blog-post-style-one has-shadow","layout":{"type":"constrained"}} -->
				<div class="wp-block-group blog-post-style-one has-shadow has-base-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"blog-post-style-one-figure","layout":{"type":"constrained"}} -->
					<div class="wp-block-group blog-post-style-one-figure"><!-- wp:post-featured-image {"isLink":true} /-->

						<!-- wp:post-date {"format":"M j","isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textDecoration":"none"}},"backgroundColor":"base","fontSize":"x-small"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"medium"} /-->

						<!-- wp:post-excerpt {"fontSize":"small"} /-->

						<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
						<div class="wp-block-group"><!-- wp:read-more {"content":"read more","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"read-more-style-one","fontSize":"small"} /--></div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
