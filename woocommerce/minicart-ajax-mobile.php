<?php 
if ( !class_exists( 'WooCommerce' ) || defined( 'CMPATH' ) ) { 
	return false;
}
global $woocommerce; ?>
<div class="revo-minicart-mobile">
		<span class="icon-menu"></span>
		<?php echo '<span class="minicart-number">'.$woocommerce->cart->cart_contents_count.'</span>'; ?>
		<span class="menu-text"><?php echo esc_html__( 'Cart', 'revo' ); ?></span>
</div>