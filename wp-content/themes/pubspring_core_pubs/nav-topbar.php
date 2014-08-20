<!-- Navbar
   ================================================== -->
     <div class="navbar-inner">
       <div class="container">
       <h1 class="">
       	<a class="brand" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
       	<?php //bloginfo('name'); ?>
       <img src="/wp-content/themes/ps_ch_blpress/images/blp_logo-883x129-363535_v2.png" style="max-width: 99%;" alt="Logo"/>
       
       </a></h1>  	
       
         <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
           MENU
         </button>
         <div class="nav-collapse collapse" style="display: ;">
					<?php 
					    wp_nav_menu( array(
					'theme_location' => 'primary_navigation',
					'container' =>false,
					'menu_class' => 'nav',
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
       </div>
     </div>
   </div>
   
   
   
<div class="navbar navbar-static-top hidden-phone">
	<div class="navbar-inner">	
		<div class="container">
			<div class="row">


			
<form role="search" method="get" id="searchform" class="navbar-search pull-right" action="<?php echo home_url('/'); ?>">
	<label class="hide" for="s"><?php _e('Search for:', 'pubspring'); ?></label>	
		  <input type="text" name="s" id="s" class="search-query" placeholder="<?php _e('Search', 'pubspring'); ?>" style="font-size: 11px;padding-bottom: 0;padding-top: 0;">
</form>
<div class="span1 pull-right">
	<img src="/wp-content/themes/ps_ch_blpress/images/search_icon-40x40-363535.png" style="float: right;margin-top: 5px;height: 22px;width: 22px;" alt="Search Indicator"/>
</div>


			
			
			</div>
		</div>
	</div>
