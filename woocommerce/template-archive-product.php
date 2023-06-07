<?php 
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.1
 */
 
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<?php get_header(); ?>


<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
	<div class="revo_breadcrumbs">
		<div class="container">
			<?php
				if (!is_front_page() ) {
					if (function_exists('revo_breadcrumb')){
						revo_breadcrumb('<div class="breadcrumbs custom-font theme-clearfix">', '</div>');
					} 
				} 
			?>
		</div>
	</div>
<?php endif; ?>
<div class="container">
	<div class="row sidebar-row">
	
	<!-- Left Sidebar -->
	<?php 	
	if ( is_active_sidebar('left-product') && revo_sidebar_product() != 'right' && revo_sidebar_product() != 'full' && revo_sidebar_product() != '' ):
		$revo_left_span_class = 'col-lg-'.sw_options('sidebar_left_expand');
		$revo_left_span_class .= ' col-md-'.sw_options('sidebar_left_expand_md');
		$revo_left_span_class .= ' col-sm-'.sw_options('sidebar_left_expand_sm');
	?>
	<aside id="left" class="sidebar <?php echo esc_attr($revo_left_span_class); ?>">
		<?php dynamic_sidebar('left-product'); ?>
	</aside>	
	<?php endif; ?>
	
	<div id="contents" <?php revo_content_product(); ?> role="main">
		<?php
			/**
			 * woocommerce_before_main_content hook
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 */
			 global $post;
			do_action( 'woocommerce_before_main_content' );
		?>
		
		<!--  Shop Title -->
		<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
		
		<!-- Description --> 
		<?php do_action( 'woocommerce_archive_description' ); ?>
		<div class="products-wrapper">	
					
			<?php if ( have_posts() ) : ?>
				<?php do_action('woocommerce_message'); ?>
				<ul  class="products-loop row grid clearfix">
				<?php 					
					if( sw_woocommerce_version_check( '3.3' ) ){
						echo apply_filters( 'revo_custom_category', $html = '' );
					}else{
						woocommerce_product_subcategories(); 
					}
				?>
				</ul>
				<?php
					/**
					 * woocommerce_before_shop_loop hook
					 *
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );
				?>
				<?php woocommerce_product_loop_start(); ?>				
										
					<?php while ( have_posts() ) : the_post(); ?>
		
					<?php wc_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>
				<div class="clear"></div>			
				<?php
					/**
					 * woocommerce_after_shop_loop hook
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				?>
			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

				<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif; ?>
		</div>
		<?php
			/**
			 * woocommerce_after_main_content hook
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action('woocommerce_after_main_content');
		?>
		<?php do_action( 'swg_bottom_detail_content' ); ?>
	</div>
	
	<!-- Right Sidebar -->
	<?php if ( is_active_sidebar('right-product') && revo_sidebar_product() != 'left' && revo_sidebar_product() != 'full' && revo_sidebar_product() != '' ):
		$revo_right_span_class = 'col-lg-'.sw_options('sidebar_right_expand');
		$revo_right_span_class .= ' col-md-'.sw_options('sidebar_right_expand_md');
		$revo_right_span_class .= ' col-sm-'.sw_options('sidebar_right_expand_sm');
	?>
	<aside id="right" class="sidebar <?php echo esc_attr($revo_right_span_class); ?>">
		<?php dynamic_sidebar('right-product'); ?>
	</aside>
	<?php endif; ?>

	</div>
</div>
<?php get_footer(); ?>
