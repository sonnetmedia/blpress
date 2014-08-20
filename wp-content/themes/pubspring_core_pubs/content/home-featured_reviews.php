<?php $featured_reviews = new WP_Query( 
			array( 
					 'post_type' => 'sm_reviews', 
					 'posts_per_page' => 1, 
					 'orderby' => 'rand', 
					 'sm_reviews_cat' => 'house',
//					 'tax_query' => array(
//						'taxonomy' => 'sm_reviews_cat',
//						'field' => 'slug',
//						'terms' => 'house'
//							)
						)
					); ?>
					 
<?php if ( $featured_reviews->have_posts() ) : ?>
	<?php while ( $featured_reviews->have_posts() ) : $featured_reviews->the_post(); ?>
		<?php get_template_part( 'content', 'reviews' ); ?>
	<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>


			
			
			
			
			
			
			
			
