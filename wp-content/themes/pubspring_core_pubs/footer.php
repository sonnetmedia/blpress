<?php //push div should remain to help keep footer on bottom on some sites ?>
		 <div class="push"></div>


		</div><!-- End wrapper -->		
<div id="footer">
<footer id="content-info" class="clearfix" role="contentinfo">
	<div class="container">
		<div class="row-fluid">

			<div class="span3">
			<?php //wp_nav_menu(array('theme_location' => 'utility_navigation', 'container' => false, 'menu_class' => 'nav nav-pills')); 	?>
			
<!--			
<a class="twitter-timeline" href="https://twitter.com/bellevuepress" data-widget-id="262263913708650497">Tweets by @bellevuepress</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
-->
<h3><?php bloginfo('name'); ?></h3>

<div class="white">
<?php //the_field('sm_client_address', 'options'); 

echo get_option('sm_client_address');
?>
</div>			
			</div>
			
			
			<div class="span3 hidden-phone">
			
			<h3>About Us</h3>
			<?php 
			    wp_nav_menu( array(
			'theme_location' => 'utility_navigation',
			'container' =>false,
			'menu_class' => 'footer_nav',
			'echo' => true,
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'depth' => 0,
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			
			'walker' => new Bootstrap_Walker_Nav_Menu())
			); ?>
			
			
			</div>
			
			
			
			
			<div class="span3">
			<h3>Connect with Us</h3>
			<?php global_social_links(); ?>
			</div>


			<div class="span3">
			<?php dynamic_sidebar('sidebar-footer'); ?>			
			<?php dynamic_sidebar('sidebar-frontpage'); ?>
			
			</div>
						
			
			
			
			
			
			
			
			
			
		</div><!--	/END ROW -->	


<div class="row-fluid">
<div class="span12">
<div class="pull-right">
	<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>&nbsp;&nbsp;&nbsp;
	<img alt="PubSpring Logo" src="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico" style="height:12px;padding-bottom:4px;" />
	site by <a href="http://sonnetmedia.net" title="Sonnet Media">sonnet media</a></p>

</div>
</div>
</div>








		
	</div>
</footer>
	</div>				

	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	
		
	<?php wp_footer(); ?>
	
	
	</div><!-- 	/inner-wrapper  -->
	
</body>
</html>