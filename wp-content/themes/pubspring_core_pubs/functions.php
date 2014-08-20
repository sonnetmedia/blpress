<?php

require_once('functions/hooks.php');
require_once('functions/pubspring-settings.php');
//BOOTSTRAP MENU
add_action( 'after_setup_theme', 'bootstrap_setup' );
	if ( ! function_exists( 'bootstrap_setup' ) ):
		function bootstrap_setup() {
		 	get_template_part('/inc/walker', 'bootstrap'); 
		}
	endif;
//END BOOTSTRAP MENU
/////////////GLOBAL OPTIONS PAGES/////////////////////////
//if ( function_exists("register_options_page") ) {
//    register_options_page('Social Media Accounts');
//    register_options_page('Global Information');
//}

//get_template_part('inc/functions','post_types');

function pubspring_setup() {
	// Add language supports. Please note that PubSpring Framework does not include language files.
	load_theme_textdomain('pubspring', get_template_directory() . '/lang');
	
		// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );
	
	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
//	add_theme_support('post-thumbnails');
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product' , 'sm_authors') );
	// set_post_thumbnail_size(150, 150, false);
	
	set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)	
	// additional image sizes

	add_image_size( 'category-thumb', 120, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'category-small', 220, 9999 ); //300 pixels wide (and unlimited height)	
	add_image_size( 'category-medium', 540, 9999 ); //300 pixels wide (and unlimited height)	
	add_image_size( 'category-large', 900, 9999 ); //300 pixels wide (and unlimited height)
	
	// Add post formarts supports. http://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('video', 'status'));
	
	// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
	add_theme_support('menus');
	register_nav_menus(array(
		'primary_navigation' => __('Primary Navigation', 'pubspring'),
		'utility_navigation' => __('Utility Navigation', 'pubspring')
	));	
}
add_action('after_setup_theme', 'pubspring_setup');

function pubspring_page_open_navbar( $visibility ) { ?>
	<!-- Navbar
	   ================================================== -->
	<div class="navbar navbar-fixed-top <?php echo $visibility; ?>">
	
		<?php get_template_part('nav', 'topbar'); ?>
	
	 </div>
	
<?php  }

add_action('pubspring_setup_page', 'pubspring_page_open_navbar', 3, 1);


function pubspring_page_open() { ?>

	<div class="wrapper" style="clear:both;">	

<?php }
add_action('pubspring_setup_page', 'pubspring_page_open', 5);


function pubspring_page_open_banner() { ?>

	<?php get_template_part('nav', 'banner'); ?>

<?php }
add_action('pubspring_setup_page', 'pubspring_page_open_banner', 10);


function pubspring_enqueue_scripts() {

wp_register_script('bootstrap-min', 
get_template_directory_uri() . '/javascript/bootstrap.min.js', array('jquery'), '2.2.0.', true);
wp_enqueue_script('bootstrap-min');
wp_register_script('jquery-smoothscroll', 
get_template_directory_uri() . '/javascript/jquery.smoothscroll.min.js', array('jquery'), '1.4.9', true);
wp_enqueue_script('jquery-smoothscroll');



	wp_register_script('flexslider', 
	get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '1.0.0.', true);
	wp_enqueue_script('flexslider');

	
}     
add_action('wp_enqueue_scripts', 'pubspring_enqueue_scripts');
// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
	  'id' => 'sidebar-global',
		'before_widget' => '<article id="%1$s" class="widget %2$s"><div class="sidebar-section">',
		'after_widget' => '</div></article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>'
	));
}
// create widget areas: sidebar, footer
$sidebars = array('Blog Sidebar');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
	  'id' => 'sidebar-blog',
		'before_widget' => '<article id="%1$s" class="widget %2$s"><div class="sidebar-section">',
		'after_widget' => '</div></article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>'
	));
}
$sidebars = array('Sidebar Alternate');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
	  'id' => 'sidebar-alternate',
		'before_widget' => '<article id="%1$s" class="widget %2$s"><div class="sidebar-section">',
		'after_widget' => '</div></article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>'
	));
}?><?php 
// return entry meta information for posts, used by multiple loops.
function pubspring_status_sharing() { ?>
<!-- AddThis Button BEGIN -->

<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=sonnetmedia"></script>
<!-- AddThis Button END -->

<?php 
}

