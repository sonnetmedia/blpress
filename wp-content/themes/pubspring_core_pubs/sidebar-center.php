<div class="sidebarf" role="complementary">

<?php 
// If we are not on a regular page, call the blog widget on top of the global widget	if (is_home()) { dynamic_sidebar('sidebar-blog');  } elseif (is_single()) { dynamic_sidebar('sidebar-blog');  }?>

<?php
	dynamic_sidebar('sidebar-alternate'); 
?>

</div><!-- /#sidebar -->
		






