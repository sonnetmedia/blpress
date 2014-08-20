<?php 
//pulls from the books post type for the books post type archive-books
$args = array( 
'post_type' => 'product', 
'numberposts' => -1, 
'orderby' => 'date' , 
'order' => 'ASC',
 'meta_key' => '_thumbnail_id',
'post_status' => 'future' 
);
?>	

<?php $book_forthcoming = get_posts( $args ); 
	if ( $book_forthcoming ) { ?>
			<?php   foreach( $book_forthcoming as $post ) :	setup_postdata($post);  ?>					    
					<aside style="margin-bottom:1em ;">
					<h3>Forthcoming</h3>
					    <?php if ( has_post_thumbnail() ) {  ?>
						    		<a href="<?php the_permalink(); ?>">
					    				<?php the_post_thumbnail('category-medium', array('class' => 'image-shadow')); ?>
					    			</a>
					
					    <?php  	} //END if has_post_thumbnail	?>
					    </aside>
				<?php endforeach;  ?>
			
			<?php  }    ?>
