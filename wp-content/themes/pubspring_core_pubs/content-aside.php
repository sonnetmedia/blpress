<?php $args = array( 
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'post_format',
				'field' => 'slug',
				'terms' => array('post-format-aside'),
				)
			),
			);
	$query = new WP_Query( $args ); 
?>
<?php if ( $query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

<div class="format-aside post">
	<?php 	the_content($aside->ID );  ?>
	<ul class="post_list inline">
		<li class="sans">related: </li>
			<?php do_action('pubspring_post_related'); ?>	
			</ul>
</div>


<?php endwhile; endif;// End the loop ?>