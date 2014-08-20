<?php 
//pulls from the books post type for the books post type archive-books
	$books_list_args = array( 
	'post_type' => 'product', 
	'posts_per_page' => 1, 
	'orderby' => 'rand' , 
	'order' => 'desc',
	     'meta_key' => '_thumbnail_id',
	'post_status' => array( 'future'  ) 
	);
	
	$books_list = new WP_Query( $books_list_args );
if ( $books_list->have_posts() ) : 
while ( $books_list->have_posts() ) : $books_list->the_post();
    ?>
    
    
    						<h2>Forthcoming</h2>
    
    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
    		
    		<div class="pull-left flow_leftTK" style="width: 100%;">
	    		<a href="<?php the_permalink(); ?>">
    				<?php the_post_thumbnail('full', array('class' => 'image-shadow')); ?>
    			</a>
			</div>

    <?php  	} 		?>
    
    
    
    

    
    
	
	
<?php endwhile;endif;   wp_reset_postdata();
  ?>
