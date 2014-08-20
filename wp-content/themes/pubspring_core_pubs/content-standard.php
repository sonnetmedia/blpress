<?php
//	global $wp_query;
//	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//	$args = array( 
//		'posts_per_page' => 30,
//		'paged' => $paged,
//		'tax_query' => array(
//			array(
//				'taxonomy' => 'post_format',
//				'field' => 'slug',
//				'terms' => array('post-format-status'),
//				'operator' => 'NOT IN'
//				)
//			),
//			);
//	$query = new WP_Query( $args ); 
?>
<?php
$args = array(
  'tax_query' => array(
    array(
      'taxonomy' => 'post_format',
      'field' => 'slug',
      'terms' => 'post-format-status',
      'operator' => 'NOT IN'
    )
  )
);
query_posts( $args );
?>
		
		
		
<?php if ( have_posts()) : while (have_posts()) : the_post(); ?>
		<?php  get_template_part( 'format', 'standard' );    ?>
<?php endwhile; endif;// End the loop ?>
<?php if ($query->max_num_pages > 1) : ?>
		<?php  get_template_part( '/inc/pagination' );    ?>
<?php endif; ?>