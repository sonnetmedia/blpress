

		<?php
//		global $wp_query;
$featured_authors = get_posts(	array( 
	'post_type' => 'sm_authors',	
	'posts_per_page' => 3, 
	'orderby' => 'rand',
	
		)
	); ?>

<?php if( $featured_authors ): ?>




	<?php foreach( $featured_authors as $post ): setup_postdata($post); $count++;?>

<div class="span8 box red_background image-shadow" style="margin-bottom: 2em;">
	<div class="blocks">

<h2 class="white">Featured Author:	<a href="<?php echo get_permalink( $featured_author->ID ); ?>"> <?php echo get_the_title( $featured_author->ID ); ?></a></h2>


<div class="span4">
<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
		<a href="<?php echo get_permalink( $post->ID ); ?>">
			<?php echo get_the_post_thumbnail( $post->ID, 'category-small', array('class' => 'image-shadow') ); ?>
		</a>
<?php  	} 		?>
</div>


<div class="span7">
<?php  the_content();    ?>
    <a href="<?php the_permalink(); ?>" class=""><i class="icon-arrow-right"></i>Read more about <em><?php the_title(); ?></em></a>
</div>


</div></div>







	<?php endforeach; ?>
<?php endif; wp_reset_query(); ?>	