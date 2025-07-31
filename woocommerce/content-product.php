<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<?php
	if ( is_product() ) {
		$classes = 'col-md-3 mb-5';
	} else {
		$classes = 'col-md-4 mb-5';
	}
?>

<div <?php wc_product_class( $classes, $product ); ?>>
	<div class="card wow fadeInUp">
		<div class="card-body">
			<?php
			/**
			 * Hook: woocommerce_before_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_open - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item' );

			/**
			 * Hook: woocommerce_before_shop_loop_item_title.
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */ ?>
			<!--a href="<?php the_permalink();?>"-->
				<!--img src="<?php echo get_template_directory_uri(); ?>/img/card-img.png" class="card-img-top p-3" alt="..."-->
				<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
			<!--/a-->

			<?php /**
			 * Hook: woocommerce_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			?>
			<!--a href="<?php the_permalink(); ?>" class="text-decoration-none"-->
				<!--h3 class="card-title"></h3-->
				<?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
			<!--/a-->
			
			<!--p class="text-center"><span class="old-price"><strike>2750 ₽</strike></span> <span class="price">2500 ₽</span></p-->
			<?php
			/**
			 * Hook: woocommerce_after_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
			
			<?php
			/**
			 * Hook: woocommerce_after_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_close - 5
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */

			do_action( 'woocommerce_after_shop_loop_item' );
			?>
			
			<script>
				function minus( paramId ) {
					let elemId = paramId;
					let inputField = document.getElementById( elemId ).value;
					if ( inputField > 0 ) {
						document.getElementById( elemId ).value = +inputField - 1;
					}
				}
				
				function plus( paramId ) {
					let elemId = paramId;
					let inputField = document.getElementById( elemId ).value;
					document.getElementById( elemId ).value = +inputField + 1;
				}
			</script>
		</div>
	</div>
</div>

