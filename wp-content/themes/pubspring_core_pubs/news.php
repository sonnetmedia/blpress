<?php
/**
 * Template Name: News/Extras
 */
get_header(); ?>

<div class="container page_body index">
	<?php get_template_part('/inc/page_heading_title'); ?>
	<div class="row-fluid">
		<div id="content" class="span7"  role="main">
		
	<?php get_template_part('/inc/post', 'categories'); ?>			 
		 
		 
			<section class="post-boxf">
					<?php
						//get_template_part( 'content', 'standard' );
					?>
					
					
					<?php
						global $wp_query;
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array( 
							'cat' => 1280,
							'post_type' => 'post',
							'posts_per_page' => 30,
							'paged' => $paged,
							'tax_query' => array(
								array(
									'taxonomy' => 'post_format',
									'field' => 'slug',
									'terms' => array('post-format-status'),
									'operator' => 'NOT IN'
									)
								),
								);
						$query = new WP_Query( $args ); 
					?>
					<?php if ( $query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
							<?php  get_template_part( 'format', 'standard' );    ?>
					<?php endwhile; endif;// End the loop ?>
					<?php if ($query->max_num_pages > 1) : ?>
							<?php  get_template_part( '/inc/pagination' );    ?>
					<?php endif; ?>
					
					

							<hr />
			</section>
		</div>	
		<div class="span3">
			<?php get_template_part( 'content', 'status' ); ?>
		</div>
		<div class="span2">
		<?php get_template_part('sidebar'); ?>
					<?php get_template_part('sidebar', 'center'); ?>
			
		</div>
	</div><!-- /row -->
</div> <!-- /container -->
<?php get_footer(); ?>
