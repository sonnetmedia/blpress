<div class="span12 promo_box gradient-cfe7fa image-shadow">
					<div style="padding: 2em;">
			
<?php $args = array( 
		'posts_per_page' => 1,
		'orderby' => 'date',
//		'offset' => 1,
		'tax_query' => array(
			array(
				'taxonomy' => 'post_format',
				'field' => 'slug',
				'terms' => array('post-format-video'),
				)
			),
			);
	$query = new WP_Query( $args ); 
		$count = 0;
?>
<?php if ( $query->have_posts()) : ?>

			<div class="span9">

					
<?php while ($query->have_posts()) : $query->the_post(); $count++;?>

<!--					<a href="<?php the_permalink(); ?>" class="sans"><?php the_title(); ?></a>-->
						
			<?php get_template_part('format', 'video');    ?>			

<hr class="blue" />

</div><!-- /END span8 -->
<div class="span3" style="max-height: 385px;overflow: hidden;">

<?php $posts = get_field('related_author_or_book');
 
if( $posts ): ?>
	<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
		<?php setup_postdata($post); ?>
	    
	    
	    
	    



<?php if ( has_post_thumbnail() ) { ?>
<div style="width: 120px;margin: 0 auto .5em auto;">
<a href="<?php the_permalink(); ?>">
<?php 	the_post_thumbnail('category-thumb', array('class' => 'featured-image image-shadow')); ?>
	    	<br /><?php the_title(); ?></a>	    
</div>


<?php 	} ?>


	    
	    
	    
	<?php endforeach; ?>
	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
 





</div>

<?php endwhile; endif;// End the loop ?>





















    <a href="/video-archive/" class="pull-right"><i class="icon-arrow-right"></i> View All Videos</em></a>
	</div>
	
	</div>