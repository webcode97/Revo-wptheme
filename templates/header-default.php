<?php 
/* 
** Content Header
*/
$revo_page_header = get_post_meta( get_the_ID(), 'page_header_style', true );
$revo_colorset  	= sw_options('scheme');
$revo_logo 				= sw_options('sitelogo');
$sticky_menu 			= sw_options( 'sticky_menu' );
$revo_page_header = ( get_post_meta( get_the_ID(), 'page_header_style', true ) != '' ) ? get_post_meta( get_the_ID(), 'page_header_style', true ) : sw_options('header_style'); 
$revo_menu_item 	= ( sw_options( 'menu_number_item' ) ) ? sw_options( 'menu_number_item' ) : 9;
$revo_more_text 	= ( sw_options( 'menu_more_text' ) )	 ? sw_options( 'menu_more_text' )		: esc_html__( 'See More', 'revo' );
$revo_less_text 	= ( sw_options( 'menu_less_text' ) )	 ? sw_options( 'menu_less_text' )		: esc_html__( 'See Less', 'revo' );
$revo_menu_text 	= ( sw_options( 'menu_title_text' ) )	 ? sw_options( 'menu_title_text' )	: esc_html__( 'All Departments', 'revo' );
?>
<header id="header" class="header header-default header-style1">
	<div class="header-mid">
		<div class="container">
			<div class="row">
				<!-- Logo -->
				<div class="top-header col-lg-3 col-md-2 pull-left">
					<div class="revo-logo">
						<?php revo_logo(); ?>
					</div>
				</div>
				<!-- Primary navbar -->
				<?php if ( has_nav_menu('primary_menu') ) { ?>
				<div id="main-menu" class="main-menu clearfix col-lg-6 col-md-7 pull-left">
					<nav id="primary-menu" class="primary-menu">
						<div class="mid-header clearfix">
							<div class="navbar-inner navbar-inverse">
								<?php
								$revo_menu_class = 'nav nav-pills';
								if ( 'mega' == sw_options('menu_type') ){
									$revo_menu_class .= ' nav-mega';
								} else $revo_menu_class .= ' nav-css';
								?>
								<?php wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => $revo_menu_class)); ?>
							</div>
						</div>
					</nav>
				</div>			
				<?php } ?>
				<!-- /Primary navbar -->
				<!-- Sidebar Top Menu -->
				<?php if (is_active_sidebar('contact-us')) {?>
				<div  class="contact-us-header pull-right">
					<?php dynamic_sidebar('contact-us'); ?>
				</div>
				<?php }?>
				<?php if( $sticky_menu ) : ?>
					<div class="sticky-cart pull-right">
						<?php get_template_part( 'woocommerce/minicart-ajax' ); ?>
					</div>
					<div class="sticky-search pull-right">
						<i class="fa fa-search"></i>
						<div class="sticky-search-content">
							<div class="search-cate">
								<?php if( is_active_sidebar( 'search' ) && class_exists( 'sw_woo_search_widget' ) ): ?>
									<?php dynamic_sidebar( 'search' ); ?>
								<?php else : ?>
									<?php get_template_part( 'widgets/sw_top/searchcate' ); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

</header>