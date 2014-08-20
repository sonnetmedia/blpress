<div class="format-aside post">
		<a href="<?php echo get_permalink( $aside->ID ); ?>">
			<h3><?php echo get_the_title( $aside->ID ); ?></h3>
		</a>
		<?php if ( has_post_format( 'aside',  $aside->ID ) ) { 
		the_content($aside->ID ); }
		 ?>
</div>