<?php
/*
Plugin Name: SM Sidebar Books Widget
Author: Bud Parr
Author URI: http://sonnetmedia.net
Description: Add book covers to the sidebar
*/

//BP need to add options for short description, shadow vs box, and buy buttons or not, and perhaps language for buy buttons

class Sm_books_widget extends WP_Widget
{


function Sm_books_widget()
  {
    $widget_ops = array('classname' => 'Sm_books_widget', 'description' => 'Displays a book image' );
    $this->WP_Widget('Sm_books_widget', 'Books', $widget_ops);
  }
  
  
  
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }
  
  
  
  
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
  
  
  
  
  
  
  
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
    
    
    
    
    
    
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
    // WIDGET CODE GOES HERE
 
 global $post;
 
 $args = array(
	'post_type'=> 'product',	
	'posts_per_page' => 2, 
	'orderby' => 'date' , 
	'post_status' => array( 'publish', 'future'  ) ,
	'order' => 'desc', 
'meta_query' => array(
    array(
      'key' => '_featured',
      'value' => 'yes',
    )
  )

);








 
 
query_posts($args);
if (have_posts()) : 


echo '<ul class="thumbnails">';



	while (have_posts()) : the_post(); 
	
?>




 <li>

		<div class="thumbnail">

<a class="hidden-phone" href="<?php the_permalink(); ?>" >
				
				
						<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				?>
				<?php the_post_thumbnail('category-small', array('class' => 'image-shadow max100')); ?> 
		<?php  	
				} 
				?>

								
				</a>





				<div class="caption">

<?php  get_template_part('inc/button', 'buy_retailers');    ?>
						
				</div>


		</div>	
	</li>


<?
	endwhile;
	echo "</ul>";
endif; 
wp_reset_query();




 
    echo $after_widget;
  }

}

add_action( 'widgets_init', create_function('', 'return register_widget("Sm_books_widget");') );

