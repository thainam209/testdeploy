<?php

/**
 * Title: Default Footer
 * Slug: infinix/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"border":{"top":{"width":"1px","color":"var:preset|color|border"},"right":{"color":"var:preset|color|border"},"bottom":{"color":"var:preset|color|border"},"left":{"color":"var:preset|color|border"}}},"backgroundColor":"secondary-alt","className":"footer site-generator","layout":{"type":"constrained"}} -->
<div class="wp-block-group footer site-generator has-secondary-alt-background-color has-background" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-color:var(--wp--preset--color--border);border-bottom-color:var(--wp--preset--color--border);border-left-color:var(--wp--preset--color--border)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"28px","bottom":"28px"}}},"layout":{"type":"flex","justifyContent":"center","orientation":"vertical"}} -->
	<div class="wp-block-group alignwide" style="padding-top:28px;padding-bottom:28px">
		<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","iconBackgroundColor":{"color":"#999999","name":"Meta","slug":"meta","class":"has-meta-icon-background-color"},"iconBackgroundColorValue":"#999999","style":{"spacing":{"blockGap":{"top":"14px","left":"14px"}}},"className":"is-style-default"} -->
		<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"wordpress"} /-->
		</ul>
		<!-- /wp:social-links -->

		<!-- wp:group {"className":"site-info","layout":{"type":"constrained"}} -->
		<div class="wp-block-group site-info"><!-- wp:paragraph {"textColor":"tertiary","fontSize":"small"} -->
			<p class="has-tertiary-color has-text-color has-small-font-size"><?php printf(
																					_x('Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'infinix'),
																					esc_attr(date_i18n(__('Y', 'infinix'))),
																					'<a href="' . esc_url(home_url('/')) . '">' . esc_attr(get_bloginfo('name', 'display')) . '</a><span class="sep"> </span>'
																				); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
