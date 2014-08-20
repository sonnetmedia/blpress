<ul class="catlist-inline">
<?php $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'exclude'            => '',
	'hierarchical'       => true,
	'title_li'           => __( '' ),
	'show_option_none'   => __('No categories'),
	'number'             => null,
	'echo'               => 1,
	'taxonomy'           => 'category',
	'walker'             => null
); ?>

 <?php wp_list_categories( $args ); ?> 
 </ul>
