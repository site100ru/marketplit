<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'container single-product-section pt-5', $product ); ?>>
	<div class="row">
		<div class="col-md-6">
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>
	
		<div class="col-md-6 summary entry-summary">
			<?php
				woocommerce_template_single_title();
			?>
			<div class="row align-items-center">
				<div class="col-4 col-lg-4 mb-3">
					<?php
						woocommerce_template_single_price();
					?>
				</div>
				<div class="col-8 col-lg-8 mb-3 summary entry-summary">
					<?php
						woocommerce_template_single_add_to_cart();
					?>
				</div>
			</div>
			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
			
			
			
			<!-- Выводим дополнительную информацию -->
			<?php do_action( 'woocommerce_product_additional_information', $product ); ?>
		</div>
	</div>
	<div class="row">
		<div class="col pb-5">
			<?php if ( $heading ) : ?>
				<h2><?php //echo esc_html( $heading ); ?></h2>
			<?php endif; ?>
			<h2>Описание</h2>
			<?php the_content(); ?>
		</div>
	</div>
	
	
	
	
		<!-- Similar products --
		<section class="catalogy-section bg-light py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="text-center mb-3">Похожие товары</h2>
						<!--p class="section-description text-center mb-5">Представляем с гордостью!</p--
						<div class="section-title-decoration-line m-auto mb-5">
							<div class="section-title-decoration-quadro" style="left: 0;"></div>
							<div class="section-title-decoration-quadro" style="left: 26px;"></div>
							<div class="section-title-decoration-quadro" style="right: 0px;"></div>
						</div>
						<div class="row">
									<div class="col-md-3 mb-5">
										<div class="card">
											<a href="single-product.html">
												<img src="<?php echo get_template_directory_uri(); ?>/img/card-img.png" class="card-img-top p-3" alt="...">
											</a>
											<div class="card-body">
												<a href="single-product.html" class="text-decoration-none">
													<h3 class="card-title">Ламинированная фанера, толщина 12 мм, размер 1220х2440 мм, гл/гл, производство россия</h3>
												</a>
												<!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p--
												<p class="text-center"><span class="old-price"><strike>2750 ₽</strike></span> <span class="price">2500 ₽</span></p>
												<div class="row">
													<div class="col-5">
														<div class="input-group">
															<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">+</button>
															
															<input type="number" step="1" min="1" max="999" id="" name="quantity" value="1" title="Qty" class="form-control form-control-sm text-center" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" style="">
															
															<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">-</button>
														</div>
													</div>
													<div class="col-7">
														<button class="btn btn-sm btn-corporate-1" style="width: 100%;">В корзину</button>
													</div>
												</div>
											</div>
										</div>
										<!--a href="single-product.html">
											<div class="approximation approximation-sm shadow rounded mb-3">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-1.jpg" loading="lazy">
											</div>
										</a>
										<h3>«Докторская особая»</h3--
									</div>
									<div class="col-md-3 mb-5">
										<div class="card">
											<a href="single-product.html">
												<img src="<?php echo get_template_directory_uri(); ?>/img/card-img.png" class="card-img-top p-3" alt="...">
											</a>
											<div class="card-body">
												<a href="single-product.html" class="text-decoration-none">
													<h3 class="card-title">Ламинированная фанера, толщина 12 мм, размер 1220х2440 мм, гл/гл, производство россия</h3>
												</a>
												<!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p--
												<p class="text-center"><span class="old-price"><strike>2750 ₽</strike></span> <span class="price">2500 ₽</span></p>
												<div class="row">
													<div class="col-5">
														<div class="input-group">
															<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">+</button>
															
															<input type="number" step="1" min="1" max="999" id="" name="quantity" value="1" title="Qty" class="form-control form-control-sm text-center" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" style="">
															
															<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">-</button>
														</div>
													</div>
													<div class="col-7">
														<button class="btn btn-sm btn-corporate-1" style="width: 100%;">В корзину</button>
													</div>
												</div>
											</div>
										</div>
										<!--a href="single-product.html">
											<div class="approximation approximation-sm shadow rounded mb-3">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-4.jpg" loading="lazy">
											</div>
										</a>
										<h3>«Докторская особая»</h3--
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /End similar products -->
</div>


<!-- Related only -->
<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
do_action( 'woocommerce_after_single_product_summary' );
?>
	

<?php do_action( 'woocommerce_after_single_product' ); ?>