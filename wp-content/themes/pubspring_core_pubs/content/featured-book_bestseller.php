<style>
.inline p{
	display: inline;
}
</style>

<?php 
//pulls from the books post type for the books post type archive-books
	$bestseller_args = array( 
	'post_type' => 'product', 
	'posts_per_page' => 1, 
	'orderby' => 'rand',
	'product_tag' => 'bestseller',
	 
	);
	
	$bestsellers = get_posts( $bestseller_args );


    ?>
    
    

    
	<?php foreach( $bestsellers as $post ): setup_postdata($post); ?>    
	
<!--    <h2>Bestsellers</h2>	-->
    
    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
    		<div class="flow_leftTK" style="width: 120px;margin: 0 12px 8px 0;float: left;">
	    		<a href="<?php the_permalink(); ?>">
    				<?php the_post_thumbnail('category-small', array('class' => 'image-shadow')); ?>
    			</a>
			</div>
    <?php  	} 		?>
    
    <div class="inline white small" style="margin-bottom: 1em;"><?php the_excerpt(); ?>
    
    <a href="<?php the_permalink(); ?>" class="sans small"> <i class="icon-arrow-right icon-white"></i> Read more about <em><?php the_title(); ?></em></a> or

	<a href="/books-by-keyword/bestseller/" class="sans small">see all bestsellers</a>

</div>
    <?php  endforeach;    ?>
    


	
<?php  wp_reset_postdata(); ?>
