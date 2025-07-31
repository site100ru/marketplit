<?
	
	// Template Name: Оформление заказа
	// Template Post Type: page

	get_header();
	
?>
		
		
		<!-- Header -->
		<header class="second-header">
			<div class="parallax"></div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col">
						<h1>Оформление заказа</h1>
						<!--p class="header-description">Продажа ФСФ, ФК и ламинированной фанеры, оптом и в розницу. Распил, доставка по всей России. По Московской области доставим за 1 день. Все размеры, толщины, сорта в наличии на складе в гор. Химки. Все цены за лист на сайте актуальны. Производство — Россия.</p-->
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
		
		
		<!-- Advantages -->
		<section class="cart-section bg-white py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<?php
							while( have_posts() ) {	the_post();
								the_content();
							}
						?>
						
						<!--h2 class="text-center mb-3">Наши преимущества</h2-->
						<!--p class="section-description text-center mb-5">Представляем с гордостью!</p-->
						<!--div class="section-title-decoration-line m-auto mb-5">
							<div class="section-title-decoration-quadro" style="left: 0;"></div>
							<div class="section-title-decoration-quadro" style="left: 26px;"></div>
							<div class="section-title-decoration-quadro" style="right: 0px;"></div>
						</div--
						
						<div class="row mb-5">
							<div class="col-md-4 mb-3">
								<h3 class="mb-3">Контактные данные</h3>
								<label class="form-label">Ваше имя</label>
								<input type="text" name="name" class="form-control form-control_corporate-color-1 mb-3">
								<label class="form-label">Ваш телефон*</label>
								<input type="text" name="tel" class="form-control form-control_corporate-color-1 mb-3 telMask">
								<label class="form-label">Ваш email</label>
								<input type="text" name="mail" class="form-control form-control_corporate-color-1">
							</div>
							<div class="offset-md-1 col-7 mb-3">
								<h3 class="mb-3">Детали заказа</h3>
								<label class="form-label">Примечание к заказу (необязательно):</label>
								<textarea type="text" name="mes" class="form-control form-control_corporate-color-1" style="min-height: 200px;"></textarea>
							</div>
						</div>
						
						<h3 class="mb-3">Ваш заказ:</h3>
						<div class="table-responsive">
							<table class="table mb-5">
								<thead>
									<tr>
										<th scope="col">Товар</th>
										<th scope="col">Цена</th>
										<th scope="col">Количество</th>
										<th scope="col">Подытог</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>МДФ плита без покрытия, размер 2800х2070 мм, ширина 3 мм</td>
										<td>3 500 руб</td>
										<td class="text-center">1</td>
										<td>3 500 руб</td>
									</tr>
									<tr>
										<td>МДФ плита без покрытия, размер 2800х2070 мм, ширина 3 мм</td>
										<td>3 500 руб</td>
										<td class="text-center">1</td>
										<td>3 500 руб</td>
									</tr>
									<tr>
										<td>МДФ плита без покрытия, размер 2800х2070 мм, ширина 3 мм</td>
										<td>3 500 руб</td>
										<td class="text-center">1</td>
										<td>3 500 руб</td>
									</tr>
									<tr class="fw-bold">
										<td colspan="2">Итого:</td>
										<td class="text-center">1</td>
										<td>3 500 руб</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- Мои флажки --

						<div>
							<input type="checkbox" id="cb1"> <label for="cb1">Флажок 1</label>
						</div>

						<div>
							<input type="checkbox" id="cb2"> <label for="cb2">Флажок 2</label>
						</div>

						<div>
							<input type="checkbox" id="cb3"> <label for="cb3">Флажок 3</label>
						</div>

						<!-- Мои переключатели --

						<div>
							<input type="radio" name="rb" id="rb1" checked> <label for="rb1">Переключатель 1</label>
						</div>

						<div>
							<input type="radio" name="rb" id="rb2"> <label for="rb2">Переключатель 2</label>
						</div>

						<div>
							<input type="radio" name="rb" id="rb3"> <label for="rb3">Переключатель 3</label>
						</div> --
						
						<div class="form-check ps-0 mb-4">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								Оплата при доставке или получении товара на складе.
							</label>
						</div>
						<!--div class="form-check ps-0 mb-4">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2" style="position: relative;">
								Оплата банковской картой. <img src="img/ico/alfa-logo.png" style="position: absolute; right: -130px; top: -5px;">
							</label>
						</div--
						<p class="mb-4">Ваши личные данные будут использоваться только для обработки вашего заказа, удобства использования этого веб-сайта и для других целей, описанных в нашей политика конфиденциальности.</p>
						<button type="button" class="btn btn-lg btn-corporate-color-1">Подтвердить заказ</button-->
						
						
					</div>
				</div>
			</div>
		</section>
		<!-- /Advantages -->
		
		
<?php get_footer(); ?>