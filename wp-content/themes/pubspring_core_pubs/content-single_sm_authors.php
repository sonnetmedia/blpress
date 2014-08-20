<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class() ?> id="post-<?php the_ID(); ?>" class="row-fluid">
<!-- <header><h1 class="entry-title" style="margin-bottom: .25em;"><?php the_title(); ?></h1></header>-->
	<div class="entry-content">
		<div class="image-boxTK span3">									
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
					<?php //the_post_thumbnail('full', array('class' => 'image-shadow mw97'));
						featured_image_with_caption_large();
					 ?> 
			<?php }	?>
			
							<?php $author_twitter = get_field('sm_author_twitter'); 
			
								if ( $author_twitter ) { ?>
								<div class="span2">
								<!-- AddThis Follow BEGIN -->
								<div class="addthis_toolbox addthis_32x32_style addthis_default_style">
								<a class="addthis_button_twitter_follow" addthis:userid="<?php echo $author_twitter; ?>"></a>
								</div>
								<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=sonnetmedia"></script>
								<!-- AddThis Follow END -->		<br />			
								</div>
								<?php } ?>
								
							<?php $author_facebook = get_field('sm_author_facebook'); 
			
								if ( $author_facebook ) { ?>
								<div class="span5">
								<!-- AddThis Follow BEGIN -->
								<div class="addthis_toolbox addthis_32x32_style addthis_default_style">
								<a class="addthis_button_facebook_follow" addthis:userid="<?php echo $author_facebook; ?>"></a>
								</div>
								<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=sonnetmedia"></script>
								<!-- AddThis Follow END -->
								</div>					
								<?php } ?>
			
		
<div class="span12">
			<?php  get_template_part('/content/related', 'statuses');    ?>							
		</div>	
		
		</div>
		
	
	
			<div class="span7">
				<div class="largeTK">
				<?php the_content(); ?>
				</div>
					
				<?php 
					$author_first_name = get_field('sm_author_first_name'); 
					$author_website = get_field('sm_author_website'); 
	
						if ( $author_website ) { ?>
						
						<p><strong><a href="<?php echo $author_website; ?>">
						
			<?php if ( $author_website ) { the_field('sm_author_first_name'); ?>'s <?php } ?>Website</a></strong></p>

						<?php } ?>

				<?php  get_template_part('/content/related', 'posts');    ?>


			</div>
			
			
<div class="span2 sidebar">
	
	<?php $child_id = get_the_ID(); ?>	
	
	
	<?php
	$related_books = get_posts(	array( 
		'post_type' => 'product',	
		'post_status' => array( 'publish', 'future'  ), 
		'posts_per_page' => -1, 
		'orderby' => 'date',
		'meta_query' => array(
			array(
				'key' => 'related_author',
				'value' => '"' . get_the_ID() . '"',
				'compare' => 'LIKE'
					)
				)
			)
		); ?>
	
	<?php if( $related_books ): ?>
		<ul>
			<?php foreach( $related_books as $related_book ):?>							
	
					<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
						<div class="image">
							<a href="<?php echo get_permalink( $related_book->ID ); ?>">
								<?php echo get_the_post_thumbnail( $related_book->ID, 'category-small', array('class' => 'image-shadow') ); ?>
								<h4><?php echo get_the_title( $related_book->ID ); ?></h4>
							</a>
						</div>
					<?php  	} 		?>
	
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
	
	
	
	<?php get_template_part('/content/related', 'events'); ?>
	
	
</div>
			
			
			
		</div>
	
<?php endwhile; // End the loop ?>