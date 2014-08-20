<?php
//WOOCOMMERCE OVERRIDES
define('WOOCOMMERCE_USE_CSS', false);

//CHANGES OPENING TAGS
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action('woocommerce_before_main_content', 'pubspring_wrapper_start', 10);
	function pubspring_wrapper_start() {

		echo '<div class="container page_body index">';
		
		 if (is_archive())   { 
		 	get_template_part('/content/featured', 'reviews'); 
	     	get_template_part('/inc/page_heading_title'); 
		 
		echo '<div class="row-fluid"><div id="content" class="span9" role="main"> <div id="container">';
		}
		else { 
			//get_template_part('/content/related', 'reviews'); 
			get_template_part('/inc/page_heading_title'); 	
		echo '<div class="row-fluid"><div id="content" class="span12" role="main"> <div id="container">';
	}

} //END pubspring_wrapper_start


remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action( 'woocommerce_after_main_content', 'pubspring_output_content_wrapper_end', 10 );

function pubspring_output_content_wrapper_end() {

echo '</div>'; //from 		woocommerce_get_template( 'shop/wrapper-end.php' );
echo '</div>'; //from 		woocommerce_get_template( 'shop/wrapper-end.php' );

	if (! is_archive())   { 

		echo '<div class="row-fluid row-border">';
			echo '<div class="span4">';
					// pubspring_book_sharing(); moving book sharing to underneath cover
						get_template_part('/content/related', 'statuses'); 
														
			echo '</div>'; // close span4
			echo '<div class="span6">'; 
					get_template_part('/content/related', 'posts'); 
			echo '</div></div>'; // close span4
			echo '<div class="row-fluid"><div class="span12">'; 
						get_template_part('/content/related', 'books'); 								
			echo '</div>'; // close span4	
		echo '</div>'; // close row
	}

}

//REMOVES SIDEBAR ADDS TAGS - HOPEFULLY ON ARCHIVE PAGES ONLY
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
add_action('woocommerce_sidebar', 'pubspring_get_sidebar', 10); 
	function pubspring_get_sidebar() {
		echo '<div class="span3">';
		  if (is_archive())   { 
				 get_template_part('/content/sidebar','book_tags'); 
	  }    
echo '	</div>'; //END span3
echo '</div></div> <!-- pubspring_get_sidebar -->';
}

// ADDS DIVS TO PRODUCT PAGE

add_action('woocommerce_before_single_product_summary', 'pubspring_interior_divs', 1);
function pubspring_interior_divs() {

	echo '<div class="span12" style="min-height:465PX ;">';
	echo '<div class="span4">';
	

} //END pubspring_interior_divs

// ADDS status TO PRODUCT PAGE, BELOW BOOK COVER IMAGE

//add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_price', 20);


//add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_meta', 20);

add_action('woocommerce_before_single_product_summary', 'pubspring_statuss', 30);


//add_action( 'woocommerce_before_single_product_summary', 'cj_show_dimensions', 20 );
 
// pubspring_statuss SHOWS INDIVIDUAL BOOK PAGE LEFT SIDEBAR BELOW TITLE
function pubspring_statuss() {
//			 get_template_part('/woocommerce/single-product/product-attributes');   		 
//product-attributes.php
			 get_template_part('/inc/post', 'meta_pubdate_future');   		 
			 get_template_part('/inc/post', 'meta');   		 

					pubspring_book_sharing();
			//TK get_template_part('/content/related', 'statuss'); 								
			 echo '</div>';
 			 echo '<div class="span6 pubspring_statuss">';
} //END pubspring_statuss

// ADDS status TO PRODUCT PAGE, BELOW BOOK COVER IMAGE
add_action('woocommerce_single_product_summary', 'pubspring_add_posts', 60);
function pubspring_add_posts() {
	//TK get_template_part('/content/related', 'posts'); 
				 echo '</div><!--  pubspring_add_posts --> ' ;  
} //END pubspring_add_posts



// ADDS SIDEBAR DIV WITH AUTHOR AND BUY BUTTON TO THE RIGHT HAND SIDE OF PROUDCT PAGE
add_action('woocommerce_after_single_product_summary', 'pubspring_add_sidebar', 1);
function pubspring_add_sidebar() {
		 echo '<div class="span2">';
		 
		 
			 get_template_part('/inc/post', 'meta_pubdate_future');   		 
			 get_template_part('/inc/button', 'buy_retailers');   
			 get_template_part('/content/product', 'related_author');   
			 get_template_part('/content/related', 'events');   
		 echo '</div>';
		 echo '</div> <!-- /pubspring_add_sidebar -->';
} //END pubspring_add_posts








//REMOVES COMMERCE DATA FROM SINGLE ENTRY PAGES
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);


//THE FOLLOWING MOVES THE DATA TABS TO THE CENTER COLUMN
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

// MOVES PRODUCT DATA TABS TO CENTER OF PAGE
add_action('woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

// REMOVES BUTTONS AND PRICE FROM UPSELLS
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

// REMOVES BREADCRUMBS
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );


//remove_filter('woocommerce_default_catalog_orderby');


/**
 * Tab Title filters do not work with WooCommerce 1.6.5.1 or lower
 * Please download this zip file http://cl.ly/2Y3S3D3M3C23 , extract the 3 files and copy them to :
 * wp-content/themes/YOUR_THEME/woocommerce/single-product/tabs/
 **/


add_filter ( 'woocommerce_product_description_tab_title', 'custom_product_description_tab_title' ) ;
function custom_product_description_tab_title() {
	return 'About the book'; // Change Me!
}

add_filter ( 'woocommerce_product_description_heading', 'custom_product_description_heading' ) ; //REMOVE THIS INSTEAD OF CHANGE
function custom_product_description_heading() {
	return 'Synopsis'; // Change Me!
}

add_filter ( 'woocommerce_product_additional_information_tab_title', 'custom_product_additional_information_tab_title' ) ;
function custom_product_additional_information_tab_title() {
	return 'Additional Information'; // Change Me!
}

add_filter ( 'woocommerce_product_additional_information_heading', 'custom_product_additional_information_heading' ) ;
function custom_product_additional_information_heading() {
	return 'Additional Information'; // Change Me!
}

add_filter ( 'woocommerce_reviews_tab_title', 'custom_product_reviews_tab_title' ) ;
function custom_product_reviews_tab_title() {
	return 'Reader Reviews'; // Change Me!
}

// Display 50 products per page
add_filter('loop_shop_per_page', create_function('$cols', 'return 50;'));