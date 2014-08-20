<?php $book_newest = get_posts( array( 'post_type' => 'product', 'numberposts' => 1, 'orderby' => 'date' , 'order' => 'DESC', 'meta_key' => '_thumbnail_id', 'post_status' => 'publish' ) ); ?>
		<div class="span6 mb1">
			<div class="csstransforms">
				<aside>
					<h3>  New&nbsp;&nbsp;Books</h3>						
					<?php  foreach( $book_newest as $post ) :	setup_postdata($post); ?>					    
							    <?php if ( has_post_thumbnail() ) {  ?>							    		
						    		<a href="<?php the_permalink(); ?>">
					    				<?php the_post_thumbnail('full', array('class' => 'image-shadow')); ?>
					    			</a>							
							    <?php  	} //END if has_post_thumbnail	?>
						<?php endforeach;   ?>
				</aside>
			</div>
			
			
			
			
<div class="box red_background image-shadow hidden-desktop" style="margin-top: 3em;">
	<div class="box_interior">
		<?php dynamic_sidebar('sidebar-frontpage'); ?>
	</div>
</div>
			
			
		</div><!-- /END span6 -->
			
		<div class="span6">
			
			<div class="row-fluid box gradient-cfe7fa image-shadow" style="float:none ;">
				<div class="box_interior">
					<?php  get_template_part('content/home','mission');    ?>
				</div>
			</div>
			
			
			<div class="row-fluid" style="margin-top: 23px;">
				<aside>
					<h3>New Books</h3>
				</aside>				
			</div>
			
			<div class="row-fluid mb1" style="padding-left: 1%;"><!-- //PADDING HERE WORKS WITH SLIGHTLY SMALLER WIDTH FOR COVER IMAGES TO MAKE THE FIT NICELY IN THE SPACE -->
				<?php $books_new = get_posts( array( 'post_type' => 'product', 'numberposts' => 2, 'offset' => 1, 'orderby' => 'date' , 'order' => 'DESC', 'meta_key' => '_thumbnail_id', 'post_status' => 'publish' ) ); $count = 0;  ?>
		
<!--							<style>
							book_forthcoming_small_1 {
								margin-left: 0px;
							}
							
							.book_forthcoming_small_2 {
							margin-left: 0;			
							}
							</style>-->
							
					<?php  foreach( $books_new as $post ) :	setup_postdata($post); $count++; ?>			
							    <?php if ( has_post_thumbnail() ) {  ?>							    	
						<div class="span6 mb1" id="book_forthcoming_small_<?php echo $count ?>">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('category-small', array('class' => 'image-shadow' , 'style' =>'width:98%;')); ?>
							</a>
						</div>
							    <?php  	} //END if has_post_thumbnail	?>
						<?php endforeach;   ?>
					</div>

			</div>