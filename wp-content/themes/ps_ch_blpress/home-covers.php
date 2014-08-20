<?php 
// Template Name: Home - Covers New and Forthcoming
	get_header(); ?>
<div class="container page_body">
	<div class="row-fluid">
		<div class="span9">
			<div class="row-fluid">
				<?php  get_template_part('content', 'books_forthcoming');    ?>
			</div><!--	/END ROW -->						
		</div><!--	/END span9 -->	
		<div class="span3">
			<div class="row-fluid shadow-light mb1 white_box">
				<div class="span10 offset1" >
					<?php  get_template_part('content/home', 'news_slider');    ?>		
				</div>
			</div>
			<div class="box red_background image-shadow visible-desktop" style="margin-bottom: 2em;">
				<div class="box_interior">
					<?php dynamic_sidebar('sidebar-frontpage'); ?>
				</div>
			</div>
		</div><!-- /END span3 -->
	</div>
<!-- /END top ROW -->	
	<div class="row-fluid row_module">
			<?php get_template_part( 'content/home', 'books_list' ); ?>
	</div>
	<div class="row-fluid">
			<?php get_template_part('/content/home', 'featured_reviews'); ?>
			<?php //get_template_part('/content/featured', 'testimonials'); ?>
	</div>
	<div class="row-fluid row-even">
		<div class="span8 mb1">
			<aside>
				<h3>From our Authors</h3>
	
				<div class="box red_background image-shadow">
					<div class="box_interior">
						<?php  get_template_part('content/home','author_testimonials');    ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</aside>	
		</div>
		<div class="span4 mb1">
		<aside>
			<h3>Award-Winning Titles</h3>
			<div class="box bluegreen image-shadow">
				<div class="box_interior">
					<?php  get_template_part('content/featured','book_award_winning');    ?>
				</div>
					<div class="clearfix"></div>
			</div>
		</aside>
		</div>
	</div>
</div><!--  /container page_body  -->		
<?php get_footer(); ?>