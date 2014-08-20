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
	<?php foreach( $related_statuss as $related_status ): setup_postdata($related_status); $count++;?>
<div class="format-status post img-circle">
<?php  //var_dump($related_status);    ?>	
		<?php if ( has_post_format( 'status',  $related_status->ID ) ) { 
		the_content($related_status->ID ); ?>
		
		

<!-- AddThis Button BEGIN -->
<!--<div class="addthis_toolbox addthis_default_style" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=sonnetmedia"></script>-->
<!-- AddThis Button END -->




		<?php }
		 ?>
</div>		 				


	<?php endforeach; ?>
<?php endif; wp_reset_query(); ?>