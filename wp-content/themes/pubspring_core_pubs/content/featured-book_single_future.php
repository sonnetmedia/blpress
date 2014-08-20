<?php 
//pulls from the books post type for the books post type archive-books
	$args = array( 
	'post_type' => 'product', 
	'numberposts' => 1, 
	'orderby' => 'rand' , 
     'meta_key' => '_thumbnail_id',
	'post_status' => 'future' 
	);
?>	

 <?php $book_forthcoming = get_posts( $args ); 

	if ( $book_forthcoming ) {

     
    foreach( $book_forthcoming as $post ) :	setup_postdata($post); ?>
    
    
    						<h2>Forthcoming</h2>
    
    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
    		
	    		<a href="<?php the_permalink(); ?>">
    				<?php the_post_thumbnail('full', array('class' => 'image-shadow')); ?>
    			</a>

    <?php  	} 	?>
    
    <small><?php  //the_excerpt();    ?></small>
	
	
	
<?php endforeach;   ?>
<?php  }


else {
	get_template_part('content/featured','book_single');
}


    ?>