
<div class="navbanner subhead hidden-phone" id="overview">
  <div class="container">
  	<div class="row-fluid">
		<div class="span7">
			<h1 class="">
				<a class="brand" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
				<?php //bloginfo('name'); ?>
			<img src="http://blpress.org/wp-content/themes/ps_ch_blpress/images/blp_logo-883x129-363535_v2.png" style="max-width: 99%;" alt="Bellevue Literary Press"/>
			
			</a></h1>  	
		</div>
		
		
		<div class="span2 offset1" >
		
		<?php 
		    wp_nav_menu( array(
		'theme_location' => 'main_nav_1',
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

		<div class="span2">
		
		<?php 
		    wp_nav_menu( array(
		'theme_location' => 'main_nav_2',
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
		
	</div><!-- /END ROW -->
  </div>
</div>
