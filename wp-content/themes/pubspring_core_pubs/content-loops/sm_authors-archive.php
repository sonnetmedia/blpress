<?php  
		$author_args = array( 
		'post_type' => 'sm_authors',
		'posts_per_page' => -1, 
		'orderby' => 'meta_value' , 
		'meta_key' => 'sm_author_last_name',
		'order' => 'asc',
		'tax_query' => array(
			array(
				'taxonomy' => 'sm_contributor_type',
				'field' => 'slug',
				'terms' => 'authors',
				),)
		

		);
		
		$authors = new WP_Query( $author_args);  
		
		  ?>
		
			<?php if ( $authors->have_posts() ) : $count = 0 ?>

	<div id="container-authors">
				<?php /* Start the Loop */ ?>
				<?php while ( $authors->have_posts() ) : $authors->the_post(); $count++;?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( '/content-formats/sm_authors');
					?>

				<?php endwhile; wp_reset_query(); ?>
					</div>
				
			
			<?php endif; ?>
			
			<div class="row row_top" >
			<div class="span12">
			<h1 class="page- large inlin" style="margin-top: 1em;">Translators</h1>
			</div>
			</div>
			
					<?php  
					$contributor_args = array( 
					'post_type' => 'sm_authors',
					'posts_per_page' => -1, 
					'orderby' => 'meta_value' , 
					'meta_key' => 'sm_author_last_name',
					'order' => 'asc',
'tax_query' => array(
	array(
		'taxonomy' => 'sm_contributor_type',
		'field' => 'slug',
		'terms' => array('translator'),
		),

)
					);
					
					
					
					$contributors = new WP_Query( $contributor_args);  
			//				query_posts('meta_key=YOURNAME&orderby=meta_value');
					
					  ?>
					
						<?php if ( $contributors->have_posts() ) : $count = 0 ?>
			
				<div id="container-contributors">
							<?php /* Start the Loop */ ?>
							<?php while ( $contributors->have_posts() ) : $contributors->the_post(); $count++;?>
			
								<?php
									/* Include the Post-Format-specific template for the content.
									 * If you want to overload this in a child theme then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
						get_template_part( '/content-formats/sm_authors');								?>
			
							<?php endwhile; wp_reset_query(); ?>
								</div>
							
						
						<?php endif; ?>