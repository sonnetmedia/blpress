<?php if ( is_front_page()) { 
			$args = array( 'post_type' => 'sm_reviews', 'posts_per_page' => 1, 'orderby' => 'rand', 
							'tax_query' => array(
							    array(
							      'taxonomy' => 'sm_reviews_cat',
							      'field' => 'slug',
							      'terms' => 'house'
							    )
							  )
							);
				 } else { 
					 $args = array( 'post_type' => 'sm_reviews', 'posts_per_page' => 1, 'orderby' => 'rand' );
					} ?>


<style>
.offwhite{
				text-shadow: 0px 1px 1px #000;	
}
</style>

<?php $featured_reviews = new WP_Query( $args ); ?>
<?php if ( $featured_reviews->have_posts() ) : ?>
	<?php while ( $featured_reviews->have_posts() ) : $featured_reviews->the_post(); ?>
		<?php //get_template_part( 'content', 'reviews' ); ?>
		
		
			<?php $full_quote = get_the_content(); 
					$excerpt = get_the_excerpt();  
			 
			 
			 if ( is_post_type_archive('sm_reviews') || is_single() ) {
			 
			 
		 if ( !empty( $full_quote ) ) : 
			
			
				echo '<blockquote><p class="quote offwhite" style="color:#ebe9e4;">' . $full_quote . '</p></blockquote>';
		
		
		 else : 
				echo '<blockquote><p class="quote offwhite" style="color:#ebe9e4;">' . $excerpt . '</p></blockquote>';			
		
		
		 endif; 
		
				}
				
				else {
				echo '<blockquote><p class="quote offwhite" style="color:#ebe9e4;">' . $excerpt . '</p></blockquote>';			
				}
				
				
			?>
			<div class="quote_attribution">
					&mdash; <?php the_field('attribution', $post->ID); ?>
					
					
					<?php $review_link = get_post_meta($post->ID, 'link_to_original', true);	
						if($review_link) : ?>		
						(<a href="<?php the_field('link_to_original', $post->ID); ?>" title="Outside link to quoted review"><i class="icon-share-alt"> </i>link</a>)	
						<?php endif; ?>
					
					
					
					
					
		
					
			</div>	
			<div class="quote_attribution">
				<ul class="post_list inline">
					<?php  do_action('pubspring_post_related');    ?>
				</ul>
			</div>
		
		
		
		
		
		<?php  //END CONTENT    ?>
	<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>


			
			
			
			
			
			
			
			
