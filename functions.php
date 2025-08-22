<?php
	
	// Bootstrap 5 wp_nav_menu walker
	class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu {
		private $current_item;
		private $dropdown_menu_alignment_values = [
			'dropdown-menu-start',
			'dropdown-menu-end',
			'dropdown-menu-sm-start',
			'dropdown-menu-sm-end',
			'dropdown-menu-md-start',
			'dropdown-menu-md-end',
			'dropdown-menu-lg-start',
			'dropdown-menu-lg-end',
			'dropdown-menu-xl-start',
			'dropdown-menu-xl-end',
			'dropdown-menu-xxl-start',
			'dropdown-menu-xxl-end'
		];

		function start_lvl(&$output, $depth = 0, $args = null) {
			$dropdown_menu_class[] = '';
			foreach($this->current_item->classes as $class) {
				if(in_array($class, $this->dropdown_menu_alignment_values)) {
					$dropdown_menu_class[] = $class;
				}
			}
			$indent = str_repeat("\t", $depth);
			$submenu = ($depth > 0) ? ' sub-menu' : '';
			$output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
		}

		function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
			$this->current_item = $item;

			$indent = ($depth) ? str_repeat("\t", $depth) : '';

			$li_attributes = '';
			$class_names = $value = '';

			$classes = empty($item->classes) ? array() : (array) $item->classes;

			$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
			$classes[] = 'nav-item';
			$classes[] = 'nav-item-' . $item->ID;
			if ($depth && $args->walker->has_children) {
				$classes[] = 'dropdown-menu dropdown-menu-end';
			}

			$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
			$class_names = ' class="' . esc_attr($class_names) . '"';

			$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
			$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

			if ( $output != '' ) {
				// Подключаем точки в меню
				$output .= '
					<li class="nav-item d-none d-xl-inline">
						<span class="nav-link px-2"><img src="'.get_template_directory_uri().'/img/ico/menu-point.png"></span>
					</li>
				';
			}
			
			$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

			$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
			$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
			$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
			$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

			$active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
			$nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
			$attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

			$item_output = $args->before;
			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
		}
	}
	
	// Register a new menu
	register_nav_menu('main-menu', 'Main menu');
	
	
	/*** Adding WooCommerce support ***/
	function wp_template_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'wp_template_add_woocommerce_support' );
	
	
	// Change add to cart text on single product page
	add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single' ); 
	function woocommerce_add_to_cart_button_text_single() {
		return __( 'В корзину', 'woocommerce' ); 
	}

	// Change add to cart text on product archives page
	add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_add_to_cart_button_text_archives' );  
	function woocommerce_add_to_cart_button_text_archives() {
		return __( 'В корзину', 'woocommerce' );
	}
	
	
	/* Wijet область в сайдбаре */
	if ( function_exists( 'register_sidebar' ) ) {
		register_sidebar(
			array(
				'name'          => 'Виджет в сайдбаре', //название виджета в админ-панели
				'id'            => 'wsidebar-1', //идентификатор виджета
				'description'   => 'виден во всех разделах сайта', //описание виджета в админ-панели
				'before_widget' => '<aside id="%1$s" class="widget %2$s">', //открывающий тег виджета с динамичным идентификатором
				'after_widget'  => '<div class="clear"></div></aside>', //закрывающий тег виджета с очищающим блоком
				'before_title'  => '<span class="widget-title">', //открывающий тег заголовка виджета
				'after_title'   => '</span>',//закрывающий тег заголовка виджета
			)
		);
	}
	
	
	/* Склонение слова после числа
	 * @param $number - число
	 * @param $after - массив слов в различных падежах, напр. ['товар', 'товара', 'товаров']
	 */
	function plural_form($number, $after) {
		$cases = array (2, 0, 1, 1, 1, 2);
		return $number.' '.$after[ ($number%100>4 && $number%100<20)? 2: $cases[min($number%10, 5)] ];
	}
	//$label = plural_form($theCount, ['товар', 'товара', 'товаров']);
	//где $theCount - это ваша переменная с числом
	//echo $label;
	
	/*
	

	<h3 class="mb-3">Детали заказа</h3>
	<label class="form-label">Примечание к заказу (необязательно):</label>
	<textarea type="text" name="mes" class="" style="min-height: 200px;"></textarea>
	*/
	
	/* Отключаем ненужные поля в checkout */
	add_filter('woocommerce_checkout_fields','remove_checkout_fields');
	function remove_checkout_fields($fields){
		$fields['billing']['billing_first_name']['label'] = 'Ваше имя';
		$fields['billing']['billing_first_name']['label_class'] = 'form-label';
		$fields['billing']['billing_first_name']['input_class'] = array( 'form-control', 'form-control_corporate-color-1', 'mb-3' );
		
		$fields['billing']['billing_phone']['label'] = 'Ваш телефон';
		$fields['billing']['billing_phone']['label_class'] = 'form-label';
		$fields['billing']['billing_phone']['input_class'] = array( 'form-control', 'form-control_corporate-color-1', 'mb-3', 'telMask' );
		
		$fields['billing']['billing_email']['label'] = 'Ваше email';
		$fields['billing']['billing_email']['label_class'] = 'form-label';
		$fields['billing']['billing_email']['input_class'] = array( 'form-control', 'form-control_corporate-color-1' );
		
		unset($fields['billing']['billing_last_name']);
		unset($fields['billing']['billing_company']);
		unset($fields['billing']['billing_address_1']);
		unset($fields['billing']['billing_address_2']);
		unset($fields['billing']['billing_city']);
		unset($fields['billing']['billing_postcode']);
		unset($fields['billing']['billing_country']);
		unset($fields['billing']['billing_state']);
		
		unset($fields['order']['ce4wp_checkout_consent_checkbox']);

		//unset($fields['account']['account_username']);
		//unset($fields['account']['account_password']);
		//unset($fields['account']['account_password-2']);
		
		$fields['order']['order_comments']['placeholder'] = '';
		$fields['order']['order_comments']['label'] = 'Например: адрес доставки';
		$fields['order']['order_comments']['label_class'] = 'form-label';
		$fields['order']['order_comments']['input_class'] = array( 'form-control', 'form-control_corporate-color-1' );
		$fields['order']['order_comments']['custom_attributes'] = array( 'rows' => '8' );
		return $fields;
	}
	
	/* Off breadcrumb */
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
	
	/* Off product tabs */
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	
	/* Off product meta */
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	
	/* Off woocommerce_single_product_summary hook */
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	
	/* Off content product link */
	remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
	
	
	/* Удаление конструкции [...] на конце */
	add_filter( 'excerpt_more', function( $more ) {
		return '...';
	} );
	
	
	/**
	 * Кнопка пдюс/минус в карточке товара
	 * Override loop template and show quantities next to add to cart buttons
	 */
	add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );
	function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
		if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
			
			$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
				$html .= '<div class="row">';
					$html .= '<div class="col-6">';
						$html .= woocommerce_quantity_input( array(), $product, false );
					$html .= '</div>';
					$html .= '<div class="col-6">';
						$html .= '<button type="submit" class="button alt btn btn-sm btn-corporate-color-1" style="width: 100%;">' . esc_html( $product->add_to_cart_text() ) . '</button>';
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</form>';
			
		}
		return $html;
	}
	
	
	add_filter( 'kses_allowed_protocols', 'add_viber_to_allowed_protocols' );
	/**
	 * Добавляет протокол viber в список разрешённых.
	 *
	 * @param string[] $protocols Массив разрешенных протоколов, например, 'http', 'ftp', 'tel' и т.д.
	 *
	 * @return string[]
	 */
	function add_viber_to_allowed_protocols( $protocols ) {
		$protocols[] = 'viber';
		return $protocols;
	}

	// Изменяем описание способа оплаты "Оплата при доставке"
	add_filter( 'woocommerce_gateway_description', 'custom_cod_payment_description', 20, 2 );
	function custom_cod_payment_description( $description, $payment_id ) {
			if ( 'cod' === $payment_id ) {
					$description = 'После оформления заказа с Вами свяжется наш менеджер для уточнения деталей по оплате и доставке.';
			}
			return $description;
	}
?>