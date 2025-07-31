<?php
// Template Name: Страница продукта
// Template Post Type: product
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();

?>

		
		<!-- Header -->
		<header class="second-header">
			<div class="parallax"></div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col">
						<h1>Купите фанеру в Химках</h1>
						<p class="header-description">Продажа ФСФ, ФК и ламинированной фанеры, оптом и в розницу. Распил, доставка по всей России. По Московской области доставим за 1 день. Все размеры, толщины, сорта в наличии на складе в гор. Химки. Все цены за лист на сайте актуальны. Производство — Россия.</p>
					</div>
					<!--
					<div class="col-12 col-lg-4 offset-xxl-1 col-xxl-3">
						<form method="post" action="" class="header-form">
							<h5><strong class="d-block">Бесплатно сделаем</strong> дизайн-проект и&nbsp;расчет стоимости в&nbsp;течение 24&nbsp;часов!</h5>
							<input type="text" class="form-control-lightgrey" id="exampleFormControlInput1" placeholder="Имя">
							<input type="text" class="form-control-lightgrey telMask" id="exampleFormControlInput2" placeholder="Телефон*">
							<button type="button" class="d-block w-100 btn btn-lg btn-lightgrey mt-3">Рассчитать стоимость</button>
						</form>
					</div>
					-->
				</div>
			</div>
		</header>
		<!-- /Header -->
		

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>

<?php
//get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>
		
		


		
	
		
		
		<!-- Advantages -->
		<div id="advantages-sp" class="scroll-point"></div>
		<section class="advantages bg-white py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="text-center mb-3">Наши преимущества</h2>
						<!--p class="section-description text-center mb-5">Представляем с гордостью!</p-->
						<div class="section-title-decoration-line m-auto mb-5">
							<div class="section-title-decoration-quadro" style="left: 0;"></div>
							<div class="section-title-decoration-quadro" style="left: 26px;"></div>
							<div class="section-title-decoration-quadro" style="right: 0px;"></div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-3 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-1.png" class="img-fluid">
									</div>
									<div class="col-9">
										<!--h3>Вы связываетесь с нами любым удобным способом</h3-->
										<p class="mb-0">Товары только известных отечественных производителей.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-3 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-2.png" class="img-fluid">
									</div>
									<div class="col-9">
										<!--h3>Мы бесплатно сделаем дизайн проект будущего изделия</h3-->
										<p class="mb-0">Любая форма оплаты (с НДС и без).</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-3 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-3.png" class="img-fluid">
									</div>
									<div class="col-9">
										<!--h3>Утверждение проекта и сроков исполнения</h3-->
										<p class="mb-0">Оперативная доставка по Москве, МО, России.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-3 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-4.png" class="img-fluid">
									</div>
									<div class="col-9">
										<!--h3>Производство</h3-->
										<p class="mb-0">Продукция имеет все необходимые сертификаты.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-3 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-5.png" class="img-fluid">
									</div>
									<div class="col-9">
										<!--h3>Доставка и установка</h3-->
										<p class="mb-0">Бесперебойное снабжение. Отгрузка от 1 листа.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-3 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-6.png" class="img-fluid">
									</div>
									<div class="col-9">
										<!--h3>Доставка и установка</h3-->
										<p class="mb-0">Индивидуальный подход. Распил плит согласно размерам заказчика.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Advantages -->
		
		
		<!-- Process -->
		<div id="process-sp" class="scroll-point"></div>
		<section class="process-section bg-light py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="text-center mb-3">Как у нас покупать</h2>
						<!--p class="section-description text-center mb-5">Представляем с гордостью!</p-->
						<div class="section-title-decoration-line m-auto mb-5">
							<div class="section-title-decoration-quadro" style="left: 0;"></div>
							<div class="section-title-decoration-quadro" style="left: 26px;"></div>
							<div class="section-title-decoration-quadro" style="right: 0px;"></div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/1.png" class="img-fluid">
									</div>
									<div class="col-10">
										<!--h3>Вы связываетесь с нами любым удобным способом</h3-->
										<p class="mb-0">Выбираете и добавляете товары в корзину.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/2.png" class="img-fluid">
									</div>
									<div class="col-10">
										<!--h3>Мы бесплатно сделаем дизайн проект будущего изделия</h3-->
										<p class="mb-0">Производите оформление заказа (пока без оплаты).</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/3.png" class="img-fluid">
									</div>
									<div class="col-10">
										<!--h3>Утверждение проекта и сроков исполнения</h3-->
										<p class="mb-0">Выбираете варианты доставки (доставка или самовывоз).</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/4.png" class="img-fluid">
									</div>
									<div class="col-10">
										<!--h3>Производство</h3-->
										<p class="mb-0">Выбираете варианты оплаты (оплата через сайт при оформлении заказа, оплата наличными при получении).</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/5.png" class="img-fluid">
									</div>
									<div class="col-10">
										<!--h3>Доставка и установка</h3-->
										<p class="mb-0">Получаете Ваш заказ выбранным способом (доставка или самовывоз).</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/6.png" class="img-fluid">
									</div>
									<div class="col-10">
										<!--h3>Доставка и установка</h3-->
										<p class="mb-0">Остались вопросы? Обязательно  задайте их нам любым удобным для Вас способом!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Process -->
		
		
		<!-- Order section --
		<section class="order-section">
			<div class="order-section-img d-none d-md-block" style="background: url(<?php echo get_template_directory_uri(); ?>/img/oredr-img-2.jpg) center; background-size: cover; right: 0%; left: 50%;"></div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5 text-md-end">
						<h3 class="text-darkbrown">Бесплатно сделаем дизайн-проект и расчет стоимости в течение 24 часов!</h3>
						<p class="mb-4">Оставьте заявку на бесплатный дизайн-проект и расчет стоимости по-настоящему красивой и качественной мебели.</p>
						<form method="post" action="">
							<div class="row justify-content-end">
								<div class="col-md-6">
									<label class="form-label">Ваше имя</label>
									<input type="text" class="form-control-darkgrey" id="exampleFormControlInput1" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Ваш телефон*</label>
									<input type="text" class="form-control-darkgrey telMask" id="exampleFormControlInput2" placeholder="">
								</div>
								<div class="col-md-6 mb-5 mb-md-0">
									<button type="button" class="d-block w-100 btn btn-lg btn-darkgrey">Рассчитать стоимость</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/oredr-img-2.jpg" class="img-fluid d-md-none">
					</div>
				</div>
			</div>
		</section>
		<!-- /Order section -->
		
		
<?php get_footer(); ?>