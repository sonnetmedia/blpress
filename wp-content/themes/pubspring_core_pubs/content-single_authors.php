<?php 
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>
<article>
	<div class="article_header">
		<h1 class="page-title">
			<?php echo $curauth->display_name; ?>
		</h1>
	</div><!-- //END HEADER -->
<?php 
$authorID = $curauth->ID; ?>
<br />
	<?php  get_posts();   ?>
		<?php $attachment_id = the_author_meta( 'user_image' , $authorID); // attachment ID ?>
		<br />
		<?php $image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array ?> 
 <br />
		<?php echo $image_attributes[0]; ?>
			<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">

			<?php the_author_meta( description, $authorID);?>

			<?php //the_author_meta( 'user_nicename' , $authorID); ?>

			<!--<a href="mailto:<?php the_author_meta( 'user_email' , $authorID); ?>?Subject=From the Jordan Center website" title="Email address"><?php the_author_meta( 'user_email' , $authorID); ?></a><br />-->


			<?php if(get_the_author_meta('user_url' , $authorID) != ''): ?>
			<a href="<?php the_author_meta( 'user_url' , $authorID); ?>" title="website"><?php the_author_meta( 'user_url' , $authorID); ?></a><br />
			<?php endif; ?>


			<?php if(get_the_author_meta('facebook' , $authorID) != ''): ?>
			<a href="http://facebook.com/<?php the_author_meta( 'facebook' , $authorID); ?>" title="Facebook">Facebook</a><br />
			<?php endif; ?>


			<?php if(get_the_author_meta('twitter' , $authorID) != ''): ?>
			<a href="http://twitter.com/<?php the_author_meta( 'twitter' , $authorID); ?>" title="Twitter">Twitter</a><br />
			<?php endif; ?>


<?php if ( have_posts() ) : ?>
	<h5 style="margin-bottom: 2em;"><?php _e('Articles by ', 'pubspring'); echo $curauth->display_name; ?></h5>	
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="entry-content">
				<section id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 2em;">
					<?php //the_category(' '); ?>
					<h2 class="title-list"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="excerpt">
							<?php if ( !empty( $post->post_excerpt ) ) : ?>
											<?php the_excerpt(); ?>
												<a href="<?php the_permalink(); ?>">Continue reading...</a>
									<?php else : ?>
											<?php the_content('Continue reading...'); ?>
									<?php endif; ?>
						</div>
	<div class="divider"></div>
	</section>	
	
		</div>

<?php endwhile;endif; // End the loop ?>
<footer>
	<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'pubspring'), 'after' => '</p></nav>' )); ?>
	<p><?php the_tags(); ?></p>
</footer>

	</article>