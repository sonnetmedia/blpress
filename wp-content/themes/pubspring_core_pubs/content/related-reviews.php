<div class="hidden-phone">
<?php
$related_reviews = get_posts( array( 
	'post_type' => 'sm_reviews',	
	'posts_per_page' => -1, 
	'orderby' => 'date',
	'order' => 'asc',
	'meta_query' => array(
		array(
			'key' => 'related_author_or_book',
			'value' => '"' . get_the_ID() . '"',
			'compare' => 'LIKE'
				)
			)
		)
	); 
	$count = 0;
	?>

<?php if( $related_reviews ): ?>
 
	<?php foreach( $related_reviews as $post ): setup_postdata($post); $count++;?>	
	
		<?php if ( $count == 2   ){echo '<a class="badge show_hidden pull-right" style="margin-top:-50px;" href="javascript:void(0)">
		<span class="show_text">see more reviews</span>
		<span class="hidden_stuff">hide reviews</span>		
		</a>
		
		';}?>	
<div <?php if ( $count > 1   ){echo 'class="hidden_stuff"';}?>>
		<?php //get_template_part( 'content-snippets/product-related_reviews' ); ?>
				<?php get_template_part( 'content','reviews' ); ?>
	</div>	
	<?php endforeach; ?>
<?php  wp_reset_query();?>
<?php endif; ?>
</div>