<?php
/**
 * Attributes tab
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

global $product;

$show_attr = ( get_option( 'woocommerce_enable_dimension_product_attributes' ) == 'yes' ? true : false );
$excerpt = get_field('sm_book_excerpt');
if ($excerpt) { 

	?>
	<li class="attributes_tab"><a href="#tab-attributes"><?php //echo apply_filters('woocommerce_product_additional_information_tab_title', __('Excerpt', 'woocommerce')); ?>Excerpt</a></li>
   
	<?php
}
?>


