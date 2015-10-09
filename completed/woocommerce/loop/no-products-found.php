<?php
/**
 * Displayed when no products are found matching the current query.
 *
 * Overide of template from woocommerce
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<h3>Sorry, we couldn't find anything matching your search.</h3>
<p>Why not try another search?</p>
<?php echo get_product_search_form(); ?>
<h3>Alternatively check out our departments:</h3>
<?php tutsplus_cat_image_links(); ?>
