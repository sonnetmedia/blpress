<?php 
//pulls from the books post type for the books post type archive-books
	$args = array( 
	'post_type' => 'product', 
	'numberposts' => 1, 
	'orderby' => 'rand' , 
     'meta_key' => '_thumbnail_id',
	'meta_query' => array(
	    array(
	      'key' => '_featured',
	      'value' => 'yes',
	    )
	  )
	
	
	
	);
?>	

 <?php $book_featured = get_posts( $args ); 


     
    foreach( $book_featured as $post ) :	setup_postdata($post); ?>
    
    
    						<h2>Featured Title</h2>
    
    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
    		
	    		<a href="<?php the_permalink(); ?>">
    				<?php the_post_thumbnail('full', array('class' => 'image-shadow')); ?>
    			</a>

    <?php  	} 	?>
    
    
	
	
	
<?php endforeach;   ?>
