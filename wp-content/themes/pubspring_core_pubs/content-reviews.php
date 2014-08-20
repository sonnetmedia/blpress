<div class="quote-block_small shadow-light gradient-cfe7fa">

	<blockquote class="quote brand">
		<?php the_content(); ?>
	</blockquote>

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

