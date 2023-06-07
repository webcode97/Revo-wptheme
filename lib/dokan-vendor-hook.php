<?php 
/*
	* Name: Dokan Vendor Hook
	* Develop: SmartAddons
*/

add_action( 'wp', 'revo_dokan_hook' );
function revo_dokan_hook(){
	 if ( function_exists( 'dokan_is_store_page' ) && dokan_is_store_page () ) {
		remove_action( 'woocommerce_before_main_content', 'revo_banner_listing', 10 );
	}
}
remove_action( 'elementor/widgets/wordpress/widget_args', 'dokan_depricated_elementor_store_widgets', 10, 2 );