function pubspring_book_sharing() {
	 ?><!-- AddThis Button BEGIN -->

<script type="text/javascript">
addthis.counter("#atcounter");
var addthis_config =
{
   ui_508_compliant: true
}

var addthis_share = 
{ 
// ...
    templates: {
                   twitter: 'Check out {{title}} {{url}}',
               }
}
</script>

<div class="addthis_toolbox addthis_default_style addthis_32x32_style" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>

<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=sonnetmedia"></script>
<!-- AddThis Button END -->
<br />

<a href="http://www.goodreads.com/update_status?isbn=0<?php the_field('isbn'); ?>&url=<?php the_permalink(); ?>" target="_blank"><img alt="Share on Goodreads" style="height:30px;" border="0" src="<?php echo get_template_directory_uri(); ?>/images/booksellers/goodreads-badge-add-plus-2d25bb0f32eeac8660c13a521cf00c8e.png" /></a>
<script src="http://www.goodreads.com/javascripts/widgets/update_status.js" type="text/javascript"></script>
<?php } 


/* Customized the output of caption, you can remove the filter to restore back to the WP default output. Courtesy of DevPress. http://devpress.com/blog/captions-in-wordpress/ */
add_filter( 'img_caption_shortcode', 'cleaner_caption', 10, 3 );

function cleaner_caption( $output, $attr, $content ) {

	/* We're not worried abut captions in feeds, so just return the output here. */
	if ( is_feed() )
		return $output;

	/* Set up the default arguments. */
	$defaults = array(
		'id' => '',
		'align' => 'alignnone',
		'width' => '',
		'caption' => ''
	);

	/* Merge the defaults with user input. */
	$attr = shortcode_atts( $defaults, $attr );

	/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
	if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
		return $content;

	/* Set up the attributes for the caption <div>. */
	$attributes = ' class="figure ' . esc_attr( $attr['align'] ) . '"';

	/* Open the caption <div>. */
	$output = '<figure' . $attributes .'>';

	/* Allow shortcodes for the content the caption was created for. */
	$output .= do_shortcode( $content );

	/* Append the caption text. */
	$output .= '<figcaption>' . $attr['caption'] . '</figcaption>';

	/* Close the caption </div>. */
	$output .= '</figure>';

	/* Return the formatted, clean caption. */
	return $output;
}
// Clean the output of attributes of images in editor. Courtesy of SitePoint. http://www.sitepoint.com/wordpress-change-img-tag-html/
function image_tag_class($class, $id, $align, $size) {
	$align = 'align' . esc_attr($align);
	return $align;
}
add_filter('get_image_tag_class', 'image_tag_class', 0, 4);
function image_tag($html, $id, $alt, $title) {
	return preg_replace(array(
			'/\s+width="\d+"/i',
			'/\s+height="\d+"/i',
			'/alt=""/i'
		),
		array(
			'',
			'',
			'',
			'alt="' . $title . '"'
		),
		$html);
}
add_filter('get_image_tag', 'image_tag', 0, 4);
//Hides iOS chrome on mobile safari for a more app-like experience on iPhones.
function add_ios_functions()
{ echo"<script>if(navigator.userAgent.indexOf('iPhone') != -1){addEventListener('load',function(){setTimeout(hideURLbar, 0);}, false);}function hideURLbar(){window.scrollTo(0, 1);}</script>";}
add_action('wp_head', 'add_ios_functions');
// Load up our theme options page and related code.
//	require( get_template_directory() . '/inc/theme-options.php' );
	
