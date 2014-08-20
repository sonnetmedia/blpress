<?php 
	$theauthor = get_field('related_author_or_book');
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
				<?php  	} 		?>
		<?php endforeach; ?>
<?php endif; ?>
	 
