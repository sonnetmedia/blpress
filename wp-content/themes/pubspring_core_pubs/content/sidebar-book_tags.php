<ul class="catlist-inline">
 <?php wp_list_categories( array(
 		'taxonomy' =>'product_cat', 
'orderby'            => 'count',
'order'              => 'desc',
'style'              => 'list',
'show_count'         => 0,
'hide_empty'         => 1,
'use_desc_for_title' => 1,
'child_of'           => 0,
//'exclude'            => '1',
'hierarchical'       => false,
'title_li'           => __( '' ),
'show_option_none'   => __('No categories'),
'number'             => null,
'echo'               => 1,
'taxonomy'           => 'product_cat',
'walker'             => null

 		
 		) 
 		
 		); ?> 
 		
 		<hr />
 		<?php 
 		$args = array(
 		  'taxonomy'     => 'product_tag',
 		  'orderby'      => 'name',
 		  'order'		=> 'asc',
 		  'show_count'   => 0,
 		  'pad_counts'   => 0,
 		  'hierarchical' => 1,
 		  'title_li'     => '',
 		  'number' => null
 		);
 		?>
 	<?php wp_list_categories( $args ); ?>
 		</ul>


		
<?php  get_template_part('content/books','forthcoming_list');    ?>