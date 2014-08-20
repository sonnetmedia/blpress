<?php  
// Pull in variations

$parent_sku = get_field('_sku');  


$related_posts = get_children( array( 
  'post_parent' => $post->ID,  
  'post_type' => 'product_variation'
    )
  ); 
  if( $related_posts ): $count = 0;
    foreach( $related_posts as $related_post ): setup_postdata($related_post);
      $price = get_post_meta($related_post->ID, '_price', true);
      $height = get_post_meta($related_post->ID, '_height', true);
      $width = get_post_meta($related_post->ID, '_width', true);
      $isbn = get_post_meta($related_post->ID, '_sku', true);
      $attribute_pa_binding = get_post_meta($related_post->ID, 'attribute_pa_binding', true);

//Output meta data

     //convert attribute slugs to human readable headings (ebook, hardcover, etc) 
      $str = ucwords(str_replace("-", " ", "$attribute_pa_binding"));
      echo $str;
      echo '<div class="small"><p>';
        if($price != '') {
          echo 'List Price US $' . $price . '<br />';
        } 
        if($width != '' && $height != '') {
          echo 'Trim Size (H x W): ' .$width . ' x '.$height. '<br />';
        } 
        
        if($isbn != '') {
          echo 'ISBN: '.$isbn . ' ';
        } 

        else{
          echo 'ISBN: '.$parent_sku . ' ';
        }

      echo '</p><br /></div>';
    endforeach; 
  endif; wp_reset_query();
?>