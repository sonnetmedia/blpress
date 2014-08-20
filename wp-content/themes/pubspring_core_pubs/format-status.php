<div class="format-status post">
<?php  //var_dump($status);    ?>	
		<?php if ( has_post_format( 'status',  $status->ID ) ) { 
		the_content($status->ID ); 
		
				//pubspring_status_sharing();
		} ?>
			<ul class="post_list inline status">
		<?php do_action('pubspring_post_related'); ?>
		</ul>

</div>