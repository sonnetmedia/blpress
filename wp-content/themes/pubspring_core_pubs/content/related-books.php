<?php
/**
 * Related Products
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 * BPNY Revised 121023
 */

global $product, $woocommerce_loop;

$related = $product->get_related();

if ( sizeof($related) == 0 ) return;

$args = apply_filters('woocommerce_related_products_args', array(
	'post_type'				=> 'product',
	'ignore_sticky_posts'	=> 1,
	'no_found_rows' 		=> 1,
	'posts_per_page' 		=> $posts_per_page,
	'orderby' 				=> 'date',
	'post__in' 				=> $related
) );

$products = new WP_Query( $args );

//$woocommerce_loop['columns'] 	= $columns;

if ( $products->have_posts() ) : ?>

	<div class="related products">

		<h2><?php echo 'Also Recommended'; //_e('Related Products', 'woocommerce'); ?></h2>

		<ul class="products">

			<?php while ( $products->have_posts() ) : $products->the_post(); ?>
				
				<?php //woocommerce_get_template_part( 'content', 'books_list' ); ?>
				<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>">
					<?php 	the_post_thumbnail('category-thumb', array('class' => 'image-shadow flow_left')); ?>
						</a>
				<?php } ?>
				

			<?php endwhile; // end of the loop. ?>

		</ul>

	</div>

<?php endif;

wp_reset_postdata();
