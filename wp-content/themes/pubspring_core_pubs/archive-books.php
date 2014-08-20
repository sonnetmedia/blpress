<?php 
//this is a full page template, which is the core template for this theme
get_header(); ?>
<div class="container page_body index">
		<?php get_template_part('/content/featured', 'reviews'); ?>
	<?php get_template_part('/inc/page_heading_archive-books'); ?>




<div class="row-fluid">

		<div id="content" class="span9" role="main" >
		<?php  get_template_part('content', 'books_archive');    ?>
		</div><!-- /END #container -->
	
	<div class="span3">
	
<?php get_template_part('/content/sidebar','book_tags'); ?>

	</div>
	
	</div><!-- /row -->
 </div> <!-- /container -->


<?php get_footer(); ?>