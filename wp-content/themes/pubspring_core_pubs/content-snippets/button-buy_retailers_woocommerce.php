<script type="text/javascript">
function recordOutboundLink(link, category, action) {
  try {
    var myTracker=_gat._getTrackerByName();
    _gaq.push(['myTracker._trackEvent', ' + category + ', ' + action + ']);
    setTimeout('document.location = "' + link.href + '"', 100)
  }catch(err){}
}
</script>






<div class="btn-group">
  <button class="btn btn-primary btn-small" data-toggle="dropdown"><i class="icon-shopping-cart icon-white"></i> <?php if($post->post_status == 'future') : ?>Preorder Now<?php else : ?>Buy Now<?php endif; ?></button>
  <button class="btn btn-primary btn-small dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>

  </button>
  <ul class="dropdown-menu sans small">



<?php global $post, $product; ?>
 	<?php do_action( 'woocommerce_product_meta_start' ); ?> 
 	
 	
 <?php if ( $product->is_type( array( 'simple', 'variable' ) ) && get_option('woocommerce_enable_sku') == 'yes' && $product->get_sku() ) : ?>
 
 <?php $isbn_13 = $product->get_sku(); 
 		 $isbn_13_converted = ISBN13toISBN10($isbn_13); //for Amazon
	 ?>
 
 <?php endif; ?>	
  
  
<li><a href="http://www.amazon.com/dp/<?php echo $isbn_13_converted; ?>" title="Amazon"><img src="/wp-content/themes/pubspring_core_pubs/images/booksellers/500px-Amazon_com_logo_svg.png" alt="Amazon.com" style="height: 22px;" /></a></li>
<li><a href="http://search.barnesandnoble.com/booksearch/isbnInquiry.asp?EAN=<?php echo $isbn_13; ?>"><img src="/wp-content/themes/pubspring_core_pubs/images/booksellers/bookselling_bn_139x22.png" alt="" style="height: 18px;" /></a></li>
<li><a href="http://indiebound.org/book/<?php echo $isbn_13; ?>"><img src="/wp-content/themes/pubspring_core_pubs/images/booksellers/indiebound.png" alt="" style="height: 42px;" /><br /><small>Your Local Bookstore</small></a></li>  
<br />
<!--<li><a href="#">-- Digital Editions --</a></li>-->
<!--  <li><a href=""><img src="/wp-content/themes/pubspring_core_pubs/images/booksellers/Amazon_Kindle_Logo.png" alt="" style="height: 22px;" /></a></li>
  <li><a href=""><img src="/wp-content/themes/pubspring_core_pubs/images/booksellers/IBooks.png" alt="" style="height: 22px;" /></a></li>
  <li><a href=""><img src="/wp-content/themes/pubspring_core_pubs/images/booksellers/nook_logo_branding.jpg" alt="" style="height: 22px;" /></a></li>-->

  
  
  
  
  
  
  	<?php do_action( 'woocommerce_product_meta_end' ); ?>
  
    <!-- dropdown menu links -->
  </ul>
</div>



<br /><br />




<div class="product_meta">





</div>




