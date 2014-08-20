<?php 



function pubspring_page_open_navbar( $visibility ) { ?>
	<!-- Navbar
	   ================================================== -->
	<div class="navbar navbar-fixed-topTK navbar-static-top <?php echo $visibility; ?>" role="navigation">
	
		<?php get_template_part('/nav/nav', 'topbar'); ?>
	
	 </div>
	
<?php  }

add_action('pubspring_setup_page', 'pubspring_page_open_navbar', 3, 1);


function pubspring_page_open() { ?>

	<div class="wrapper" style="clear:both;">	

<?php }
add_action('pubspring_setup_page', 'pubspring_page_open', 5);


function pubspring_page_open_banner() { ?>

	<?php get_template_part('/nav/nav', 'banner'); ?>

<?php }
add_action('pubspring_setup_page', 'pubspring_page_open_banner', 10);
