<div id="search-product" class="content-list-category container">
	<div class="row">
	<?php 	
	if ( is_active_sidebar('left-product') && revo_sidebar_product() != 'right' && revo_sidebar_product() != 'full' && !revo_mobile_check() ):
		$revo_left_span_class = 'col-lg-'.sw_options('sidebar_left_expand');
		$revo_left_span_class .= ' col-md-'.sw_options('sidebar_left_expand_md');
		$revo_left_span_class .= ' col-sm-'.sw_options('sidebar_left_expand_sm');
	?>
		<aside id="left" class="sidebar <?php echo esc_attr($revo_left_span_class); ?>">
			<?php dynamic_sidebar('left-product'); ?>
		</aside>	
		<?php endif; ?>
		<div id="contents" <?php revo_content_product(); ?> role="main">
			<div class="content_list_product">
				<div class="products-wrapper">		
				<?php
					if( have_posts() ){
				?>
					<ul id="loop-products" class="products-loop row clearfix grid-view grid">
					<?php 
						while( have_posts() ) : the_post(); 
						global $product, $post;
						$product_id = $post->ID;
					?>
						<li <?php post_class( revo_product_attribute() ); ?>>
							<div class="item-wrap">
								<div class="item-detail">										
									<div class="item-img products-thumb">											
										<!-- quickview & thumbnail  -->
										<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
									</div>										
									<div class="item-content">
										<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a></h4>								
																					
										<!-- rating  -->
										<?php 
											$rating_count = $product->get_rating_count();
											$review_count = $product->get_review_count();
											$average      = $product->get_average_rating();
										?>
										<div class="reviews-content">
											<div class="star"><?php echo sprintf( ( $average > 0 ) ?'<span style="width: %dpx"></span>' : '', $average*13 ); ?></div>
										</div>	
										<!-- end rating  -->
										<?php if ( $price_html = $product->get_price_html() ){?>
										<div class="item-price">
											<span>
												<?php echo sprintf( '%s', $price_html ); ?>
											</span>
										</div>
										<?php } ?>
										<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
									</div>
								</div>
							</div>
						</li>
						<?php	endwhile;
						
					?>
					</ul>
					<!--Pagination-->
					<?php global $wp_query; if ($wp_query->max_num_pages > 1) : ?>
					<div class="pag-search ">
							<div class="pagination nav-pag pull-right">
								<div class="wrap_content clearfix">
								<?php 
									echo paginate_links( array(
										'base' => esc_url_raw( str_replace( 999999999, '%#%', get_pagenum_link( 999999999, false ) ) ),
										'format' => '?paged=%#%',
										'current' => max( 1, get_query_var('paged') ),
										'total' => $wp_query->max_num_pages,
										'end_size' => 1,
										'mid_size' => 1,
										'prev_text' => '<i class="fa fa-angle-left"></i>',
										'next_text' => '<i class="fa fa-angle-right"></i>',
										'type' => 'list',
										
									) );
								?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<!--End Pagination-->
			<?php 
				}else{
					get_template_part( 'templates/no-results' );
				}
			?>
				</div>
			</div>
		</div>
	</div>
</div>