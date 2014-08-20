<?php  
// Create a new filtering function that will add our where clause to the query
function filter_where( $where = '' ) {
	// posts from X to Y days
	$where .= " AND post_date >= '" . date('Y-m-d', strtotime('0 days')) . "'" . " 
				AND post_date <= '" . date('Y-m-d', strtotime('210 days')) . "'";
	return $where;
}
add_filter( 'posts_where', 'filter_where' );
		$books_forthcoming_args = array( 
			'post_type' => 'product', 
			'posts_per_page' => 6, 
			'orderby' => 'date', 
			'order' => 'asc',
			'meta_key' => '_thumbnail_id',
			'post_status' => 'future' 
			) ; 
			
			$books_forthcoming = new WP_Query( $books_forthcoming_args );
			$forthcoming_count = $books_forthcoming->post_count;
			$books_remaining = 6 - $forthcoming_count; 
if ($books_remaining == '0') {
			$books_offset = 3000	;
		}
	else {
		$books_offset = 3	;	
	}
			
			?>
<aside>
<h3>Recent<?php if ($forthcoming_count > 0 ){ echo ' & Forthcoming'; } ?> Titles</h3>
 <?php if ( $books_forthcoming->have_posts() ) : 
	 $count = 0; 	
	?>
<?php while ( $books_forthcoming->have_posts() ) : $books_forthcoming->the_post();
$count++;
    ?>
    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>

    		<div class="span2 mb1" <?php if ( $count < 2   ){echo ' style="margin-left:0;"';}?>>
	    		<a href="<?php the_permalink(); ?>" class="image_link">
    				<?php the_post_thumbnail('category-small', array('class' => 'image-shadow')); ?>
<?php if($post->post_status == 'future') : ?>
<div class="sans small overlay"><?php the_time('M-Y') ?></div>
<?php endif; ?>

    			</a>
    			
    			
			</div>

    <?php  	} 		?>
    
    <?php //OVERLAY PUB DATES   ?>
    
<?php  endwhile; ?>


<?php endif;  wp_reset_postdata();
remove_filter( 'posts_where', 'filter_where' ); 
	
  ?>
  
  
<!--  PREVIOUSLY PUBLISHED BELOW, CALCULATED BY TOTAL SPACES LESS NUMBER OF FORTCHOMING    -->


<?php 
	$books_recent_args = array( 
	'post_type' => 'product', 
	'posts_per_page' => $books_remaining, 
	'offset' => $books_offset,
	'orderby' => 'date', 
	'order' => 'desc',
	     'meta_key' => '_thumbnail_id',
	'post_status' => 'publish'
	);
	
	$books_recent = new WP_Query( $books_recent_args );
	

	
if ( $books_recent->have_posts() ) : 
	 $count_new = 0; 
	while ( $books_recent->have_posts() ) : $books_recent->the_post();
$count_new++;
    
    
    
    ?>
    
    
    
    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>

    		<div class="span2 mb1" <?php if ( $books_remaining === 6 && $count_new < 2 ){echo ' style="margin-left:0;"';}?>>
	    		<a href="<?php the_permalink(); ?>">
    				<?php the_post_thumbnail('category-small', array('class' => 'image-shadow')); ?>
    			</a>
			</div>

    <?php  	} 		?>
<?php  endwhile;endif;   wp_reset_postdata();

	
  ?>
</aside>
