<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
<!-- <header><h1 class="entry-title" style="margin-bottom: .25em;"><?php the_title(); ?></h1></header>-->
<?php  			get_template_part('/inc/page_heading_title'); 	    ?>
	<div class="entry-content">
		<div class="span3">									
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
					<?php //the_post_thumbnail('full', array('class' => 'image-shadow mw97'));
						featured_image_with_caption_large();
					 ?> 
			<?php }	?>
			
			

<?php  
 //Publication Date
 echo '<br /><p class="sans small">';
if($post->post_status == 'future') { 
    echo 'Available '; 
    the_time('M d, Y'); 
    echo '</p>';
  } 

//Pull the page count for the main title, not variation
$page_count = get_field('sm_book_page_count');  
  if ( $page_count ) {
    echo '<div class="small"><p>'.$page_count . ' pages</p></div>';
    }



?>




<?php  
			 get_template_part('/content-loops/product-meta-variations'); 
				//get_template_part('/content-snippets/meta_pubdate_future');   		 
				//get_template_part('/inc/post', 'meta');   		 
				
		    ?>



			
<hr />
<?php pubspring_book_sharing(); ?>

		</div>

		<div class="span7">
		
						  		<?php  get_template_part('/content/related-reviews');     ?>
		
		<?php  		 	//get_template_part('/content/featured', 'reviews');     ?>
			<ul class="nav nav-tabs" id="product-single-tabs">
			  <li class="active"><a href="#home">Synopsis</a></li>
				 <?php 
				 //ONLY SHOW THE EXCERPT TAB IF THERE IS AN EXCERPT
				 $excerpt = get_field('sm_book_excerpt');
				 if ($excerpt) { ?>
				 	<li class="attributes_tab"><a href="#excerpt">Excerpt</a></li>
				 	<?php } ?>
				 	
				 	
		 
		<!--			<li class="attributes_tab"><a href="#reviews">Reviews</a></li>-->

				 
		  	</ul>
	 
			 <?php //CONTENT FOR TABS ?>
			<div class="tab-content">
			  <div class="tab-pane active" id="home">
				  <div class="synopsis">
				  
				  		<?php  //get_template_part('/content-loops/sm_reviews-related');     ?>
				  
				  	<?php the_content(); ?>
				  </div>
			  </div>
			 <div class="tab-pane" id="excerpt">
				  <div class="excerpt">
					  <h2> Excerpt from <em><?php the_title(); ?></em></h2>
				  	<?php 
					  	if ($excerpt) {
					  		echo '<div class="excerpt">'.$excerpt.'</div>';
					  		echo '<hr />';
					  	}	  	
				  	
				  	 ?>
				  </div>
			</div>
		    <div class="tab-pane" id="reviews">
				  <div class="reviews">
				  						<?php  //get_template_part('/content/related-reviews');   		     ?>
						<?php  get_template_part('/content-loops/sm_reviews', 'related_list');   		     ?>
				  </div>
			</div>
		</div>
	</div>
			
		<div class="span2">
		<?php  
		get_template_part('/content-snippets/meta', 'pubdate_future');   		 
		get_template_part('/content-snippets/button-buy_retailers');  


		//book_single_right_sidebar();
		 
		get_template_part('/content-snippets/product', 'related_author');   
//	get_template_part('/events/events', 'related');   
				 get_template_part('/content/related', 'events');   
		
		    ?>
		</div>
			
			
			
		</div>
</article>	
<?php endwhile; // End the loop ?>

<style>

.row-border{margin-top: 3em;
			border-top: 1px solid #e4e4e4;
}

.quote_attributionTK {
display: inline-block;
	margin-bottom: 3em;
}

</style>

<?php  
	if (! is_archive())   { 

		echo '<div class="row row-borderTK clear">';
			echo '<div class="span3">';
					// pubspring_book_sharing(); moving book sharing to underneath cover
						get_template_part('/content-loops/statuses', 'related'); 
														
			echo '</div>'; // close span4
			echo '<div class="span7">'; 
					get_template_part('/content-loops/posts', 'related'); 
			echo '</div></div>'; // close span4
			echo '<div class="row"><div class="span12">'; 
						get_template_part('/content/related', 'books'); 								
			echo '</div>'; // close span4	
		echo '</div>'; // close row
	}


    ?>





