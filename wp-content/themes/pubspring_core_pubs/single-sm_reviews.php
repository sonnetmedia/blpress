<?php 
//this is a full page template, which is the core template for this theme
get_header(); ?>
<div class="container page_body index">
	<?php get_template_part('/inc/page_heading_title'); ?>



<div class="row-fluid">

		<div id="content" class="span12" role="main">	
		

			<?php if ( have_posts() ) : ?>

	<div id="container-authorsTK">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'reviews' ); ?>

				<?php endwhile; ?>
					</div>
				<?php //test_content_nav( 'nav-below' ); ?>
				
				
				<?php  get_template_part( '/inc/pagination' );    ?>
				
				

			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>
	</div><!-- /END #container -->
	</div><!-- /row -->
 </div> <!-- /container -->


<?php get_footer(); ?>