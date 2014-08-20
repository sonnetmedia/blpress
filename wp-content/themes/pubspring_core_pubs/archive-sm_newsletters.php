<?php
/**
 * The main template file.
 * @package PubSpring Custom Core
 * @since PubSpring Custom Core 1.0
 */
get_header(); ?>

<div class="container page_body index">
	<?php get_template_part('/inc/page_heading_title'); ?>
	<div class="row-fluid">
		<div id="content" class="span7"  role="main">
		
	<?php //get_template_part('/inc/post', 'categories'); ?>			 
		 
		 
			<section class="post-boxf">
					<?php //get_template_part( 'content', 'standard' ); ?>
					
					
							
							
					<?php if ( have_posts()) : while (have_posts()) : the_post(); ?>
							<?php  get_template_part( 'format', 'standard' );    ?>
					<?php endwhile; endif;// End the loop ?>
							<?php  get_template_part( '/inc/pagination' );    ?>


					<?php //if ($query->max_num_pages > 1) : ?>
							<?php  //get_template_part( '/inc/pagination' );    ?>
					<?php //endif; ?>
					
					
					
							<hr />
			</section>
		</div>	

<div class="span5">
		<?php get_template_part('/content/featured', 'reviews'); ?>

	<div class="span6">
		<?php get_template_part('sidebar'); ?>
	</div>

	<div class="span5">
		<?php get_template_part('sidebar', 'center'); ?>
	</div>

</div>

	</div><!-- /row -->
</div> <!-- /container -->
<?php get_footer(); ?>