// img unautop, Courtesy of Interconnectit http://interconnectit.com/2175/how-to-remove-p-tags-from-images-in-wordpress/
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<figure>$1</figure>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );

  // tell the TinyMCE editor to use editor-style.css
  // if you have issues with getting the editor to show your changes then
  // use this instead: add_editor_style('editor-style.css?' . time());
  add_editor_style('editor-style.css');

//Add support for captioned images
function featured_image_with_caption_small() {
	echo '<div class="featured-image flow_left category-small">';
	the_post_thumbnail('category-small', array('class' => 'shadow'));
	echo '<span class="caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';
	echo '</div>';
}
function featured_image_with_caption_medium() {
	echo '<div class="featured-image flow_left category-medium">';
	the_post_thumbnail('category-medium', array('class' => 'shadow'));
	echo '<span class="caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';
	echo '</div>';
}
function featured_image_with_caption_large() {
	echo '<div class="featured-image flow_left category-large">';
	the_post_thumbnail('category-large', array('class' => 'image-shadow'));
	echo '<br /><span class="caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';
	echo '</div>';
}

//--- ADMIN COLUMNS ----

// ADD NEW COLUMN  
add_filter( 'manage_edit-sm_reviews_columns', 'sm_reviews_columns' ) ;

function sm_reviews_columns( $columns ) {

	$columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => __( 'Title/Reference' ),
		'related_books' => __( 'Book' ),
//		'review_attribution' => __( 'Attribution' ),
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


// Converts ISBN-13 to ISBN-10
// Leaves ISBN-10 numbers (or anything else not matching 13 consecutive numbers) alone
function ISBN13toISBN10($isbn) {
    if (preg_match('/^\d{3}(\d{9})\d$/', $isbn, $m)) {
        $sequence = $m[1];
        $sum = 0;
        $mul = 10;
        for ($i = 0; $i < 9; $i++) {
            $sum = $sum + ($mul * (int) $sequence{$i});
            $mul--;
        }
        $mod = 11 - ($sum%11);
        if ($mod == 10) {
            $mod = "X";
        }
        else if ($mod == 11) {
            $mod = 0;
        }
        $isbn = $sequence.$mod;
    }
    return $isbn;
}


function theme_styles()  
{ 
  // Register the style like this for a theme:  
  // (First the unique name for the style (custom-style) then the src, 
  // then dependencies and ver no. and media type)
  wp_register_style( 'print-styles', 
    get_template_directory_uri() . '/style_print.css', 
    array(), 
    '120820', 
    'print' );

  // enqueing:
  wp_enqueue_style( 'print-styles' );
}
add_action('wp_enqueue_scripts', 'theme_styles');


function mod_woocommerce() {

get_template_part('functions','woocommerce');
}

add_action('after_setup_theme','mod_woocommerce');






//THE FOLLOWING MANIPULATES THE QUERY SO WE CAN USE FUTURE POSTS (PUB DATE FOR BOOKS)

// SHOWS FUTURE POSTS ON ARCHIVE PAGES

//SEEING IF WE DO THIS WITH QUERY POSTS - 
//add_action( 'pre_get_posts', 'show_upcoming_books' );
//function show_upcoming_books( $query ) { if ( ! is_admin() ) { $query->query_vars['post_status'] = array( 'publish', 'future'  ); return; } }

// SHOWS FUTURE POSTS ON SINGLE PAGES
add_filter('the_posts', 'show_future_posts');

function show_future_posts($posts)
{
   global $wp_query, $wpdb;

   if(is_single() && $wp_query->post_count == 0)
   {
      $posts = $wpdb->get_results($wp_query->request);
   }
   return $posts;
}

function SearchFilter($query) {
  if ($query->is_search) {
    // Insert the specific post type you want to search
    $query->set('post_type', array( 'product', 'sm_authors', 'post', 'tribe_events'));
    $query->set('post_status', array('publish','future'));	
    	
//    $query->set( 'orderby', 'post_type' );
  }
  return $query;
}
// This filter will jump into the loop and arrange our results before they're returned
add_filter('pre_get_posts','SearchFilter');
get_template_part('inc/widget_books');



//////// CREATE THE BUTTONS ON THE FRONT-END (RIGHT NOW FOR FB AND TWITTER ONLY)
function show_social_buttons() { ?>
<ul id="social_buttons" class="hidden-phone hidden-tablet">	
	<?php  
	if(get_field('sm_social_accounts', 'options'))
	{
		while(the_repeater_field('sm_social_accounts', 'options'))
		{
		echo '<li id="'.  get_sub_field('sm_social_account_name') .'_icon">';
		echo '<a href="https://' .  get_sub_field('sm_social_account_name') .'.com/' .  get_sub_field('sm_social_user_name') . '">'.  get_sub_field('sm_social_account_name') .'</a>';
		echo '</li>';
		}
	}    
	?>
	</ul>
<?php  }
add_action( 'page_items', 'show_social_buttons', 10 );

/////////////////////////SEO META TAGS/////////////////////////////

function yoast_change_opengraph_type( $type ) {
  if ( 'product' == get_post_type() ) {
    return 'book';
    }
    
    if ( is_front_page() ){
      return 'website';
    }
    
    
}
add_filter( 'wpseo_opengraph_type', 'yoast_change_opengraph_type', 10, 1 );

add_filter('wpseo_title','sm_custom_titles');
function sm_custom_titles($title) {
	if(tribe_is_event() && !tribe_is_day() && !is_single()) {
		$title = 'Upcoming Events ';
	}
	return $title;
}



function sm_book_og_meta_tags() { 
  if ( 'product' == get_post_type() ){ ?>
<meta property="book:release_date" content="<?php the_time('Y-m-d') ?>">
<?php  //<meta property="book:author" content="Eduardo Halfn">     ?>
<meta property="book:isbn" content="<?php global $post; echo get_post_meta($post->ID, '_sku', true);    ?>">

<?php //<meta property="book:tag" content="// $category = get_the_category($post->ID); echo $category[0]->cat_name; ">?>

<?php
} }
add_action('wp_head', 'sm_book_og_meta_tags');
 

 

 function get_related_author_and_books() {
		 $posts = get_field('related_author_or_book');
			if( $posts ):  $related_entries = array();   
	?>on
				<?php foreach( $posts as $post_object): ?>
						<?php $related_entries [] = '<li class="related_entries"><a href="' . get_permalink($post_object->ID) . '">' . get_the_title($post_object->ID) . '</a></li>'; ?>
				<?php endforeach; ?>
				<?php  echo implode(', ', $related_entries); ?>
		<?php endif; ?>
<?php } 
add_action('pubspring_post_related', 'get_related_author_and_books', 10);




// variation_query  and get_parent_post_by_sku source: http://www.mattyl.co.uk/2012/12/11/woocommerce-plugin-to-search-products-by-sku/
add_filter('the_posts', 'variation_query');

function variation_query($posts, $query = false) {
    if (is_search()) {
        //get_search_query does sanitization
        $matchedSku = get_parent_post_by_sku(get_search_query());

        if ($matchedSku) {
            $posts[] = $matchedSku;
        }

        return $posts;
    }

    return $posts;
}

function get_parent_post_by_sku($sku) {
    //Check for 
    global $wpdb;
    
    //Search for the sku of a variation and return the parent.
    $product_id = $wpdb->get_var($wpdb->prepare(
                    "
          SELECT post_parent FROM $wpdb->posts as p
          
          join $wpdb->postmeta pm
          on p.ID = pm.post_id
          WHERE meta_key='_sku'
          AND meta_value='%s'
          LIMIT 1", $sku)
    );
    
    //If not variation try a regular product sku
    if(!$product_id)
    {
        $product_id = $wpdb->get_var('SELECT post_id FROM '.$wpdb->postmeta.' WHERE meta_key="_sku" AND meta_value LIKE "%'.$sku.'%" limit 1;');
        
    }
        
    if ($product_id) {
        return get_post($product_id);
    }
    
    return null;
}
//END variation_query  and get_parent_post_by_sku 
