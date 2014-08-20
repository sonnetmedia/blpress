<div class="row-fluid row-page-header">

	
			<h1 id="page-header" class="page-header">
				
			 
						<?php if ( is_search() ) : ?>
							<?php
								printf( __( 'Search Results: &ldquo;%s&rdquo;', 'woocommerce' ), get_search_query() );
								if ( get_query_var( 'paged' ) )
									printf( __( '&nbsp;&ndash; Page %s', 'woocommerce' ), get_query_var( 'paged' ) );
							?>
						<?php elseif ( is_tax() ) : ?>
							<?php echo single_term_title( "", false ); ?>
						<?php else : ?>
							<?php
								$shop_page = get_post( woocommerce_get_page_id( 'shop' ) );
			
								echo apply_filters( 'the_title', ( $shop_page_title = get_option( 'woocommerce_shop_page_title' ) ) ? $shop_page_title : $shop_page->post_title, $shop_page->ID );
							?>
						<?php endif; ?>
					</h1>
			
					<?php do_action( 'woocommerce_archive_description' ); ?>
			
					<?php if ( is_tax() ) : ?>
						<?php do_action( 'woocommerce_taxonomy_archive_description' ); ?>
					<?php elseif ( ! empty( $shop_page ) && is_object( $shop_page ) ) : ?>
						<?php do_action( 'woocommerce_product_archive_description', $shop_page ); ?>
					<?php endif; ?>
			
			
			
			
			
			
	</div>
