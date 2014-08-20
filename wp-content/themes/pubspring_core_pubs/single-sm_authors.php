<?php get_header(); ?>

<div class="container page_body single">

		<?php get_template_part('/content/related', 'reviews'); ?>
	<?php get_template_part('/inc/page_heading_title'); ?>
	
	
	
	<?php  //TOP ROW - IMAGE, BIO, BOOK(S)    ?>


	<div class="row-fluid row_padded">
		<div id="content" class="span12"  role="main">
			<section class="post-box">
				<?php get_template_part('content', 'single_sm_authors'); ?>
			</section>
		</div><!-- End Content row -->
	</div><!-- /row -->
	
	
	<?php  //NEXT ROW - POSTS    ?>

<div class="row-fluid">
	<div id="content" class="span12"  role="main">
		<section class="post-box">
			<div class="pull-right">
				<?php //author_list(); ?>
			</div>
			<?php //get_template_part('content', 'single_sm_authors'); ?>
			


			<?php //get_template_part('inc/pagination'); ?>						
			
	
			
			
			
		</section>
	</div><!-- End Content row -->
</div><!-- /row -->
	
	
		
	
	
</div> <!-- /container -->
<?php get_footer(); ?>
