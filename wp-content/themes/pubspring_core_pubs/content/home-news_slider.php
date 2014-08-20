<?php $query = new WP_Query( array( 'posts_per_page' => 5, 'tax_query' => array( array( 'taxonomy' => 'post_format', 'field' => 'slug', 'terms' => array('post-format-status'))))); 
	$count_news = 0
?>
<?php if ( $query->have_posts()) : ?>
	<div class="flexslider">
		<h2 style="margin-top: 10px;">Latest News</h2>
		<ul class="slides" style="margin-top: 0;padding-top: 0;">
<?php while ($query->have_posts()) : $query->the_post(); $count_news++; ?>
			<li <?php if ( $count_news > 1   ){echo 'style="display:none;"';}?>>
				<?php the_content();  ?>
			</li>
<?php endwhile; ?>
		 </ul>
	</div>
<?php endif;// End the loop ?>
