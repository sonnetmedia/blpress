<?php 
	$theauthor = get_field('related_author');
	 if( $theauthor ): 
	?>
		<?php foreach( $theauthor as $post ): ?>	

				<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
					<div class="" style="max-width: 100%;">
						<a href="<?php echo get_permalink( $post->ID ); ?>">
							<?php echo get_the_post_thumbnail( $post->ID, 'category-small', array('class' => 'image-shadow') ); ?>
							<h4><?php echo get_the_title( $post->ID ); ?></h4>
						</a>
					</div>
				<?php  	} 	
				
				else {
					echo 'by <h4><a href="' . get_permalink( $post->ID ). '">' . get_the_title( $post->ID ) .'</a> </h4>';					
				}
				
					?>
		<?php endforeach; ?>
<?php endif; wp_reset_query(); ?>
<?php 
	$the_contributors = get_field('sm_translator');
		 if( $the_contributors ): 
		 
		 echo 'translated by';
	?>

		<?php foreach( $the_contributors as $post ): 	

										echo 	'<h4><a href="' . get_permalink( $post->ID ). '">' . get_the_title( $post->ID ) .'</a> </h4>';		
				
					?>
		<?php endforeach; ?>
<?php endif; ?>