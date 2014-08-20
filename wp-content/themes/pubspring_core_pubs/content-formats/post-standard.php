	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 4em;">
		<header>
			<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h1>
<!--			<h3>by <?php  //the_author();    ?></h3>-->
			<?php 	echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('%s', 'pubspring'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
			 ?>
			 			&#124; <ul class="post_list inline">
		<li class="sans">related: </li>
			 			<?php do_action('pubspring_post_related'); ?>	
			 			</ul>
			 <br /><br />
		</header>
		<div class="entry-content">
		
		
		
		<?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail('category-small', array('class' => 'flow_left featured-image image-shadow')); 
			} //close if has_post_thumnail ?>
			
			
						<?php get_template_part('format', 'video');    ?>			

<?php if ( !empty( $post->post_excerpt ) ) : ?>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>">Continue reading...</a>
	<?php else : ?>
		<?php the_content('Continue reading...'); ?>
	<?php endif; ?>
	
<hr  />
		</div>
		<footer>
		
		<?php if ( comments_open() ) : ?>
								<div class="comments">
						<a href="<?php the_permalink(); ?>" class="btn-primary btn btn-mini">
						<?php comments_number( 'Click Here to Leave a Comment', 'one comment', '% comments' ); ?>
						</a>
					</div> 
					
			<?php  endif;    ?>		

			<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
		</footer>
		<div class="divider"></div>
	</article>	
