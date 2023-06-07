<?php 
	/* 
	** Content Header
	*/
	$revo_mobile_logo = sw_options( 'mobile_logo' );
?>
<?php if( is_front_page() || get_post_meta( get_the_ID(), 'page_mobile_enable', true ) || is_search() || sw_options( 'mobile_header_inside' ) ): ?>
<header id="header" class="header header-mobile-style3">
	<div class="header-wrrapper clearfix">
		<div class="header-top-mobile">
		<div class="header-menu-categories pull-left">
                <?php if ( has_nav_menu('vertical_menu') ) :?>
                <div class="vertical_megamenu">
                    <?php wp_nav_menu(array('theme_location' => 'vertical_menu', 'menu_class' => 'nav vertical-megamenu')); ?>
                </div>
                <?php else :?>
                <div id="main-menu" class="main-menu pull-left clearfix">
                    <nav id="primary-menu" class="primary-menu vertical_megamenu">
                        <div class="mid-header clearfix">
                            <div class="navbar-inner navbar-inverse">
                                <?php
								$autusin_menu_class = 'nav nav-pills';
								if ( 'mega' == sw_options('menu_type') ){
									$autusin_menu_class .= ' nav-mega';
								} else $autusin_menu_class .= ' nav-css';
								?>
                                <?php wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => $autusin_menu_class)); ?>
                            </div>
                        </div>
                    </nav>
                </div>
                <?php endif ;?>
            </div>
			<div class="revo-logo">
				<a  href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php if( $revo_mobile_logo != '' ){ ?>
						<img src="<?php echo esc_url( $revo_mobile_logo ); ?>" alt="<?php bloginfo('name'); ?>"/>
					<?php }else{
						$logo = get_template_directory_uri().'/assets/img/logo-mobile3.png'; ?>
						<img src="<?php echo esc_url( $logo ); ?>" alt="<?php bloginfo('name'); ?>"/>
					<?php } ?>					
				</a>				
			</div>
			<div class="header-right pull-right">
				<div class="header-wishlist">
					<a href="<?php echo get_permalink( get_option('yith_wcwl_wishlist_page_id') ); ?>" title="<?php esc_attr_e('Wishlist','revo'); ?>">
						<span class="fa fa-heart-o"></span>
					</a>
				</div>
				<div class="header-cart">
					<a href="<?php echo get_permalink(get_option('woocommerce_cart_page_id') ); ?>">
						<?php get_template_part( 'woocommerce/minicart-ajax-mobile' ); ?>
					</a>
				</div>
			</div>
			<div class="mobile-search">
				<?php if( is_active_sidebar( 'search' ) && class_exists( 'sw_woo_search_widget' ) ): ?>
					<?php dynamic_sidebar( 'search' ); ?>
				<?php else : ?>
					<div class="non-margin">
						<div class="widget-inner">
							<?php get_template_part( 'widgets/sw_top/searchcate' ); ?>
						</div>
					</div>
				<?php endif; ?>	
			</div>
		</div>
	</div>
</header>
<?php else : ?>
<!--  header page -->
<?php get_template_part( 'mlayouts/breadcrumb', 'mobile' ); ?>
	<!-- End header -->
<?php endif; ?>