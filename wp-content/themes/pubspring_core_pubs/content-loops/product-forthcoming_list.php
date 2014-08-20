<?php 
//pulls from the books post type for the books post type archive-books
$args = array( 
'post_type' => 'product', 
'numberposts' => 6, 
'orderby' => 'date' , 
'order' => 'ASC',
 'meta_key' => '_thumbnail_id',
'post_status' => array('future', 'publish')
);
?>	

<?php $book_forthcoming = get_posts( $args ); 
	if ( $book_forthcoming ) { ?>
			<?php   foreach( $book_forthcoming as $post ) :	setup_postdata($post);  ?>					    
					    <?php if ( has_post_thumbnail() ) {  ?>
						    		<a href="<?php the_permalink(); ?>">
					    				<?php the_post_thumbnail('category-thumb', array('class' => 'image-shadow flow_left')); ?>
					    			</a>
					
					    <?php  	} //END if has_post_thumbnail	?>
				<?php endforeach;  ?>
			
			<?php  }    ?>
