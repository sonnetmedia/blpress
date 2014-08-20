<?php $category = get_the_category(); ?>
<a href="<?php the_permalink(); ?>">
	<div class="box box-product">
		<div class="box_interior">
			<p class="no-margin dig-in red">
				<?php get_template_part('inc/post','meta_pubdate_future'); ?>    
			</p>
			<?php above_book_title(); //HOOK ?>
			<h3 style="max-width: 100%;"><?php the_title(); ?></h3>
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
					<?php the_post_thumbnail('full', array('class' => 'image-shadow', 'style' => 'max-width:100%;margin-left:;margin-bottom:.75em;')); ?>
			<?php  	} 		?>
			<?php  the_excerpt();    ?>
<!--				        <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-primaryTK" style="width: 90%;">read more</a>-->
		</div>
	</div>
</a>