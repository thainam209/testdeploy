<?php

/**
 * Title: Sidebar Products
 * Slug: infinix-shop/sidebar-products
 * Categories: infinix-shop
 */
?>

<!-- wp:group -->
<div class="wp-block-group">

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","right":"28px","bottom":"28px","left":"28px"}}},"backgroundColor":"secondary-alt","className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget has-secondary-alt-background-color has-background" style="padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"fontSize":"medium"} -->
        <h2 class="has-medium-font-size" id="categories" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Categories', 'infinix-shop'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:woocommerce/product-categories {"hasImage":true,"isHierarchical":false,"fontSize":"small"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","right":"28px","bottom":"28px","left":"28px"}}},"backgroundColor":"secondary-alt"} -->
    <div class="wp-block-group has-secondary-alt-background-color has-background" style="padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"fontSize":"medium"} -->
        <h2 class="has-medium-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">Filter by rating</h2>
        <!-- /wp:heading -->

        <!-- wp:woocommerce/filter-wrapper {"filterType":"rating-filter","heading":"Filter by rating"} -->
        <div class="wp-block-woocommerce-filter-wrapper"><!-- wp:woocommerce/rating-filter {"showCounts":false,"lock":{"remove":true}} -->
            <div class="wp-block-woocommerce-rating-filter is-loading" data-show-counts="false"><span aria-hidden="true" class="wc-block-product-rating-filter__placeholder"></span></div>
            <!-- /wp:woocommerce/rating-filter -->
        </div>
        <!-- /wp:woocommerce/filter-wrapper -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","right":"28px","bottom":"28px","left":"28px"}}},"backgroundColor":"secondary-alt","className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget has-secondary-alt-background-color has-background" style="padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"fontSize":"medium"} -->
        <h2 class="has-medium-font-size" id="categories" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('filter by price', 'infinix-shop'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
        <div class="wp-block-woocommerce-filter-wrapper"><!-- wp:woocommerce/price-filter {"heading":""} -->
            <div class="wp-block-woocommerce-price-filter is-loading" data-showinputfields="true" data-showfilterbutton="false" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
            <!-- /wp:woocommerce/price-filter -->
        </div>
        <!-- /wp:woocommerce/filter-wrapper -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","right":"28px","bottom":"28px","left":"28px"}}},"backgroundColor":"secondary-alt","className":"wp-block-widget  wp-filter-by-size","fontSize":"small"} -->
    <div class="wp-block-group wp-block-widget wp-filter-by-size has-secondary-alt-background-color has-background has-small-font-size" style="padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"fontSize":"medium"} -->
        <h2 class="has-medium-font-size" id="categories" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('filter by size', 'infinix-shop'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by size"} -->
        <div class="wp-block-woocommerce-filter-wrapper"><!-- wp:woocommerce/attribute-filter {"attributeId":2,"heading":""} -->
            <div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="2" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span></div>
            <!-- /wp:woocommerce/attribute-filter -->
        </div>
        <!-- /wp:woocommerce/filter-wrapper -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","right":"28px","bottom":"28px","left":"28px"}}},"backgroundColor":"secondary-alt","className":"wp-block-widget wp-filter-by-color","fontSize":"small"} -->
    <div class="wp-block-group wp-block-widget wp-filter-by-color has-secondary-alt-background-color has-background has-small-font-size" style="padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"fontSize":"medium"} -->
        <h2 class="has-medium-font-size" id="categories" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('filter by color', 'infinix-shop'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by Color"} -->
        <div class="wp-block-woocommerce-filter-wrapper"><!-- wp:woocommerce/attribute-filter {"attributeId":1,"selectType":"single","heading":""} -->
            <div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="1" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3" data-select-type="single"><span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span></div>
            <!-- /wp:woocommerce/attribute-filter -->
        </div>
        <!-- /wp:woocommerce/filter-wrapper -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
