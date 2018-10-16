<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author     WooThemes
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

the_title( '<h1 class="product_title entry-title">', '</h1>' );

global $product;

?>
<div class="col-md-4 no-pad">
	<?php
	if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'Model #:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>
</div>
<div class="col-md-12 no-pad call-outs-wrapper">
	<ul class="call-outs">
		
		<li><span><?php the_field('lead_time'); ?></span> <img src="/wp-content/uploads/2018/09/lead-time-1.png" alt="Lead Time" /></li>

		<?php if( get_field('free_shipping') == 'y' ): ?>
			<li><img src="http://store.strong-hold.com/wp-content/uploads/2018/09/shipping_icon.png" alt="Free Shipping" /></li>
		<?php endif; ?>

		<?php if( get_field('nfpa_code_30_compliant') == 'y' ): ?>
			<li><img src="/wp-content/uploads/2018/09/NFPA-logo.jpg" alt="NFPA Code Compliant" /></li>
		<?php endif; ?>

		<?php if( get_field('osha_compliant') == 'y' ): ?>
			<li><img src="/wp-content/uploads/2018/09/oshalogo.png" alt="Meets OSHA Standards" /></li>
		<?php endif; ?>

		

	</ul>
</div>

<div class="clearfix"></div>
