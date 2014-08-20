<?php 
register_post_type('sm_reviews', array(	'label' => 'Reviews','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'reviews'),'query_var' => true,'has_archive' => true,'exclude_from_search' => false,'menu_position' => 5,'supports' => array('title','editor','excerpt',),'labels' => array (
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

//TAXONOMIES
register_taxonomy('sm_reviews_cat',array (
  0 => 'sm_reviews',
),array( 'hierarchical' => true, 'label' => 'Review Categories','show_ui' => true,'query_var' => true,'rewrite' => array('slug' => ''),'singular_label' => 'sm_reviews_cat') );

register_taxonomy('sm_internal_tags',array (
  0 => 'product',
  1 => 'product_variation',
),array( 'hierarchical' => false, 'label' => 'Internal Tags','show_ui' => true,'query_var' => true,'rewrite' => array('slug' => ''),'singular_label' => 'Tag') );

////////////// CUSTOM FIELDS
/**
 * Activate Add-ons
 * Here you can enter your activation codes to unlock Add-ons to use in your theme. 
 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes. 
 * Use the commented out code to update the database with your activation code. 
 * You may place this code inside an IF statement that only runs on theme activation.
 */ 
 
if(!get_option('acf_repeater_ac')) update_option('acf_repeater_ac', "QJF7-L4IX-UCNP-RF2W");
if(!get_option('acf_options_page_ac')) update_option('acf_options_page_ac', "OPN8-FA4J-Y2LW-81LS");// if(!get_option('acf_flexible_content_ac')) update_option('acf_flexible_content_ac', "xxxx-xxxx-xxxx-xxxx");
// if(!get_option('acf_gallery_ac')) update_option('acf_gallery_ac', "xxxx-xxxx-xxxx-xxxx");


/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */

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
			1 => 
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
			2 => 
			array (
				'key' => 'field_507b60072333c',
				'label' => 'Slideshow',
				'name' => 'sm_slideshow',
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
