<!-- Intro -->
<section id="intro">
    <div class="parallax">
        <div class="parallax__item parallax__item--1" data-speed="-50"></div>
        <div class="parallax__item parallax__item--2" data-speed="15"></div>
        <div class="parallax__item parallax__item--3" data-speed="30"></div>
        <div class="parallax__item parallax__item--4"></div>
    </div>
    <div class="container h-100">
        <div class="row h-100 justify-content-between">
            <div class="col-sm-7 col-xl-6 h-100 d-flex align-items-center mb-4 mb-sm-0">
                <div class="intro-item">
                    <h1 class="intro-item__title">
                        <?= $intro['title'] ?>
                    </h1>
                    <div class="intro-item__subtitle">
                        <?= $intro['subtitle'] ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-xl-4 d-flex align-items-end">
                <div class="intro-order">
                    <h3 class="intro-order__title text-primary text-uppercase">
                        Оставить заявку
                    </h3>
                    <div class="intro-order__description text-white mb-4">
                        Хотите убедиться, что получится выгоднее?
                        Оставьте заявку, мы рассчитаем стоимость
                    </div>
					<?php include(__DIR__ . '/../modules/form.php'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
