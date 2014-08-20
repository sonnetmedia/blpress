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
		
	<?php get_template_part('/inc/post', 'categories'); ?>			 
		 
		 
			<section class="post-box">
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						//get_template_part( 'content', 'standard' );
					?>
					
						
							
					<?php if ( have_posts()) : while (have_posts()) : the_post(); 
					
					$format = get_post_format();
					if ( false === $format )
						$format = 'standard';
					
					?>
							<?php  //get_template_part( 'format', 'standard' );    ?>
							<?php  get_template_part( 'format',  $format );    ?>
					<?php endwhile; endif;// End the loop ?>
					<?php if ($query->max_num_pages > 1) : ?>
							<?php  get_template_part( '/inc/pagination' );    ?>
					<?php endif; ?>

							<hr />
			</section>
		</div>	
		<div class="span3 offset2">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- /row -->
</div> <!-- /container -->
<?php get_footer(); ?>