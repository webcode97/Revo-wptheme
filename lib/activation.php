<?php
/**
 * Theme activation
 */

update_option('sw_purchase_code','1234567890');

function sw_verify_envato_purchase_code($code) {
	
	$url = esc_url( 'https://wpthemego.com/api/?purchasecode=' . $code );
	$request_headers = array(
		'method' => 'GET',
		'user-agent' => 'Magentech WordPress',
		'timeout'    => 20,
		'sslverify'    => false
	);
	$response = wp_remote_request( $url, $request_headers );	
	$body = wp_remote_retrieve_body( $response );	
	return intval( $body );
}

function sw_verify_purchase_code_result( $input ){
	$result = sw_verify_envato_purchase_code( $input );
	if( $result == 18276186 ){
		return true;
	}else{
		return false;
	}
}
 
if (is_admin() && isset($_GET['activated']) && 'themes.php' == $GLOBALS['pagenow']) {
	wp_redirect(admin_url('themes.php?page=sw_activation_options'));
	exit;
}

add_action('admin_menu', 'sw_activation_options_add_page', 50);

function sw_activation_options_add_page() {
	$sw_activation_options = get_option( 'sw_purchase_code' );	
	global $wp_rewrite;
	if ( $sw_activation_options == '' ) {
		$theme_page = add_theme_page(
				esc_html__('Theme Activation', 'revo'),
				esc_html__('Theme Activation', 'revo'),
				'edit_theme_options',
				'sw_activation_options',
				'sw_activation_options_render_page'
		);		
	} else {
		if (is_admin() && isset($_GET['page']) && $_GET['page'] === 'sw_activation_options' ) {
			$wp_rewrite->flush_rules();			
			if( get_option( 'sw_plugins' ) ){
				wp_redirect( esc_url( admin_url('themes.php?page=tgmpa-install-plugins') ) );
			}else{
				wp_redirect( esc_url( admin_url() ) );
			}
			exit;
		}
	}
	add_action('admin_init', 'sw_activation_options_init');
}

function sw_activation_options_init() {
	register_setting( 'section', 'sw_purchase_code', 'sw_validate_purchase_code' );
}

function sw_get_default_activation_options() {
	$default_activation_options = '';

	return apply_filters('sw_default_activation_options', $default_activation_options);
}

function sw_activation_options_render_page() { 
	wp_enqueue_style('admin-style', get_template_directory_uri() . '/lib/admin/css/admin.css', array(), null);
?>
<div class="sw-activation-form">
	<div class="activation-form-inner">
		<h2>
			<?php printf( esc_html__( '%s Theme Activation', 'revo' ), wp_get_theme() ); ?>
			<a href="<?php echo esc_url( 'http://wpthemego.com/document/how-to-get-purchase-code-for-items-from-envato/' ); ?>" target="_blank" class="sw-activation-help" title="<?php echo esc_attr__( 'Need help? Please follow this url', 'revo' ); ?>"><?php echo esc_html__( 'Help', 'revo' ); ?></a>
		</h2>
		<?php settings_errors(); ?>
		

		<form method="post" action="options.php">

			<?php
				settings_fields('section');
				do_settings_sections( 'section' );
			?>			
			<div class="sw-activation">
				<ul>
					<li>
						<label for="sw_purchase_code" class="clearfix">
							<input type="text" id="sw_purchase_code" placeholder="<?php echo esc_attr__( 'Enter Your Purchase Code', 'revo' ); ?>" name="sw_purchase_code" value="<?php echo esc_attr( get_option( 'sw_purchase_code' ) ); ?>"/>
						</label>
					</li>
				</ul>
			</div>
			
			<?php submit_button(); ?>
		</form>
	</div>
</div>

<?php }

function sw_validate_purchase_code( $input ){
	$new_input = '';
	if( sw_verify_purchase_code_result( $input ) ) {
		$new_input = $input; 
	}else{
		 add_settings_error(
			'myUniqueIdentifier',
			esc_attr( 'settings_updated' ),
			esc_html__( 'Your Purchase Code are invalid, please fill correct code to action theme', 'revo' ),
			'error'
		);
	}
	return  $new_input;
}
if( !get_option( 'sw_purchase_code' ) ) {
	function sw_admin_notice_validate_purchase_code() {
		$class = 'notice notice-error';
		$message = esc_html__( 'Your theme is not active now, please fill your purchase code to active your theme!', 'revo' );

		printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
	}
	add_action( 'admin_notices', 'sw_admin_notice_validate_purchase_code' );
}else{
	require_once ( get_template_directory().'/lib/plugin-requirement.php' );			// Custom functions
	if( class_exists( 'OCDI_Plugin' ) ) :
		require_once ( get_template_directory().'/lib/import/sw-import.php' );
	endif;
	}
