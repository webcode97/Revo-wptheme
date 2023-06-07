<?php
/*
 *
 * Require the framework class before doing anything else, so we can use the defined urls and dirs
 * Also if running on windows you may have url problems, which can be fixed by defining the framework url first
 *
 */
 
if( !function_exists( 'sw_options' ) ) :
function sw_options( $opt_name, $default = null ){
	$options = get_option( SW_THEME );
	if ( !is_admin() && class_exists( 'Sw_demo' ) ){
		$cookie_opt_name = $opt_name;
		if ( array_key_exists( $cookie_opt_name, $_COOKIE ) ){
			return $_COOKIE[$cookie_opt_name];
		}
	}
	if( is_array( $options ) ){
		if ( array_key_exists( $opt_name, $options ) ){
			return $options[$opt_name];
		}
	}
	return $default;
}
endif;

?>