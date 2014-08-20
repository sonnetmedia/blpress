	
		
		<?php 
		//pulls from the books post type for the books post type archive-books
			$args = array( 
			'post_type' => 'product', 
			'posts_per_page' => -1, 
			'orderby' => 'date' , 
			'order' => 'desc',
			'meta_key' => '_thumbnail_id',
//			'meta_query' => array(
//				array(
//					'key' => '_featured	',
//					'value' => 'no',
//					)),
			'post_status' => array( 'publish', 'future'  ) 
			);
			
			$query = new WP_Query( $args ); ?>
			

			<?php if ( $query->have_posts() ) : ?>

	<div id="container">
				<?php /* Start the Loop */ ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'books_list' );
					?>

				<?php endwhile; ?>
					</div>
				<?php //test_content_nav( 'nav-below' ); ?>
				
				
				<?php  //get_template_part( '/inc/pagination' );    ?>
				
				

			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>
	