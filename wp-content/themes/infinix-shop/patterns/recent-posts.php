<?php

/**
 * Title: Recent Posts
 * Slug: infinix-shop/recent-posts
 * Categories: infinix-shop
 *
 */
?>

<!-- wp:group {"tagName":"div","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);;padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">
    <!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"xxx-large"} -->
    <h1 class="has-text-align-center has-xxx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40)">
        <?php esc_html_e('From the blog.', 'infinix-shop'); ?></h1>
    <!-- /wp:heading -->
    <!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"secondary","layout":{"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group alignwide has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:post-terms {"term":"category","fontSize":"tiny"} /-->

                    <!-- wp:post-terms {"term":"post_tag","fontSize":"tiny"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-title {"isLink":true} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:post-author {"avatarSize":24,"fontSize":"tiny"} /-->

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

        <!-- wp:query-pagination-next {"label":"Older Posts","className":"btn-style-one"} /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:query -->
</main>
<!-- /wp:group -->
