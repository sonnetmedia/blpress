<div class="format-status post">
<?php  //var_dump($status);    ?>	
		<?php if ( has_post_format( 'status',  $post->ID ) ) { 
		the_content($post->ID ); 
				pubspring_status_sharing();
		}
		 ?>
</div>