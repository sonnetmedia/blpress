<?php get_header(); ?>
	<div class="page_body single">
		<?php //get_template_part('/content-snippets/page_heading_title'); ?>
			<div id="content" role="main">
				<section class="post-box container">
				<div class="row-fluid">
					<?php get_template_part('content-loops/product','single'); ?>
					</div>
				</section>
			</div><!-- End Content row -->
		</div><!-- /row -->
</div> <!-- /container -->
<?php get_footer(); ?>
