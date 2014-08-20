<?php get_header(); ?>
<div class="container page_body index">




			<section class="post-box">
				<div class="error">

	
	<h4>
The page you are looking for might have had its name changed, but perhaps you will find a book you like below, or you can search for what you were looking for:</h4>
					
					
						<?php //get_search_form(); ?>	
<h3 class="bottom">"...search, seek, find out: I'll warrant we'll unkennel the fox."</h3>						
						
		<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		    <div><label class="screen-reader-text hidden" for="s">Search for:</label>
		        <input type="text" value="" name="s" id="s" style="background-color: white;border: 1px solid #ddd;" />
		        <input type="submit" id="searchsubmit" value="Search" class="btn" style="margin-top: -7px;" />
		    </div>
		</form>
						
						
						
				</div>

			</section>








		<?php //get_template_part('/content/featured', 'reviews'); ?>
		
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