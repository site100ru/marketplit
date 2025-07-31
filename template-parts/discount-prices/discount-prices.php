<?php
/**
 * Template: Секция "Система скидок"
 * Файл: template-parts/discount-prices/discount-prices.php
 * Описание: Отдельная секция для отображения системы скидок
 */
?>

<!-- Section discount prices -->
<section class="prices-section bg-white py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 ">
        <div class="mb-5">
          <h2 class="text-center mb-3">Система скидок</h2>
          <div class="section-title-decoration-line m-auto">
            <div class="section-title-decoration-quadro" style="left: 0;"></div>
            <div class="section-title-decoration-quadro" style="left: 26px;"></div>
            <div class="section-title-decoration-quadro" style="right: 0px;"></div>
          </div>
        </div>

        <div class="prices-section-responsive">
          <div class="text-center mb-4 pb-3 prices-section-responsive-text">
            <p>В нашей компании действует гибкая система скидок.</p>
            <p>Подробности узнавайте у наших менеджеров по телефону или через месенджеры.</p>
          </div>

          <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">
            <ul class="nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link ico-button px-0 py-0" href="tg://resolve?domain=NikolaevAA2023"><img
                    src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
              </li>

              <li class="nav-item">
                <a class="nav-link ico-button pe-0 py-0" href="whatsapp://send?phone=+79299262301"><img
                    src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
              </li>

              <li class="nav-item">
                <a class="nav-link ico-button pe-0 py-0" href="viber://chat?number=79299262301"><img
                    src="<?php echo get_template_directory_uri(); ?>/img/ico/viber-ico.png"></a>
              </li>
            </ul>

            <div class="d-flex align-items-start prices-section-responsive-phone">
              <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg"
                alt="Телефон" class="me-2 img-fluid" aria-hidden="true">
              <a href="tel:+79299262301" class="text-decoration-none text-dark">8 <span>(929)</span> 926-23-01 </a>
            </div>

            <button data-bs-toggle="modal" data-bs-target="#callbackModal" type="button"
              class="btn btn-lg btn-corporate-color-1 prices-section-responsive-btn">Перезвонить</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section discount prices -->