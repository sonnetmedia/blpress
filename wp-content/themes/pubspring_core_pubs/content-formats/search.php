<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * The default template for displaying content
 */

	global $post;
  
?>

	<div class="box results-box">  
		<div class="box-inner">
	      
	
	    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
		    		<a href="<?php the_permalink(); ?>">
	    				<?php the_post_thumbnail('category-small', array('class' => 'image-shadow centered flow_left')); ?>
	    			</a>
	
	    <?php  	} 		?>
	    


		<?php  if ( 'tribe_events' == get_post_type() ){  echo 'Event: '; echo tribe_get_start_date($post->ID, true, 'D, M jS');
		  }
				elseif (  'post' == get_post_type()     ) { echo 'News & Extras';
				}
			?>

	    
	  		<?php if ( !has_post_format( 'status',  $post->ID ) ) { ?>  
				<h3 style="margin: 0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
				<?php  }    ?>
		    <?php 	
		    if ( 'post' == get_post_type() ){ echo '<br />';
		   // echo '<time class="updated sans" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('%s', 'pubspring'), get_the_time('F jS, Y'), get_the_time()) .'</time>';
		    }
		     ?>
	    
	    
			<small> <?php  the_excerpt();  ?></small>
	    
	   			 <br />
	    <a href="<?php the_permalink(); ?>" style="margin: 1em 0 0 .4em;" class="badge">more info</a>
		</div>
	</div><br /><br />
