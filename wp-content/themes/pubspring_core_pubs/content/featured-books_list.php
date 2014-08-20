<?php 
//pulls from the books post type for the books post type archive-books
	$args = array( 
	'post_type' => 'product', 
	'numberposts' => 2, 
	'orderby' => 'rand' , 
     'meta_key' => '_thumbnail_id',
	
	
	
	);
	 $count = 0; 
?>	





<style>
#book_new_2{
			margin-left: 41px;
}
</style>

 <?php $book_new = get_posts( $args ); ?>

<!--    						<h2>New Titles</h2>-->
     
     
   <div style="margin-top:20px ;">
   <?php  foreach( $book_new as $post ) :	setup_postdata($post);  $count++; ?>
    
    

    
    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
	    		<a id="book_new_<?php echo $count ?>" href="<?php the_permalink(); ?>" class="pull-left">
    				<?php the_post_thumbnail('category-small', array('class' => 'image-shadow' , 'style' =>'width:190px;')); ?>
    			</a>

    <?php  	} 	?>
    
    
	
	
	
<?php endforeach;   ?>
</div>  