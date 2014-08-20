<?php

// EMAIL ENCODE SHORTCODE
function email_encode_function( $atts, $content ){
	return '<a href="'.antispambot("mailto:".$content).'">'.antispambot($content).'</a>';
}
add_shortcode( 'email', 'email_encode_function' );

 function header_scripts() { ?>
<script type="text/javascript">
  (function() {
    var config = {
      kitId: 'yap0ist',
      scriptTimeout: 3000
    };
    var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
  })();
</script>
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21655936-40']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<link rel="prefetch" href="http://blpress.org/books/" />

<style type="text/css">
#mc_signup_submit {margin: 0 !important;width:100% !important;}
.post-type-archive-sm_authors {
	min-height: 1400px;
}
</style>

<?php }
add_action('wp_head', 'header_scripts');

// remove jetpack open graph tags
remove_action('wp_head','jetpack_og_tags');


function ps_ch_enqueue_scripts() {
	wp_register_script('masonry',
	get_template_directory_uri() . '/js/masonry.min.js', array('jquery'), '2.1.05.', true);
	wp_enqueue_script('masonry');

	wp_register_script('bootstrap-tooltip',
	get_template_directory_uri() . '/js/libs/bootstrap-tooltip.js', array('jquery'), '1.0.0.', true);
	wp_enqueue_script('bootstrap-tooltip');
}
add_action('wp_enqueue_scripts', 'ps_ch_enqueue_scripts');


function wp_extra_scripts() { ?>

<script type="text/javascript">
	jQuery(document).ready(function($){

$('.wp-post-image').tooltip();

$('.flexslider').flexslider({
    animation: "fade",
  });
  
  $('#product-single-tabs a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  });
  

$('a.show_hidden').click(function(){
	$(".hidden_stuff").slideToggle(600);
	$(".show_text").slideToggle(0);
});

$('#container-search').masonry({
  itemSelector: '.results-box',
  gutterWidth: 20
});

$('.gallery-masonry').imagesLoaded( function(){
    $('.container-authors').masonry({
     itemSelector: '.image-full',
     isAnimated: true,
     isFitWidth: true
    });
  });








 $('.row-even .box').each(function() {

   $el = $(this);
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {

     // we just came to a new row.  Set all the heights on the completed row
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }

     // set the variables for the new row
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);

   } else {

     // another div on the current row.  Add it to the list and check if it's taller
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);

  }

  // do the last row
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }

 });

});
</script>
<?php
}


add_action('wp_footer', 'wp_extra_scripts');





// create widget areas:
$sidebars = array('Front Page');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
	  'id' => 'sidebar-frontpage',
		'before_widget' => '<div class="frontpage">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

function custom_menus(){
register_nav_menus(array(
	'main_nav_1' => __('Main Nav 1', 'pubspring'),
	'main_nav_2' => __('Main Nav 2', 'pubspring')
));
}
add_action('after_setup_theme', 'custom_menus');

function pubspring_entry_meta() {
	 ?><div class="" style="margin-top: 3px;">

	 <?php $post_objects = get_field('related_event');

	 if( $post_objects ): ?>
	 <p class="quoteTK">Related Event:</p>
	     <ul class="upcoming">
	     <?php foreach( $post_objects as $post_object): ?>
	         <li>
	             <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
	         </li>
	     <?php endforeach; ?>
	     </ul>
	 <?php endif;

	 ?>


					</div>
	 <div class="meta" style="margin-bottom: 3em;">

				<div class="bar-frame">


					<div class="date">


						<p class="quote_small" style="display: none;">
						Published: <br />
<span class="day"><?php the_time('d') ?></span>-<span class="month"><?php the_time('M') ?></span>-<span class="year"><?php the_time('Y') ?></span>
						</p>
					</div>

					<div class="categories">

								<p class="quote_small"><?php the_tags(); ?></p>


								<hr />

						<p class="quote_small">
<?php
$categories = get_the_category();
$separator = ', ';
$output = '';
if($categories){
echo 'Category: ';
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
	}
echo trim($output, $separator);
}
?>
							</p>

					</div>
								</div>


