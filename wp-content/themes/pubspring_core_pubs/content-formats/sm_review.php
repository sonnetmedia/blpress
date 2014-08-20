	<?php $full_quote = get_the_content(); 
			$excerpt = get_the_excerpt();  
	 
	 
	 if ( is_post_type_archive('sm_reviews') || is_single() ) {
	 
	 
 if ( !empty( $full_quote ) ) : 
	
	
		echo '<blockquote><p class="quote_single">' . $full_quote . '</p></blockquote>';


 else : 
		echo '<blockquote><p class="quote_single">' . $excerpt . '</p></blockquote>';			


 endif; 

		}
		
		else {
		echo '<blockquote><p class="quote_single">' . $excerpt . '</p></blockquote>';			
		}
		
		
	?>
	<div class="quote_attribution">
			&mdash; <?php the_field('attribution', $post->ID); ?>
			
			
			<?php $review_link = get_post_meta($post->ID, 'link_to_original', true);	
				if($review_link) : ?>		
				(<a href="<?php the_field('link_to_original', $post->ID); ?>" title="Outside link to quoted review"><i class="icon-share-alt"> </i>link</a>)	
				<?php endif; ?>
			
			
			
			
			

			
	<div class="quote_attribution">
		<ul class="post_list inline">
			<?php  do_action('pubspring_post_related');    ?>
		</ul>
	</div>
</div>

