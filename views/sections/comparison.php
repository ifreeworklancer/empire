<!-- Comparison -->
<section id="comparison">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-lg-7">
                <div class="section-description">
                    <h2 class="section-description__title">
						<?= $comparison['title'] ?>
                    </h2>
                    <div class="section-description__subtitle">
						<?= $comparison['subtitle'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-sm-0">
        <div class="comparison-slider d-md-none">
			<?php
			$slides = [];
			foreach ($comparison['slider_items'] as $item) {
				foreach ($item['card'] as $card) {
					array_push($slides, $card);
				}
			}

			foreach ($slides as $val) {
				echo '<div class="comparison-slider-item">';
				include(__DIR__ . '/../modules/slider-card.php');
				echo '</div>';
			}
			?>
        </div>

        <div class="comparison-slider d-none d-md-block">
			<?php
			foreach ($comparison['slider_items'] as $item) {
				echo '<div class="comparison-slider-item"><div class="row w-100 m-0 justify-content-center">';
				foreach ($item['card'] as $val) {
					echo '<div class="col-md-6 px-0 px-sm-3">';
					include(__DIR__ . '/../modules/slider-card.php');
					echo '</div>';
				}
				echo '</div></div>';
			}
			?>
        </div>
    </div>
    </div>
    <div class="container d-none d-md-block">
        <div class="slider-arrow">
            <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-comparison">
                <svg width="35" height="30">
                    <use xlink:href="#prev-arrow-icon"></use>
                </svg>
            </div>
            <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-comparison">
                <svg width="35" height="30">
                    <use xlink:href="#next-arrow-icon"></use>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Custom Modal -->
<div class="custom-modal custom-modal--comparison">
    <div class="close-modal close-modal--comparison">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-header">
        <h3 class="title">
            Оставьте заявку
        </h3>
    </div>
    <div class="custom-modal-body">
        <form action="/send.php" method="post">
            <input type="hidden" name="car" value="">
            <input type="hidden" name="title" value="Выбор авто">
            <input type="hidden" name="utm" value="<?= implode('&', $_GET); ?>">
            <div class="form-column">
                <div class="form-group">
                    <label for="user-name--comparison" class="label-placeholder">Введите ваше имя</label>
                    <input type="text" name="name" class="form-control" id="user-name--comparison" required>
                </div>
                <div class="form-group">
                    <label for="user-phone--comparison" class="label-placeholder">Номер телефона</label>
                    <input type="tel" name="phone" class="form-control" id="user-phone--comparison" required>
                </div>
                <div class="form-group form-group--btn">
                    <button type="submit" class="btn btn-primary">Оставить заявку</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include(__DIR__ . '/../modules/car-modal.php'); ?>
<div class="modal-mask"></div>