<hr />

<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<!--<a class="addthis_button_preferred_3"></a>-->
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=sonnetmedia"></script>
<!-- AddThis Button END -->




			</div>
<?php }
function global_social_links() { ?>
<!-- AddThis Follow BEGIN -->
<div class="addthis_toolbox addthis_32x32_style addthis_default_style">
<a class="addthis_button_facebook_follow" addthis:userid="<?php echo get_option('sm_facebook'); ?>"></a>
<a class="addthis_button_twitter_follow" addthis:userid="<?php echo get_option('sm_twitter'); ?>"></a>
<a class="addthis_button_pinterest_follow" addthis:userid="<?php echo get_option('sm_pinterest'); ?>"></a>
<a class="addthis_button_youtube_follow" addthis:userid="bellevuepress"></a>

</div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=sonnetmedia"></script>
<!-- AddThis Follow END -->
<br />
<a href="http://www.goodreads.com/group/show/<?php echo get_option('sm_goodreads'); ?>">
<img src="/wp-content/themes/pubspring_core_pubs/images/icons/goodreads_icon_32x32-1e528ef775d77128b4395d344cbc7f8d.png" alt="" />
</a>
<a href="http://www.librarything.com/publisher/<?php echo get_option('sm_library_thing'); ?>">
<img src="/wp-content/themes/pubspring_core_pubs/images/icons/librarything40.png" style="height: 32px;" alt="" />
</a>
<?php }
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => '50a92aa3d91a1',
		'title' => 'Author Info',
		'fields' =>
		array (
			0 =>
			array (
				'key' => 'field_50606dd73e194',
				'label' => 'First Name',
				'name' => 'sm_author_first_name',
				'type' => 'text',
				'order_no' => '0',
				'instructions' => '',
				'required' => '1',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			1 =>
			array (
				'key' => 'field_50606dd73e734',
				'label' => 'Last Name',
				'name' => 'sm_author_last_name',
				'type' => 'text',
				'order_no' => '1',
				'instructions' => '',
				'required' => '1',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			2 =>
			array (
				'key' => 'field_50606dd73ec44',
				'label' => 'Website',
				'name' => 'sm_author_website',
				'type' => 'text',
				'order_no' => '2',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'default_value' => '',
				'formatting' => 'html',
			),
			3 =>
			array (
				'key' => 'field_50606dd73f160',
				'label' => 'Facebook Handle',
				'name' => 'sm_author_facebook',
				'type' => 'text',
				'order_no' => '3',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			4 =>
			array (
				'key' => 'field_50606dd73f669',
				'label' => 'Twitter Handle',
				'name' => 'sm_author_twitter',
				'type' => 'text',
				'order_no' => '4',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'default_value' => '',
				'formatting' => 'none',
			),
		),
		'location' =>
		array (
			'rules' =>
			array (
				0 =>
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'sm_authors',
					'order_no' => '0',
				),
			),
			'allorany' => 'all',
		),
		'options' =>
		array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' =>
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '50a92aa3da6c9',
		'title' => 'Book Info',
		'fields' =>
		array (
			0 =>
			array (
				'key' => 'field_50be29dc10881',
				'label' => 'Page Count',
				'name' => 'sm_book_page_count',
				'type' => 'text',
				'order_no' => '0',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'rules' =>
					array (
						0 =>
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			1 =>
			array (
				'key' => 'field_507adaee08818',
				'label' => 'Subtitle',
				'name' => 'book_subtitle',
				'type' => 'text',
				'order_no' => '0',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			2 =>
			array (
				'key' => 'field_5015285222fc6',
				'label' => 'Author',
				'name' => 'related_author',
				'type' => 'relationship',
				'order_no' => '1',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'post_type' =>
				array (
					0 => 'sm_authors',
				),
				'taxonomy' =>
				array (
					0 => 'all',
				),
				'max' => '',
			),



						3 =>
			array (
				'key' => 'field_50d6290c9ce2e',
				'label' => 'Reading Group Copy',
				'name' => 'sm_reading_group_copy',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => '0',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
				'the_content' => 'yes',
				'order_no' => '3',
			),
			4 =>
			array (
				'key' => 'field_50d6290c9d38b',
				'label' => 'Reading Group Discussion Questions',
				'name' => 'sm_reading_group_discussion',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => '0',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
				'the_content' => 'yes',
				'order_no' => '4',
			),
			5 =>
			array (
				'key' => 'field_50e45de22d360',
				'label' => 'Book Excerpt',
				'name' => 'sm_book_excerpt',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => '0',
				'default_value' => '',
				'formatting' => 'html',
				'order_no' => '5',
			),
			6 =>
			array (
				'key' => 'field_50e5e46d686db',
				'label' => 'Jacket Quotes',
				'name' => 'sm_jacket_quotes',
				'type' => 'textarea',
				'instructions' => 'Please do not edit.',
				'required' => '0',
				'default_value' => '',
				'formatting' => 'br',
				'order_no' => '6',
			),




		),
		'location' =>
		array (
			'rules' =>
			array (
				0 =>
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
					'order_no' => '0',
				),
			),
			'allorany' => 'all',
		),
		'options' =>
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' =>
			array (
			0 => 'custom_fields',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '50a92aa3db5b1',
		'title' => 'Global',
		'fields' =>
		array (
			0 =>
			array (
				'key' => 'field_50901c243bc45',
				'label' => 'Address',
				'name' => 'sm_client_address',
				'type' => 'wysiwyg',
				'order_no' => '0',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
				'the_content' => 'no',
			),
			1 =>
			array (
				'key' => 'field_50901c243c1e8',
				'label' => 'Mission Statement',
				'name' => 'sm_client_mission_statement',
				'type' => 'wysiwyg',
				'order_no' => '1',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
				'the_content' => 'no',
			),
		),
		'location' =>
		array (
			'rules' =>
			array (
				0 =>
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-global-information',
					'order_no' => '0',
				),
			),
			'allorany' => 'all',
		),
		'options' =>
		array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' =>
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '50a92aa3dc084',
		'title' => 'Posts Relationships',
		'fields' =>
		array (
			0 =>
			array (
				'key' => 'field_501ae77363690',
				'label' => 'Related Author or Book',
				'name' => 'related_author_or_book',
				'type' => 'relationship',
				'order_no' => '0',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'post_type' =>
				array (
					0 => 'sm_authors',
					1 => 'product',
				),
				'taxonomy' =>
				array (
					0 => 'all',
				),
				'max' => '',
			),
		),
		'location' =>
		array (
			'rules' =>
			array (
				0 =>
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => '0',
				),
				1 =>
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'tribe_events',
					'order_no' => '1',
				),
				2 =>
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'sm_reviews',
					'order_no' => '2',
				),
			),
			'allorany' => 'any',
		),
		'options' =>
		array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' =>
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '50a92aa3dc860',
		'title' => 'Reviews',
		'fields' =>
		array (
			0 =>
			array (
				'key' => 'field_5014a0253a694',
				'label' => 'Attribution',
				'name' => 'attribution',
				'type' => 'wysiwyg',
				'order_no' => '0',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
				'the_content' => 'yes',
			),
		),
		'location' =>
		array (
			'rules' =>
			array (
				0 =>
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'sm_reviews',
					'order_no' => '0',
				),
			),
			'allorany' => 'all',
		),
		'options' =>
		array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' =>
			array (
				0 => 'discussion',
				1 => 'comments',
				2 => 'slug',
				3 => 'format',
				4 => 'featured_image',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '50a92aa3dcfee',
		'title' => 'Social Media Data',
		'fields' =>
		array (
			0 =>
			array (
				'key' => 'field_509017a2ab826',
				'label' => 'Account Usernames',
				'name' => 'sm_social_accounts',
				'type' => 'repeater',
				'order_no' => '0',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'sub_fields' =>
				array (
					0 =>
					array (
						'choices' =>
						array (
							'facebook' => 'Facebook',
							'twitter' => 'Twitter',
							'pinterest' => 'Pinterest',
							'goodreads' => 'Good Reads',
							'library_thing' => 'Library Thing',
						),
						'key' => 'field_509017a2ab8b3',
						'label' => 'Account Name',
						'name' => 'sm_social_account_name',
						'type' => 'select',
						'instructions' => '',
						'column_width' => '33',
						'default_value' => '',
						'allow_null' => '1',
						'multiple' => '0',
						'order_no' => '0',
					),
					1 =>
					array (
						'key' => 'field_509018105c72b',
						'label' => 'User Name',
						'name' => 'sm_social_user_name',
						'type' => 'text',
						'instructions' => 'e.g. www.facebook.com/USERNAME',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'none',
						'order_no' => '1',
					),
				),
				'row_min' => '0',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Account',
			),
		),
		'location' =>
		array (
			'rules' =>
			array (
				0 =>
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-social-media-accounts',
					'order_no' => '0',
				),
			),
			'allorany' => 'all',
		),
		'options' =>
		array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' =>
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '50a92aa3dd7be',
		'title' => 'Review Info',
		'fields' =>
		array (
			0 =>
			array (
				'key' => 'field_5014a0a1a09b5',
				'label' => 'Link to Original',
				'name' => 'link_to_original',
				'type' => 'text',
				'order_no' => '0',
				'instructions' => '',
				'required' => '0',
				'conditional_logic' =>
				array (
					'status' => '0',
					'allorany' => 'all',
					'rules' => false,
				),
				'default_value' => '',
				'formatting' => 'none',
			),
		),
		'location' =>
		array (
			'rules' =>
			array (
				0 =>
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'sm_reviews',
					'order_no' => '0',
				),
			),
			'allorany' => 'all',
		),
		'options' =>
		array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' =>
			array (
			),
		),
		'menu_order' => 1,
	));
}
add_action( 'init', 'create_post_type' );
function create_post_type() {

register_post_type('sm_reviews', array(	'label' => 'Reviews','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'reviews'),'query_var' => true,'has_archive' => true,'exclude_from_search' => false,'menu_position' => 5,'supports' => array('title','editor','excerpt'),'labels' => array (
  'name' => 'Reviews',
  'singular_name' => 'Review',
  'menu_name' => 'Reviews',
  'add_new' => 'Add Review',
  'add_new_item' => 'Add New Review',
  'edit' => 'Edit',
  'edit_item' => 'Edit Review',
  'new_item' => 'New Review',
  'view' => 'View Review',
  'view_item' => 'View Review',
  'search_items' => 'Search Reviews',
  'not_found' => 'No Reviews Found',
  'not_found_in_trash' => 'No Reviews Found in Trash',
  'parent' => 'Parent Review',
),) );

register_post_type('sm_authors', array(	'label' => 'Authors','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'authors'),'query_var' => true,'has_archive' => true,'exclude_from_search' => false,'menu_position' => 5,'supports' => array('title','editor','excerpt','thumbnail',),'labels' => array (
  'name' => 'Authors',
  'singular_name' => 'Author',
  'menu_name' => 'Authors',
  'add_new' => 'Add Author',
  'add_new_item' => 'Add New Author',
  'edit' => 'Edit',
  'edit_item' => 'Edit Author',
  'new_item' => 'New Author',
  'view' => 'View Author',
  'view_item' => 'View Author',
  'search_items' => 'Search Authors',
  'not_found' => 'No Authors Found',
  'not_found_in_trash' => 'No Authors Found in Trash',
  'parent' => 'Parent Author',
),) );

}
add_action( 'init', 'create_sm_cust_taxonomies', 0 );
function create_sm_cust_taxonomies()
{
register_taxonomy('sm_internal_tags',array ('product'),array(
'hierarchical' => false,
'label' => 'Internal Tags',
'show_ui' => true,
'query_var' => true,
'rewrite' => array('slug' => 'other-keywords'),
'singular_label' => 'Tag')
);
}