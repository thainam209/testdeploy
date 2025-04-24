<?php

/**
 * Title: Recent Posts
 * Slug: infinix/recent-posts
 * Categories: infinix
 *
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"bottom":"28px"},"blockGap":"7px"}},"className":"wp-section-header-block","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide wp-section-header-block" style="margin-bottom:28px;padding-top:0;padding-bottom:0"><!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
        <p class="has-text-align-left has-normal-font-size"><?php esc_html_e('Latest articles', 'infinix') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
            <h2 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:400"><?php esc_html_e('From the blog', 'infinix') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"secondary","layout":{"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group alignwide has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group"><!-- wp:post-terms {"term":"category","fontSize":"tiny"} /-->

                    <!-- wp:post-terms {"term":"post_tag","fontSize":"tiny"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-title {"isLink":true} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:post-author {"avatarSize":24,"fontSize":"tiny"} /-->

                    <!-- wp:post-date {"format":"M j, Y","isLink":true,"style":{"typography":{"textDecoration":"none"}},"fontSize":"tiny"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"max(15vw, 30vh)","align":"wide"} /-->

            <!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:post-excerpt /-->

                <!-- wp:read-more {"content":"Continue Reading","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-pagination {"paginationArrow":"chevron","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-previous {"label":"Newer Posts","className":"btn-style-one"} /-->

        <!-- wp:query-pagination-numbers /-->

        <!-- wp:query-pagination-next {"label":"Older Posts","className":"btn-style-one"} /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:query -->
</main>
<!-- /wp:group -->
