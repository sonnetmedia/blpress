<?php get_header(); ?>
<div class="container page_body index">
		<?php //get_template_part('/content/featured', 'reviews'); ?>
	<?php get_template_part('/inc/page_heading_title'); ?>
	<div class="row-fluid">

<?php  //CONTENT    ?>

<div id="content" class="span7" role="main">		
<?php if ( have_posts() ) : ?>
	<?php /* Start the Loop */ ?>
	
	<div class="">
	<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>
	
				<?php endwhile; ?>
	</div>
				<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>
	
					<?php get_template_part( 'no-results', 'index' ); ?>
	
				<?php endif; ?>
	
	
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