
<?php 
//pulls from the books post type for the books post type archive-books
$args = array( 
'post_type' => 'product', 
'numberposts' => 3, 
'orderby' => 'rand' , 
 'meta_key' => '_thumbnail_id',
'post_status' => 'future' 
);

$count = 0
?>	

<?php $book_forthcoming_alt = get_posts( $args ); 



<div class="span6">
		<h2>Forthcoming</h2>
								
		<style>
		#book_forthcoming_2, #book_forthcoming_3, #book_forthcoming_small_4 {
					display: none;
		}
		
		#book_forthcoming_small_6{
					margin-left: 41px;	
		}
		
		</style>						
						
						
			<?php   foreach( $book_forthcoming_alt as $post ) :	setup_postdata($post); $count++; ?>					    
					<div id="book_forthcoming_<?php echo $count ?>">
					    <?php if ( has_post_thumbnail() ) {  ?>
					    		
						    		<a href="<?php the_permalink(); ?>">
					    				<?php the_post_thumbnail('full', array('class' => 'image-shadow')); ?>
					    			</a>
					
					    <?php  	} //END if has_post_thumbnail	?>
					</div>
				<?php endforeach;   ?>
					
					
							
</div>



					<div class="span6">
						
						<div class="box red_background image-shadow">
							<div class="box_interior">
							
								<?php  get_template_part('content/home','mission');    ?>
								
							</div>
						</div>
						
						
						
						<div class="box" style="margin-top: 23px;">

					<?php  	//get_template_part('content/featured','books_list');    ?>
					
					
					<?php   
					
					foreach( $book_forthcoming as $post ) :	setup_postdata($post); $count++; ?>					    
							<div id="book_forthcoming_small_<?php echo $count ?>">
							    <?php if ( has_post_thumbnail() ) {  ?>
							    		
<a id="book_forthcoming_small_<?php echo $count ?>" href="<?php the_permalink(); ?>" class="pull-left">
	<?php the_post_thumbnail('category-small', array('class' => 'image-shadow' , 'style' =>'width:190px;')); ?>
</a>
							
							    <?php  	} //END if has_post_thumbnail	?>
							</div>
						<?php endforeach;   ?>
					


						</div>
						</div>						
					











































