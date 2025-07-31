<?
	
	// Template Name: Корзина
	// Template Post Type: page

	get_header();
	
?>
		
		
<!-- Header -->
<header class="second-header">
	<div class="parallax"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h1>Корзина</h1>
				<h2 class="header-subtitle mb-0">Маркет мебельной плиты</h2>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Advantages -->
<section class="cart-section bg-white py-5" style="min-height: 300px;">
	<div class="container">
		<div class="row">
			<div class="col">
				<!--h2 class="text-center mb-3">Наши преимущества</h2-->
				<!--p class="section-description text-center mb-5">Представляем с гордостью!</p-->
				<!--div class="section-title-decoration-line m-auto mb-5">
					<div class="section-title-decoration-quadro" style="left: 0;"></div>
					<div class="section-title-decoration-quadro" style="left: 26px;"></div>
					<div class="section-title-decoration-quadro" style="right: 0px;"></div>
				</div-->
				<?php
							
					while( have_posts() ) {	the_post();
						the_content();
					}
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
</section>
<!-- /Advantages -->
		
		
<?php get_footer(); ?>