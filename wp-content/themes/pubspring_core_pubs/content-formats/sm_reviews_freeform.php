<div class="quote-blockTK TKshadow-light gradient-cfe7faTK" style="margin-bottom: 1em;padding: .45em;">

	<?php $full_quote = get_the_content(); 
			$excerpt = get_the_excerpt();  
	 
	 
	 if ( is_post_type_archive('sm_reviews') || is_single() ) {
	 
	 
 if ( !empty( $excerpt ) ) : 
	
	
		echo '<blockquote><p class="quote brand" style="text-shadow:none;">' . $excerpt . '</p></blockquote>';


 else : 
		echo '<blockquote><p class="quote brand">' . $full_quote . '</p></blockquote>';			


 endif; 

		}
		
		else {
		echo '<blockquote><p class="quote brand">' . $excerpt . '</p></blockquote>';			
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
</div>

