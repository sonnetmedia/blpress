<?php
//this is a full page template, which is the core template for this theme
get_header(); ?>
<div class="container page_body index">
		<?php get_template_part('/content/featured', 'reviews'); ?>
	<?php get_template_part('/inc/page_heading_title'); ?>



<div class="row-fluid">

		<div id="content" class="span12" role="main">

		<?php



		$args = array('post_type' => 'sm_authors',
		'orderby' => 'meta_value',
		'meta_key' => 'sm_author_last_name',
		'order' => 'asc',
		'posts_per_page' => -1
		);

				$authors_list = new WP_Query($args);

//		query_posts( 'post_type=sm_authors&orderby=meta_value&meta_key=author_last_name&order=asc' );
		  ?>

			<?php if ( $authors_list->have_posts() ) : ?>

	<div id="container-authors">
				<?php /* Start the Loop */ ?>
				<?php while ( $authors_list->have_posts() ) : $authors_list->the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'authors' );
					?>

				<?php endwhile; wp_reset_query(); ?>
					</div>
				<?php //test_content_nav( 'nav-below' ); ?>

				<?php  //get_template_part( '/inc/pagination' );    ?>



			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>
	</div><!-- /END #container -->
	</div><!-- /row -->
 </div> <!-- /container -->


<?php get_footer(); ?>