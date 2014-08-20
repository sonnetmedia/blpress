<?php 
// Template Name: Events
get_header(); ?>
<div class="container page_body index">
	<div class="row-fluid row-page-header">
		<div class="span12">
			<h1 class="large large page-header inline"><?php wp_title("",true); ?></h1>
		</div>
	</div>
	<div class="row-fluid">
		<div id="content" class="span12" role="main">		
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
					<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>
						<?php get_template_part( 'no-results', 'index' ); ?>
			<?php endif; ?>
		</div>
	</div><!-- /row -->
</div> <!-- /container -->
<?php get_footer(); ?>