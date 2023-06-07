<?php 
/***** Active Plugin ********/
require_once( get_template_directory().'/lib/class-tgm-plugin-activation.php' );

add_action( 'tgmpa_register', 'revo_register_required_plugins' );
function revo_register_required_plugins() {
    $plugins = array(
		array(
            'name'               => esc_html__( 'WooCommerce', 'revo' ), 
            'slug'               => 'woocommerce', 
            'required'           => true, 
			'version'			 => '6.9.3'
        ),

         array(
            'name'               => esc_html__( 'Elementor Pro', 'revo' ), 
            'slug'               => 'elementor-pro',
            'source'             => esc_url('https://demo.wpthemego.com/modules/elementor-pro.zip'),    
            'required'           => true,
            'version'            => '3.7.7'
        ),
        array(
            'name'               => esc_html__( 'Elementor', 'revo' ), 
            'slug'               => 'elementor',            
            'required'           => true, 
        ),
        array(
            'name'               => esc_html__( 'Instagram Feed', 'revo' ), 
            'slug'               => 'instagram-feed',
            'required'           => true,
        ),

        array(
            'name'               => esc_html__( 'Revslider', 'revo' ), 
            'slug'               => 'revslider', 
            'source'             => esc_url('https://demo.wpthemego.com/modules/revslider.zip'),    
            'required'           => true, 
            'version'            => '6.5.31'
        ),
		
		array(
            'name'     			 => esc_html__( 'SW Core', 'revo' ),
            'slug'      		 => 'sw_core',
             'source'             => get_template_directory() . '/lib/plugins/sw_core.zip',   
            'required'  		 => true,   
			'version'			 => '1.7.13'
		),
		
		array(
            'name'     			 => esc_html__( 'SW WooCommerce', 'revo' ),
            'slug'      		 => 'sw_woocommerce',
            'source'             => get_template_directory() . '/lib/plugins/sw_woocommerce.zip',  
            'required'  		 => true,
			'version'			 => '1.8.10'
        ),
		
		array(
            'name'     			 => esc_html__( 'SW Ajax Woocommerce Search', 'revo' ),
            'slug'      		 => 'sw_ajax_woocommerce_search',
            'source'             => get_template_directory() . '/lib/plugins/sw_ajax_woocommerce_search.zip',  
            'required'  		 => true,
			'version'			 => '1.3.0'
        ),
		
		array(
            'name'     			 => esc_html__( 'SW Wooswatches', 'revo' ),
            'slug'      		 => 'sw_wooswatches',
            'source'             => get_template_directory() . '/lib/plugins/sw_wooswatches.zip',  
            'required'  		 => true,
			'version'			 => '1.0.15'
        ),

        array(
            'name'               => esc_html__( 'Sw Product Bundles', 'revo' ),
            'slug'               => 'sw-product-bundles',
            'source'             => get_template_directory() . '/lib/plugins/sw-product-bundles.zip',
            'required'           => true,
            'version'            => '2.2.29'
        ), 
		
        array(
            'name'               => esc_html__( 'Sw WooCommerce Catalog Mode', 'revo' ),
            'slug'               => 'sw-woocatalog',
            'source'             => esc_url( 'https://demo.wpthemego.com/modules/sw-woocatalog.zip' ),
            'required'           => true,
            'version'            => '1.0.5'
        ),       
				
		array(
            'name'               => esc_html__( 'One Click Install', 'revo' ), 
            'slug'               => 'one-click-demo-import', 
            'source'             => esc_url( 'https://demo.wpthemego.com/modules/one-click-demo-import.zip'),
            'required'           => true, 
            'version'            => '9.9.10'
        ),
		array(
            'name'      		 => esc_html__( 'MailChimp for WordPress Lite', 'revo' ),
            'slug'     			 => 'mailchimp-for-wp',
            'required' 			 => false,
        ),
		array(
            'name'      		 => esc_html__( 'Contact Form 7', 'revo' ),
            'slug'     			 => 'contact-form-7',
            'required' 			 => false,
        ),
		array(
            'name'      		 => esc_html__( 'YITH Woocommerce Compare', 'revo' ),
            'slug'      		 => 'yith-woocommerce-compare',
            'required'			 => false
        ),
		 array(
            'name'     			 => esc_html__( 'YITH Woocommerce Wishlist', 'revo' ),
            'slug'      		 => 'yith-woocommerce-wishlist',
            'required' 			 => false
        ), 

    );	
	
	if( class_exists( 'WCMp' ) || class_exists( 'WeDevs_Dokan' ) || class_exists( 'WC_Vendors' ) ): 
	 $plugins[] = array(
		'name'               => esc_html__( 'Sw Vendor Slider', 'revo' ),
		'slug'               => 'sw_vendor_slider',
		'source'             => get_template_directory() . '/lib/plugins/sw_vendor_slider.zip', 
		'required'           => true,
		'version'            => '1.0.14'
	);
	endif;
	
    $config = array();

    tgmpa( $plugins, $config );

}
add_action( 'vc_before_init', 'revo_vcSetAsTheme' );
function revo_vcSetAsTheme() {
    vc_set_as_theme();
}