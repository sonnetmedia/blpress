<form role="search" method="get" class="form-inline" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
    <label class="screen-reader-text hidden" for="s">Search:</label>
     <input class="input-large" type="search" data-provide="typeahead" value="Enter search term | hit return" onfocus="(value='')" name="s" id="s" placeholder="Enter search term | hit return" /> 
     <input type="hidden" id="searchsubmit" value="Search" class="btn" />
    </div>
</form>

<!--
<form class="form-inline" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url() ); ?>">
<div>
<label class="screen-reader-text hidden" for="s"><?php _e('Search for:', 'woocommerce'); ?></label>
<input class="input-large" type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="<?php _e('Search', 'woocommerce'); ?>" />
<input type="hidden" class="button" id="searchsubmit" value="<?php _e('Search', 'woocommerce'); ?>" />
<input type="hidden" name="post_type" value="product" />
</div>
</form>-->