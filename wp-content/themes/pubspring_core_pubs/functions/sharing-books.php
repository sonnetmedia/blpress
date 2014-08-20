<?php
function pubspring_book_sharing() { ?>
	<!-- AddThis Button BEGIN -->
	<script type="text/javascript">
		addthis.counter("#atcounter");
		var addthis_config =
		{
		   ui_508_compliant: true
		}
		var addthis_share = 
		{ 
		// ...
		    templates: {
		                   twitter: 'Check out {{title}} {{url}}',
		               }
		}
	</script>
	
	<div class="addthis_toolbox addthis_default_style addthis_32x32_style" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>">
		<a class="addthis_button_preferred_1"></a>
		<a class="addthis_button_preferred_2"></a>
		<a class="addthis_button_preferred_4"></a>
		<a class="addthis_button_compact"></a>
		<a class="addthis_counter addthis_bubble_style"></a>
	</div>
	<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
	<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=sonnetmedia"></script>
	<!-- AddThis Button END -->
	<br />
	<a href="http://www.goodreads.com/update_status?isbn=0<?php the_field('isbn'); ?>&url=<?php the_permalink(); ?>" target="_blank"><img alt="Share on Goodreads" style="height:30px;" border="0" src="<?php echo get_template_directory_uri(); ?>/images/booksellers/goodreads-badge-add-plus-2d25bb0f32eeac8660c13a521cf00c8e.png" /></a>
	<script src="http://www.goodreads.com/javascripts/widgets/update_status.js" type="text/javascript"></script>
<?php 
}