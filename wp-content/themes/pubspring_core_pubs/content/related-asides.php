<?php
//		global $wp_query;
$related_asides = get_posts(	array( 
	'post_type' => 'post',	
	'post_status' => 'publish', 
	'posts_per_page' => -1, 
	'orderby' => 'date',
	
	'tax_query' => array(
	    array(
	      'taxonomy' => 'post_format',
	      'field' => 'slug',
	      'terms' => 'post-format-aside'
	    )
	  ),
	
	
	'meta_query' => array(
		array(
			'key' => 'related_author_or_book',
			'value' => '"' . get_the_ID() . '"',
			'compare' => 'LIKE'
				)
			)
		)
	); ?>

<?php if( $related_asides ): ?>
	<?php foreach( $related_asides as $related_aside ): setup_postdata($related_aside); $count++;?>
<div class="format-aside post img-circle">
<?php  //var_dump($related_aside);    ?>	
		<a href="<?php echo get_permalink( $related_aside->ID ); ?>">
			<h3><?php echo get_the_title( $related_aside->ID ); ?></h3>
		</a>
		<?php if ( has_post_format( 'aside',  $related_aside->ID ) ) { 
		the_content($related_aside->ID ); }
		 ?>
</div>		 				


	<?php endforeach; ?>
<?php endif; wp_reset_query(); ?>