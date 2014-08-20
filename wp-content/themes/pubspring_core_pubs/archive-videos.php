<?php 
// Template Name: Archive Videos
get_header(); ?>
<div class="container page_body single">
	<?php get_template_part('/inc/page_heading_category'); ?>
	<div class="row-fluid">
		<div id="content" class="" role="main">
		
			<section class="post-box">
				<?php get_template_part('content', 'video'); ?>
			</section>

		</div><!-- End Content row -->
	</div><!-- /row -->
</div> <!-- /container -->
<?php get_footer(); ?>
