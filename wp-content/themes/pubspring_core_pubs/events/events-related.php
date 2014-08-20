<?php global $post;

$count = 0;
$related_events = tribe_get_events(
	array(
		'eventDisplay'=>'upcoming',
	'post_status' => 'publish', 
	'posts_per_page' => -1, 
	'orderby' => 'date',
	
	'meta_query' => array(
		array(
			'key' => 'related_author_or_book',
			'value' => '"' . get_the_ID() . '"',
			'compare' => 'LIKE'
				)
			)
		)
	); ?>

<?php if( $related_events ): ?>
	<?php foreach( $related_events as $post ): setup_postdata($post);$count++; ?>
	
	<?php if ( $count = 1   ){ ?>
		<h4>Upcoming Events</h4>
	
	<?php } ?>
	
	
	<div class="">
	<?php  //var_dump($related_aside);   
		//NNED TO ADD IN HEADER IF COUNT = 1 + EVENT DATE
	
	 ?>	
	
	
	
	<ul>
			<li><a href="<?php echo get_permalink( $post->ID ); ?>">
									<?php echo tribe_get_start_date($post->ID, false, 'F jS'); ?> - <?php echo get_the_title( $post->ID ); ?>
			</a>
			</li>
			</ul>
	</div>		 				
	<?php endforeach; ?>
<?php endif; wp_reset_query();?>