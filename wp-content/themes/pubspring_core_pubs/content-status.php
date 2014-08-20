<?php $args = array( 
		'posts_per_page' => 5,
		'tax_query' => array(
			array(
				'taxonomy' => 'post_format',
				'field' => 'slug',
				'terms' => array('post-format-status'),
				)
			),
			);
	$query = new WP_Query( $args ); 
?>
<?php if ( $query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

<div class="format-status post">
	<?php 	the_content();  ?>
	<ul class="post_list inline status">
			<?php do_action('pubspring_post_related'); ?>	
			</ul>
</div>


<?php endwhile; endif;// End the loop ?>