<li class="image-box" ><a href="<?php the_permalink(); ?>" id="<?php  $slug = basename(get_permalink()); echo $slug; ?>">		

<?php if ( has_post_thumbnail() ) { 					
	the_post_thumbnail('category-small', array('class' => 'image-shadow')); 
}?>
</a></li>		
