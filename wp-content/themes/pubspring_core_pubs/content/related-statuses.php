<?php
//		global $wp_query;
$related_statuss = get_posts(	array( 
	'post_type' => 'post',	
	'post_status' => 'publish', 
	'posts_per_page' => -1, 
	'orderby' => 'date',
	
	'tax_query' => array(
	    array(
	      'taxonomy' => 'post_format',
	      'field' => 'slug',
	      'terms' => 'post-format-status'
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

<?php if( $related_statuss ): ?>
	<?php foreach( $related_statuss as $related_status ): setup_postdata($related_status); 
	?>
<div class="format-status post img-circle">
<?php  //var_dump($related_status);    ?>	
		<?php if ( has_post_format( 'status',  $related_status->ID ) ) { 
		the_content($related_status->ID ); ?>
		
		

		<?php }
		 ?>
</div>		 				


	<?php endforeach; ?>
<?php endif; wp_reset_query(); ?>