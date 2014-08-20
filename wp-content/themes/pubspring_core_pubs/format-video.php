<div class="format-video">
			<?php  echo $format;    ?>
	<?php if ( has_post_format( 'video',  $post->ID ) ) { 
	
				$video_post = wp_oembed_get(get_post_meta($post->ID, '_format_video_embed', true)); 
					echo $video_post;
			}
	 ?>				
 </div>
