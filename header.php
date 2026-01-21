<?php
	session_start();
	if ( isset( $_SESSION['win'] ) ) {
		unset( $_SESSION['win'] );
		$_SESSION['display'] = "block";
	} else { $_SESSION['display'] = "none"; }
?>
<!doctype html>
<html lang="ru">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
		<!-- Style CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">

		<title>Маркет мебельной плиты</title>
		
		<meta name="yandex-verification" content="abc56627dbc7525e" />
		
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
			(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();
			for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
			k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(93133456, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
			});
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/93133456" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	</head>
	<body>
		
		
		<div id="home-sp" class="scroll-point"></div>
		<nav id="top-menu-1" class="navbar-light d-none d-xl-block bg-white">
			<div class="container">
				<div class="row h-100 align-items-center">
					<div class="col-3">
						<a href="/">
							<img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.png" class="img-fluid">
						</a>
					</div>
					<div class="col-5">
						<ul class="nav justify-content-center align-items-center">
							<li class="nav-item d-inline-block">
								<a href="/контакты" class="nav-link">
									<div class="row align-items-center">
										<div class="col-2">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.png">
										</div>
										<div class="col-10 ps-1">
											<span>Химки, Вашутинское ш.,<br>вл. 1, корп. 10</span>
										</div>
									</div>
								</a>
							</li>
							<!--li class="nav-item d-inline-block">
								<a href="#" class="nav-link">
									<div class="row align-items-center">
										<div class="col-2">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.png">
										</div>
										<div class="col-10 ps-3">
											<span>Пн-Пт: 9:00-18:00<br>Сб-Вс: выходной</span>
										</div>
									</div>
								</a>
							</li-->
							<li class="nav-item d-none d-xxl-inline-block">
								<a href="mailto:1752800@mail.ru" class="nav-link">
									<div class="row align-items-center">
										<div class="col-2">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.png">
										</div>
										<div class="col-10 ps-3">
											<span>1752800@mail.ru</span>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-2">
						<a class="ico-button pe-1" href="whatsapp://send?phone=+79299262301"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
						<a class="ico-button pe-1" href="tg://resolve?domain=NikolaevAA2023"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
						<a class="ico-button pe-1" href="viber://chat?number=79299262301"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/viber-ico.png"></a>
						
						<!--a class="ico-button pe-1" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
						<a class="ico-button" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a-->
					</div>
					<div class="col-2 text-end">
						<a href="tel:+79299262301" class="header-phone"> 8 <span>(929)</span> 926-23-01</a>
						<a class="header-callback" data-bs-toggle="modal" data-bs-target="#callbackModal" style="cursor: pointer;"> Обратный звонок </a>
					</div>
				</div>
			</div>
		</nav>
		<nav id="top-menu-2" class="navbar navbar-expand-xl navbar-light">
			<div class="container">
				<a class="navbar-brand d-xl-none" href="#">
					<img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.png">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="main-menu"><!-- navbarSupportedContent2 -->
					<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '
								<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 %2$s">%3$s
									<!-- Mobile menu -->
									<li class="nav-item d-xl-none pt-2">
										<a class="ico-button pe-2" href="whatsapp://send?phone=+79299262301"><img src="'.get_template_directory_uri().'/img/ico/whatsapp-ico.png"></a>
										<a class="ico-button pe-2" href="tg://resolve?domain=NikolaevAA2023"><img src="'.get_template_directory_uri().'/img/ico/telegram-ico.png"></a>
										<a class="ico-button pe-2" href="viber://chat?number=79299262301"><img src="'.get_template_directory_uri().'/img/ico/viber-ico.png"></a>
										
										<!--a class="ico-button pe-2" href="https://www.instagram.com/stock_line_msk"><img src="'.get_template_directory_uri().'/img/ico/inst-ico.png"></a>
										<a class="ico-button" href="https://vk.com/stock_line"><img src="'.get_template_directory_uri().'/img/ico/vk-ico.png"></a-->
									</li>
									<!-- End mobile menu -->
								</ul>
							',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker()
						));
					?>
					<div class="row align-items-center text-xl-end">
						<div class="col pt-2">
							<?php woocommerce_mini_cart(); ?>
						</div>
					</div>
				</div>
			</div>
		</nav>