<hr /><hr /><hr />
<?php 
////////////////////////////////////////////
//global $product;
global $woocommerce, $product, $post;
// echo $product->get_dimensions(). '&nbsp;&nbsp;|&nbsp;&nbsp;'; 

$price = get_post_meta($post->ID, '_price', true);
$width = get_post_meta($post->ID, '_width', true);
$height = get_post_meta($post->ID, '_height', true);
// check if the custum field has a value
echo '<div class="sans">';
if($price != '') {
  echo 'US $' . $price . '<br />';
} 
if($width != '') {
  echo $width . ' x ';
} 
if($height != '') {
  echo $height . ' | ';
} 

$page_count = get_field('sm_book_page_count');   
	if ( $page_count ) {
		echo $page_count . ' pp';
		}
//ISBN

echo '<br />ISBN: ' . $product->get_sku(); ?>

</div>
<?php  

//$attributes = (array) maybe_unserialize(get_post_meta($product_id, '_product_attributes', true));
//echo $attributes;
   // echo   do_shortcode('[add_to_cart id="56" sku="9781934137536"]');
    ?>
    
    <script type="text/javascript">
        var product_variations_<?php echo $post->ID; ?> = <?php echo json_encode( $available_variations ) ?>;
    </script>
    
<?php  //get_template_part('/woocommerce/single-product/tabs/attributes');    ?>    		



<?php
/**
 * Attributes tab
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

global $woocommerce, $post, $product;

$show_attr = ( get_option( 'woocommerce_enable_dimension_product_attributes' ) == 'yes' ? true : false );

if ( $product->has_attributes() || ( $show_attr && $product->has_dimensions() ) || ( $show_attr && $product->has_weight() ) ) {
	?>

		<?php $product->list_attributes(); ?>

	<?php
}
?>