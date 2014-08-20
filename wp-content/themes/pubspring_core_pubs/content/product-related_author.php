<?php 
	$related_authors = get_field('related_author');
	 if( $related_authors ): 
	?>
		<?php foreach( $related_authors as $related_author ): ?>	

				<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
					<div class="" style="max-width: 100%;">
					
						<a href="<?php echo get_permalink( $related_author->ID ); ?>">
					
							<?php echo get_the_post_thumbnail( $related_author->ID, 'category-small', array('class' => 'image-shadow') ); ?>
					
					
							<h4><?php echo get_the_title( $related_author->ID ); ?></h4>
					
						</a>
					
					
					</div>
				<?php  	} 		?>
				
				
				
		<?php endforeach; ?>




<?php endif; ?>
	 
