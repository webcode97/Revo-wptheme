<?php 
$revo_header_style = sw_options('header_style');
if($revo_header_style !='style4') { ?>

<?php if ( class_exists( 'WooCommerce' ) ) { ?>
<?php global $woocommerce; ?>
<div class="top-login">
	<?php if ( ! is_user_logged_in() ) {  ?>
		<ul>
			<li>
			<?php echo ' <a href="javascript:void(0);" data-toggle="modal" data-target="#login_form"><span>'.esc_html__('Login', 'revo').'</span></a> '; ?>
				
			</li>
		</ul>
	<?php } else{?>
		<div class="div-logined">
			<ul>
				<li>
					<?php 
						$user_id = get_current_user_id();
						$user_info = get_userdata( $user_id );	
					?>
					<a class="user-info" href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>"><?php echo sprintf( esc_html__( 'Welcome %s', 'revo' ), $user_info->user_nicename ); ?></a> - 
					<a href="<?php echo wp_logout_url( home_url('/') ); ?>" title="<?php esc_attr_e( 'Logout', 'revo' ) ?>"><span><?php esc_html_e('Logout', 'revo'); ?></span></a>
				</li>
			</ul>
		</div>
	<?php } ?>
</div>
<?php }  } ?>
