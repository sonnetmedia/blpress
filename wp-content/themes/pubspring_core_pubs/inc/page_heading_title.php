<div class="row-fluid row-page-header">
	<div class="span12"><?php // /* page heading puts the title in a styled box - well is extra styling */ ?>

<?php  if (is_home())   { ?>

		<h1 class="large large page-header inline"><?php wp_title("",true); ?></h1>
				<?php if ( is_page('979') ) {  echo '<h2 class="page-header inline">(<a href="/books/">cover view</a>)</h2>'; }  ?>		

<?php  }    ?>



<?php  if (is_archive())   { ?>
			<h1 class="page-header large inline">
				<?php wp_title("",true); ?></h1>
		<?php if ( is_post_type_archive('product') ) {  echo '<h2 class="page-header pull-right inline"><a href="/books-detailed-listing/" class="btn btn-small">detailed view</a></h2>'; }  ?>		

<?php  }    ?>


<?php  if (is_page())   { ?>

		<h1 class="large large page-header inline"><?php wp_title("",true); ?></h1>
				<?php if ( is_page('979') ) {  echo '<h2 class="page-header pull-right inline"><a href="/books/" class="btn btn-small">cover view</a></h2>'; }  ?>		

<?php  }    ?>



<?php  if ( is_single() ) { ?>
		<h1 class="large page-header inline"><?php wp_title("",true); ?></h1>
		<?php $subtitle = get_field('book_subtitle'); ?>
		<?php  if ($subtitle){    ?>
		&nbsp;&nbsp;<h2 class="page-header subtitle inline"><?php echo $subtitle; ?></h2>
		<?php  }    ?>
		
<?php  }    ?>



<?php  if (is_search()) {    ?>

		<h1 class="large page-header inline">
					<?php printf( __( 'Search results: %s', 'test' ), '<span>' . get_search_query() . '</span>' ); ?>
		
		</h1>

<?php  }    ?>

	</div>
</div>
