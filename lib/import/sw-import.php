<?php 
function sw_import_files() { 
	return array(
		array(
			'import_file_name'          => 'Multi Category Store 1',
			'page_title'				=> 'Home',
			'header_title' 				   => 'Header style 1',
			'footer_title' 				   => 'Footer style 1',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/slideshow1.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-1/1.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/' ),
		),
	
		array(
			'import_file_name'          => 'Multi Category Store 2',
			'page_title'				=> 'Multi-category Store 2',
			'header_title' 				   => 'Header style 2',
			'footer_title' 				   => 'Footer style 2',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/slideshow2.zip' 
			),
			'local_import_options'         => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-2/2.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-2/' ),
		),

		array(
			'import_file_name'          => 'Multi Category Store 3',
			'page_title'				=> 'Home Page 13',
			'header_title' 				   => 'Header style 13',
			'footer_title' 				   => 'Footer style 13',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-13/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-13/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-13/slideshow13.zip' 
			),
			'local_import_options'         => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-13/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-13/13.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-13/' ),
		),

		array(
			'import_file_name'          => 'Multi Category Store 4',
			'page_title'				=> 'Home Page 14',
			'header_title' 				   => 'Header style 14',
			'footer_title' 				   => 'Footer style 14',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-14/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-14/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-14/slideshow14.zip' 
			),
			'local_import_options'         => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-14/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-14/14.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-14/' ),
		),
		
		array(
			'import_file_name'          => 'Kids Fashion Store',
			'page_title'				=> 'Kids Fashion Store',
			'header_title' 				   => 'Header style 4',
			'footer_title' 				   => 'Footer style 4',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  		 => array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/slideshow-4.zip' 
			),
			'local_import_options'         => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-3/3.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-4/' ),
		),
		
		array(
			'import_file_name'          => 'Fashion Store',				
			'page_title'				=> 'Fashion Store',
			'header_title' 				   => 'Header style 3',
			'footer_title' 				   => 'Footer style 3',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
				'local_import_revslider'  		 => array( 
					'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/slideshow3.zip' 
				),
				'local_import_options'         => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-4/4.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-3/' ),
		),
		
		array(
			'import_file_name'          => 'Fashion Store 2',
			'page_title'			   	=> 'Fashion Store 2',
			'header_title' 				   => 'Header style 6',
			'footer_title' 				   => 'Footer style 6',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/slider6.zip',
				'slide2' => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/video_bg.zip' 
			),
			'local_import_options'         => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-5/5.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-6/' ),
		),
		
		array(
			'import_file_name'          => 'Hitech Store',
			'page_title'				=> 'Hitech Store',
			'header_title' 				   => 'Header style 5',
			'footer_title' 				   => 'Footer style 5',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-6/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-6/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-6/slideshow-home5.zip',
			),
			'local_import_options'         => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-6/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	 => array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-6/6.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-5/' ),
		),
		
		array(
			'import_file_name'          => 'Hitech Store 2',
			'page_title'				=> 'Hitech Store 2',
			'header_title' 				   => 'Header style 7',
			'footer_title' 				   => 'Footer style 7',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-7/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-7/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-7/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-7/slider7.zip',
			),
			'local_import_options'         => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-7/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-7/7.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-7/' ),
    	),
		
		array(
			'import_file_name'          => 'Hitech Store 3',
			'page_title'				=> 'Home Page 18',
			'header_title' 				   => 'Header style 18',
			'footer_title' 				   => 'Footer style 18',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo/demo5', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/slideshow18.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-18/18.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/demo5/' ),
		),

		array(
			'import_file_name'          => 'Furniture Store',
			'page_title'				=> 'Home Page 8',
			'header_title' 				   => 'Header style 8',
			'footer_title' 				   => 'Footer style 8',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-8/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-8/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-8/slide-home8.zip',
			),
			'local_import_options'      => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-8/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-8/8.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-8/' ),
		),
		
		array(
			'import_file_name'          => 'Furniture Store 2',
			'page_title'				=> 'Furniture Store 2',
			'header_title' 				   => 'Header style 12',
			'footer_title' 				   => 'Footer style 12',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-9/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-9/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-9/slideshow12.zip',
			),
			'local_import_options'      => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-9/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-9/9.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/furniture-store-2/' ),
		),
		
		array(
			'import_file_name'          => 'Furniture Store 3',
			'page_title'				=> 'Home Page 17',
			'header_title' 				   => 'Header style 17',
			'footer_title' 				   => 'Footer style 17',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo/demo4', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/slideshow17.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-17/17.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/demo4' ),
		),

		array(
			'import_file_name'          => 'Cosmetic Store',
			'page_title'				=> 'Home Page 9',
			'header_title' 				   => 'Header style 9',
			'footer_title' 				   => 'Footer style 9',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-10/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-10/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-10/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_options'      => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-10/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu1' => 'Primary Menu1',   /* menu location => menu name for that location */
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-10/10.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-9/' ),
		),
		
		array(
			'import_file_name'          => 'Organic Store',
			'page_title'				=> 'Home Page 10',
			'header_title' 				   => 'Header style 10',
			'footer_title' 				   => 'Footer style 10',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-11/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-11/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-11/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
			'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-11/slidehome10.zip',
			),
			'local_import_options'      => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-11/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu1' => 'Verticle Menu1'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-11/11.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-10/' ),
		),
		
		array(
			'import_file_name'          => 'Music Store',
			'page_title'				=> 'Home Page 11',
			'header_title' 				   => 'Header style 11',
			'footer_title' 				   => 'Footer style 11',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-12/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-12/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-12/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-12/video_bg11.zip',
			),
			'local_import_options'      => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-12/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-12/12.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/home-page-11/' ),
		),

		array(
			'import_file_name'          => 'Gift Store',
			'page_title'				=> 'Home Page 15',
			'header_title' 				   => 'Header style 15',
			'footer_title' 				   => 'Footer style 15',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo/demo2', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/slideshow15.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-15/15.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/demo2' ),
		),

		array(
			'import_file_name'          => 'Vehiclepart Store',
			'page_title'				=> 'Home Page 16',
			'header_title' 				   => 'Header style 16',
			'footer_title' 				   => 'Footer style 16',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo/demo3', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/slideshow16.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-16/16.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/demo3' ),
		),

		array(
			'import_file_name'          => 'Christmas Gift Store',
			'page_title'				=> 'Home Page 19',
			'header_title' 				   => 'Header style 19',
			'footer_title' 				   => 'Footer style 19',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo/demo6', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/slideshow19.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-19/19.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/demo6' ),
		),

		array(
			'import_file_name'          => 'Book Store',
			'page_title'				=> 'Home Page 20',
			'header_title' 				   => 'Header style 20',
			'footer_title' 				   => 'Footer style 20',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo/demo7', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/slideshow20.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-20/20.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/demo7' ),
		),

		array(
			'import_file_name'          => 'Watch Store',
			'page_title'				=> 'Home Page 21',
			'header_title' 				   => 'Header style 21',
			'footer_title' 				   => 'Footer style 21',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo/demo8', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/slideshow21.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-21/21.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/demo8' ),
		),

		array(
			'import_file_name'          => 'Christmas Store',
			'page_title'				=> 'Home Page 22',
			'header_title' 				   => 'Header style 22',
			'footer_title' 				   => 'Footer style 22',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo/demo9', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/slideshow22.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-22/22.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/demo9' ),
		),

		array(
			'import_file_name'          => 'Medic Store',
			'page_title'				=> 'Home Page 23',
			'header_title' 				   => 'Header style 23',
			'footer_title' 				   => 'Footer style 23',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo/demo10', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/slideshow23.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-23/23.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/demo10' ),
		),

		array(
			'import_file_name'          => 'Flower Store',
			'page_title'				=> 'Home Page 24',
			'header_title' 				   => 'Header style 24',
			'footer_title' 				   => 'Footer style 24',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo/demo11', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/slideshow24.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-24/24.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/demo11' ),
		),

		array(
			'import_file_name'          => 'Home Gamning Gear',
			'page_title'				=> 'Home',
			'header_title' 				   => 'Header Gaming',
			'footer_title' 				   => 'Footer Gaming',
			'site_url'					   => 'https://demo.wpthemego.com/themes/sw_revo/demo12', 
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/demo-content-pagemenu.xml',
			'local_import_template_homepage' => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/demo-content-homepage-templates.xml', 
			'local_import_file'         => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/data.xml',
			'local_import_widget_file'  => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/widgets.json',
			'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/demo-content-page.xml',
			'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/demo-content-pagemenu.xml',
			'local_import_revslider'  	=> array( 
				'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/slider-gaming.zip' 
			),
			'local_import_options'        => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/theme_options.txt',
					'option_name' => 'revo_theme',
				),
			),
			'menu_locate'	=> array(
				'primary_menu' 	=> 'Primary Menu',   /* menu location => menu name for that location */
				'vertical_menu' => 'Verticle Menu'
			),
			'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-25/25.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 10-15 minutes', 'revo' ),
			'preview_url'                  => esc_url( 'https://demo.wpthemego.com/themes/sw_revo/demo12/' ),
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'sw_import_files' );