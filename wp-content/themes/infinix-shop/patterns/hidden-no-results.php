<?php

/**
 * Title: Hidden No Results Content
 * Slug: infinix-shop/hidden-no-results-content
 * Inserter: no
 */
?>

<!-- wp:paragraph -->
<p>
    <?php echo esc_html_x('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'infinix-shop'); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x('Search', 'label', 'infinix-shop'); ?>","placeholder":"<?php echo esc_attr_x('Search...', 'placeholder for search field', 'infinix-shop'); ?>","showLabel":false,"buttonText":"<?php esc_html_e('Search', 'infinix-shop'); ?>","buttonUseIcon":true} /-->
