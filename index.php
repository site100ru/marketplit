<?
	
	// Template Name: Главная
	// Template Post Type: page

	get_header();
	
?>
		
		
<!-- Header -->
<header>
	<div class="parallax"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="mb-4">Продажа мебельной плиты МДФ</h1>
				<h2 class="header-subtitle">С покрытием и без</h2>
				<div class="row py-2">
					<div class="col-md-6 col-xl-4 col-xxl-3">
						<div class="row gx-2 gx-md-0">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/header-advantage-1.png" class="img-fluid mb-5 mb-md-0">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Удобно</h3>
								<p class="text-light mb-0">Просто добавьте товар в корзину и укажите количество</p>
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
								<p class="text-light mb-0">Возможность доставки товара в день заказа</p>
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


<!-- Products -->
<!-- Catalogy section 2 -->
<section class="catalogy-section bg-white py-5">
	<div class="container pb-0 pb-md-5">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Наши товары и услуги</h2>
				<!--p class="section-description text-center mb-5">Представляем с гордостью!</p-->
				<div class="section-title-decoration-line m-auto mb-5">
					<div class="section-title-decoration-quadro" style="left: 0;"></div>
					<div class="section-title-decoration-quadro" style="left: 26px;"></div>
					<div class="section-title-decoration-quadro" style="right: 0px;"></div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-5">
						<a href="/product-category/мдф">
							<div class="approximation shadow rounded">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-1.jpg" class="img-fluid">
								<div class="card-wrapper">
									<h3 class="mb-0">Каталог МДФ</h3>
								</div>
							</div>
						</a>
					</div>
					<!--div class="col-md-4 mb-5">
						<a href="/product-category/мдф-с-покрытием">
							<div class="approximation shadow rounded">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-2-2.jpg" class="img-fluid">
								<div class="card-wrapper">
									<h3 class="mb-0">МДФ с покрытием</h3>
								</div>
							</div>
						</a>
					</div-->
					<div class="col-md-6 mb-5">
						<a href="/распил">
							<div class="approximation shadow rounded">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-3.jpg" class="img-fluid">
								<div class="card-wrapper">
									<h3 class="mb-0">Распил МДФ</h3>
								</div>
							</div>
						</a>
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
				<a href="https://marketplit.ru/распил" type="button" class="btn btn-lg btn-corporate-color-1">Подробнее</a>
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