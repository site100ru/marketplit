<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

//get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

 get_header();

?>
		
	
<!-- Header -->
<header class="woocommerce-products-header second-header">
	<div class="parallax"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h1><?php echo single_cat_title(); ?></h1>
				<h2 class="header-subtitle">Маркет мебельной плиты</h2>
				<div class="row py-2">
					<div class="col-md-6 col-xl-4 col-xxl-3">
						<div class="row gx-2 gx-md-0">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/header-advantage-1.png" class="img-fluid mb-5 mb-md-0">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Удобно</h3>
								<p class="text-light mb-0">Просто добавьте товар в корзину и укажите размеры</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 col-xxl-3">
						<div class="row gx-2 gx-md-0">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/header-advantage-2.png" class="img-fluid mb-5 mb-md-0">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Быстро</h3>
								<p class="text-light mb-0">Доставляем товар в день покупки</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 col-xxl-3">
						<div class="row gx-2 gx-md-0">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/header-advantage-3.png" class="img-fluid mb-5 mb-md-0">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Выгодно</h3>
								<p class="text-light mb-0">Система скидок для постоянных клиентов</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php /*if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	//do_action( 'woocommerce_archive_description' );
	?>
</header>
<!-- /Header -->	


<!-- Products -->
<!-- Catalogy section 2 -->
<section class="catalogy-section bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3"><?php echo single_cat_title(); ?></h2>
				<!--p class="section-description text-center mb-5"></p-->
				<div class="section-title-decoration-line m-auto mb-5">
					<div class="section-title-decoration-quadro" style="left: 0;"></div>
					<div class="section-title-decoration-quadro" style="left: 26px;"></div>
					<div class="section-title-decoration-quadro" style="right: 0px;"></div>
				</div>
				<div class="row">
					<div class="col-md-3 sidebar-menu">
						<?php
							/**
							 * Hook: woocommerce_sidebar.
							 *
							 * @hooked woocommerce_get_sidebar - 10
							 */
							//do_action( 'woocommerce_sidebar' );
							
							dynamic_sidebar( 'wsidebar-1' );
						?>
						
						<!--button type="button" class="btn btn-corporate-1 mt-4 mb-5 mb-md-0" style="width: 175px;">Показать</button-->
						
						<div class="discount-card rounded shadow mt-4">
							<h4 class="mb-3">У нас действует система скидок</h4>
							<h4 class="mb-3">
								<span class="discount-5">5%</span>
								<span class="discount-10">10%</span>
								<span class="discount-10">15%</span>
							</h4>
							<a href="#discount-section-scroll-point" type="button" class="btn btn-corporate-color-1" style="width: 175px; padding-top: 9px;">Подробнее</a>
						</div>
						<div class="saw-cut-card rounded shadow mt-4">
							<h4 class="mb-4">При необходимости распилим по Вашим размерам</h4>
							<a href="/распил" type="button" class="btn btn-corporate-color-1" style="width: 175px; padding-top: 9px;">Подробнее</a>
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<?php /*
								if ( woocommerce_product_loop() ) {

									/**
									 * Hook: woocommerce_before_shop_loop.
									 *
									 * @hooked woocommerce_output_all_notices - 10
									 * @hooked woocommerce_result_count - 20
									 * @hooked woocommerce_catalog_ordering - 30
									 *
									do_action( 'woocommerce_before_shop_loop' ); */

									woocommerce_product_loop_start();

									if ( wc_get_loop_prop( 'total' ) ) {
										while ( have_posts() ) {
											the_post();

											/**
											 * Hook: woocommerce_shop_loop.
											 */
											do_action( 'woocommerce_shop_loop' );

											wc_get_template_part( 'content', 'product' );
										}
									}

									woocommerce_product_loop_end();

									/**
									 * Hook: woocommerce_after_shop_loop.
									 *
									 * @hooked woocommerce_pagination - 10
									 **/
									do_action( 'woocommerce_after_shop_loop' );
								/*} else {
									/**
									 * Hook: woocommerce_no_products_found.
									 *
									 * @hooked wc_no_products_found - 10
									 *
									do_action( 'woocommerce_no_products_found' );
								}

								/**
								 * Hook: woocommerce_after_main_content.
								 *
								 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
								 
								do_action( 'woocommerce_after_main_content' );**/

								 ?>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- /Catalogy section 2 -->
<!-- /Products -->


<!-- Order section -->
<section class="order-section bg-light">
	<div class="container py-md-5">
		<div class="row align-items-center">
			<div class="offset-md-7 col-md-5 mb-5 mb-md-0">
				<h3 class="mb-3">При необходимости Распилим по&#160;Вашим размерам</h3>
				<a href="/распил" type="button" class="btn btn-lg btn-corporate-color-1" style="padding-top: 11px; padding-left: 25px; padding-right: 25px;">Подробнее</a>
			</div>
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/order-img.jpg" class="img-fluid rounded d-md-none">
			</div>
		</div>
	</div>
	<div class="order-section-img d-none d-md-block" style="background: url(<?php echo get_template_directory_uri(); ?>/img/order-img.jpg) center; background-size: cover; right: 50%; left: 0%;"></div>
</section>
<!-- /Order section -->


<!-- Section descount prices -->
<div id="discount-section-scroll-point" class="scroll-point"></div>
<?php get_template_part('template-parts/discount-prices/discount-prices'); ?>
<!-- /Section descount prices -->


<section class="order-section-2 bg-light">
	<div class="container"> <!-- container/container-fluid -->
		<div class="row justify-content-center">
			<div class="col-lg-10 py-lg-5" style="position: relative;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ico/men.png" class="d-none d-lg-block" style="max-width: 425px; position: absolute; bottom: -10px; left: 50px;">
				<div class="row">
					<div class="col-lg-6 offset-lg-6 py-5 my-0 my-lg-3 text-dark">
						<h3 class="mb-3">Нужна помощь в выборе нашего товара или услуги?</h3>
						<p>Позвоните на по телефону или напишите в мессенджер и наш специалист ответит на все Ваши вопросы!</p>
						<p><a href="tel:+79299262301" class="header-phone"> 8 <span>(929)</span> 926-23-01</a></p>
						<ul class="nav mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link ico-button px-0" href="whatsapp://send?phone=+79299262301"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button pe-0" href="tg://resolve?domain=NikolaevAA2023"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button pe-0" href="viber://chat?number=79299262301"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/viber-ico.png"></a>
							</li>
							<!--li class="nav-item">
								<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a>
							</li-->
						</ul>
						<!--button class="btn btn-lg btn-corporation-orange px-5 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Оставить заявку</button-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>