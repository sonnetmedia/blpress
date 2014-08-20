<a href="<?php the_permalink(); ?>" id="<?php  $slug = basename(get_permalink( $child_id )); echo $slug; ?>">		
	<div class="authors-archive row-even box white_background image-full <?php if ($count > 1 );{echo 'left-border';} ?>">
		<div class="box-inner">
			<?php if ( has_post_thumbnail() ) { ?>					
				<a href="<?php the_permalink(); ?>" class="" id="<?php  $slug = basename(get_permalink( $child_id )); echo $slug; ?>">		
					<?php the_post_thumbnail('category-medium', array('class' => 'image-shadow')); 
				echo '</a>';
				}
			
				else {	?>
			
			<span class="box_text">
				<?php  the_excerpt(''); }
			//END IF HAS POST THUMBNAIL ?>
			</span>
		
			<h4 class="title-overlay red" style="padding: 0 0 1em 0;"><?php the_title(); ?></h4> 
		</div>
	</div>
</a>