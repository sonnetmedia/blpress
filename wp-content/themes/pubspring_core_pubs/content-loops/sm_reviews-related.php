<div class="sm_reviews-related">
<?php
$related_reviews = get_posts( array( 
	'post_type' => 'sm_reviews',	
	'posts_per_page' => 1, 
	'orderby' => 'date',
	'meta_query' => array(
		array(
			'key' => 'related_author_or_book',
			'value' => '"' . get_the_ID() . '"',
			'compare' => 'LIKE'
				)
			)
		)
	); 
	?>
<?php if( $related_reviews ): ?>
	<?php foreach( $related_reviews as $post ): setup_postdata($post); ?>		
		<?php get_template_part( '/content-formats/sm_reviews' ); ?>
	<?php endforeach; ?>
<?php  wp_reset_query();?>
<?php endif; ?>
</div>