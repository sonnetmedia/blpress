<!--<h2 class="white">From our Authors</h2>-->
<?php $theauthors = get_posts( array( 
	'post_type' => 'sm_authors',	
	'posts_per_page' => 1, 
	'orderby' => 'rand',
	//'meta_key' => ''
	
	
	'meta_query' => array(
	        array(
	            'key' => 'sm_author_testimonial',
	            'value' => '',
	            'compare' => '!='
	        )
	    )
	
	
	
	
		)
	); 
	?>
<div class="span12" style="margin-bottom: 2em;">
	<?php foreach( $theauthors as $theauthor ): ?>	
		<div class="span4">

			<?php if ( has_post_thumbnail($theauthor->ID) ) { // check if the post has a Post Thumbnail assigned to it. ?>
				<div class="" style="max-width: 100%;">
					<a href="<?php echo get_permalink( $theauthor->ID ); ?>">
						<?php echo get_the_post_thumbnail( $theauthor->ID, 'category-small', array('class' => 'image-shadow') ); ?>
						<h4><?php echo get_the_title( $theauthor->ID ); ?></h4>
					</a>
				</div>
			<?php  	} 		?>
	</div>
		<div class="span8">
				<div class="quote_small">
					<?php the_field('sm_author_testimonial', $theauthor->ID); ?>
				</div>
				<div class="span4 offset8">
		<a href="/about/" class="pull-rightTK btn btn-small btn-red">Support the Press</a>
		</div>
						
		</div>
	<?php endforeach; ?>
</div>		