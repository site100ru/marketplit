<?
	
	// Template Name: Распил
	// Template Post Type: page

	get_header();
	
?>


<!-- Header -->
<header class="second-header">
	<div class="parallax"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h1>Распил</h1>
				<h2 class="header-subtitle">Маркет мебельной плиты</h2>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Saw cut price table -->
<section class="cart-section bg-white py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<h2 class="text-center mb-3">Цены на распил</h2>
				<!--p class="section-description text-center mb-5"></p-->
				<div class="section-title-decoration-line m-auto mb-5">
					<div class="section-title-decoration-quadro" style="left: 0;"></div>
					<div class="section-title-decoration-quadro" style="left: 26px;"></div>
					<div class="section-title-decoration-quadro" style="right: 0px;"></div>
				</div>
				<?php
					while( have_posts() ) { the_post();
						the_content();
					}
				?>
				<!--div class="table-responsive">
					<table class="table mb-4">
						<thead>
							<tr>
								<th scope="col" class="text-center">Толщина</th>
								<th scope="col" class="text-center">Технический распил</th>
								<th scope="col" class="text-center">Распил в размер</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">3 - 4 мм</td>
								<td class="text-center">150 руб</td>
								<td class="text-center">30 руб м/п</td>
							</tr>
							<tr>
								<td class="text-center">6 - 16 мм</td>
								<td class="text-center">250 руб</td>
								<td class="text-center">45 руб м/п</td>
							</tr>
							<tr>
								<td class="text-center">18 - 25 мм</td>
								<td class="text-center">300 руб</td>
								<td class="text-center">55 руб м/п</td>
							</tr>
							<tr>
								<td class="text-center">28 - 38 мм</td>
								<td class="text-center">450 руб</td>
								<td class="text-center">80 руб м/п</td>
							</tr>
						</tbody>
					</table>
				</div-->
				
			</div>
		</div>
	</div>
</section>
<!-- /Saw cut price table -->


<!-- Process -->
<div id="process-sp" class="scroll-point"></div>
<section class="process-section bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Как заказать распил</h2>
				<!--p class="section-description text-center mb-5"></p--> 
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
								<p class="mb-0">Скачайте бланк заявки на распил</p>
								<a href="<?php echo get_template_directory_uri(); ?>/Форма-заявки-на-распил.xls" target="blank" download="Форма-заявки-на-распил.xls">Скачать</a>
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
								<p class="mb-0"><!--Заполните бланк заказа указав точные размеры деталей и их количество-->Заполните бланк, указав нужные размеры, количество деталей и свои контактные данные для обратной связи</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/3.png" class="img-fluid">
							</div>
							<div class="col-10">
								<!--h3>Утверждение проекта и сроков исполнения</h3-->
								<p>Отправьте заполненный бланк заявки нам в любой удобной для Вас форме:</p>
								<ul class="mb-0" style="padding-left: 0; list-style: none;">
									<li class="mb-2">В мессенджер: 
										<a class="ico-button pe-1" href="whatsapp://send?phone=+79299262301"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
										<a class="ico-button pe-1" href="tg://resolve?domain=NikolaevAA2023"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
										<a class="ico-button pe-1" href="viber://chat?number=79299262301"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/viber-ico.png"></a>
									</li>
									<li class="mb-3">На email: <a href="mailto:1752800@mail.ru">1752800@mail.ru</a></li>
									<li>В форме для отправки файла ниже.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<hr class="my-4">
				<p class="text-lg-center">Если выполнить первые 3 пункта Вам покажется сложным, можете прислать размеры и количество деталей в свободной форме любым удобным для Вас способом. Наши менеджеры сделают эту работу за Вас.</p>
				<h3 class="text-lg-center">Будем рады Вам помочь!</h3>
			</div>
		</div>
	</div>
</section>
<!-- /Process -->


<!-- Saw cut order -->
<div id="process-sp" class="scroll-point"></div>
<section class="process-section bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Заявка на распил</h2>
				<!--p class="section-description text-center mb-5"></p--> 
				<div class="section-title-decoration-line m-auto mb-5">
					<div class="section-title-decoration-quadro" style="left: 0;"></div>
					<div class="section-title-decoration-quadro" style="left: 26px;"></div>
					<div class="section-title-decoration-quadro" style="right: 0px;"></div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 mb-5">
						<h3 class="mb-4">Скачать бланк заявки на распил</h3>
						<p class="mb-4">
							<a download="Форма-заявки-на-распил.xls" href="<?php echo get_template_directory_uri(); ?>/Форма-заявки-на-распил.xls" target="blank" class="btn btn-lg btn-corporate-color-1" style="padding: 6px 45px;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/button-document-ico.png" class="me-2">
								<span style="position: relative; top: 1px;">Скачать</span>
							</a>
						</p>
						<p class="mb-0">Заполненный бланк заявки Вы можете отправить нам из формы на сайте, на почту <a href="mailto:1752800@mail.ru">1752800@mail.ru</a> или в мессенджер.</p>
					</div>
					<div class="col-md-6 mb-5">
						<h3 class="mb-4">Отправить бланк заявки на распил</h3>
						<form id="formOrderSawCut" method="post" action="<?php echo get_template_directory_uri(); ?>/mails/send_order_saw_cut.php" enctype="multipart/form-data">
							<div class="input-group custom-file-button mb-4">
								<label class="input-group-text" for="inputGroupFile">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/button-document-ico.png" class="me-2">
									<span style="padding-top: 1px;">Выбрать файл</span>
								</label>
								<input type="file" name="mail_file" accept=".xls, .xlsx" class="form-control" id="inputGroupFile" style="padding-top: 9px;" required>
							</div>
							<button type="submit" class="btn btn-lg btn-corporate-color-1" style="padding: 5px 44px;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/button-document-ico.png" class="me-2">
								<span style="position: relative; top: 1px;">Отправить</span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Saw cut order -->
		
		
<?php get_footer(); ?>