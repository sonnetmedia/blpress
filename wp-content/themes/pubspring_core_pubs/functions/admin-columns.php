<?php
//--- ADMIN COLUMNS ----
// ADD NEW COLUMN  
add_filter( 'manage_edit-sm_reviews_columns', 'sm_reviews_columns' ) ;

function sm_reviews_columns( $columns ) {

	$columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => __( 'Title/Reference' ),
		'related_books' => __( 'Book' ),
		'review_attribution' => __( 'Attribution' ),
	);
	return $columns;
}

function custom_columns( $column, $post_id ) {
  switch ( $column ) {

		case "related_books":
	$related_books = get_field('related_author_or_book'); 
		if( $related_books ): ?>
			<?php foreach( $related_books as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<?php echo  get_the_title($post->ID); ?>
			<?php endforeach; ?>
	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif;
	  break;
	  
	      case "review_attribution":
      echo get_post_meta( $post_id, 'attribution', true);
      break;

	      case "publications":
      echo get_post_meta( $post_id, 'publication', true);
      break;
  }
}

add_action( "manage_posts_custom_column", "custom_columns", 10, 2 );
//--- END ADMIN COLUMNS ----