<?php 
//this is a full page template, which is the core template for this theme
// Template Name: Books Archive Detail
get_header(); ?>
<div class="container page_body index">
	<?php get_template_part('/inc/page_heading_title'); ?>



<div class="row-fluid">

		<div id="content" class="span12" role="main">	
		<style>
		img.centered{
			margin-top: 1em;
			margin-left: .4em;
			}
		</style>


<?php 
//pulls from the books post type for the books post type archive-books
	$books_list_args = array( 
	'post_type' => 'product', 
	'posts_per_page' => -1, 
	'orderby' => 'title' , 
	'order' => 'asc',
	     'meta_key' => '_thumbnail_id',
	'post_status' => array( 'publish', 'future'  ) 
	);
	
	$books_list = new WP_Query( $books_list_args );
if ( $books_list->have_posts() ) : 


while ( $books_list->have_posts() ) : $books_list->the_post();

$excerpt =   get_the_excerpt();    
$title =   get_the_title();    

    ?>
    
      <div class="img-polaroid detail_box">  
      
      <div class="span3">

    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
    		
	    		<a href="<?php the_permalink(); ?>">
    				<?php the_post_thumbnail('category-thumb', array('class' => 'image-shadow centered')); ?>
    			</a>

    <?php  	} 		?><br />
    <a href="<?php the_permalink(); ?>" style="margin: 1em 0 0 .4em;" class="badge">more info</a>
    
    </div>
    
    <div class="span9" style="padding-right: .75em;">
    <p class="red"><?php  get_template_part('inc/post','meta_pubdate_future');    ?>    </p>
    <h3 style="line-height: 100%;margin: 0;">
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>    
    
	<?php //pull related author
	

		$theauthors = get_field('related_author'); 
		if( $theauthors ):  $theauthors_list = array(); ?>
			<?php foreach( $theauthors as $post ): ?>
				<?php $theauthors_list [] = '<a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a>'; ?>
			<?php endforeach; ?>
				<span style="font-size: 80%;">by <?php  echo implode(', ', $theauthors_list); ?></span></h3>
		<?php endif;    wp_reset_postdata();
			//END related author 	?>
    	 
    

    
    
<small> <?php  echo $excerpt;  ?></small>
    
    

    
    </div>
    
    
    
    
    </div>
    
	
<?php endwhile; 

	endif;
   wp_reset_postdata();
  ?>





































				

				
				

		</div><!-- /END #container -->
	</div><!-- /row -->
 </div> <!-- /container -->


<?php get_footer(); ?>