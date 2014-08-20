<a href="<?php the_permalink(); ?>" class="image-full" id="<?php  $slug = basename(get_permalink()); echo $slug; ?>">		

<?php if ( has_post_thumbnail() ) { 					
			the_post_thumbnail('category-medium', array('class' => 'image-shadow')); 
	}

else {	?>

	<span class="box_text">
		<?php  the_excerpt(''); }
		//END IF HAS POST THUMBNAIL ?>
	</span>


<h4 class="title-overlay" style="padding: 0 0 1em 0;"><?php the_title(); ?>
</h4> 
</a>		
