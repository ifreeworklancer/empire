<!-- Pain -->
<section id="pain">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-6 mx-auto mx-xl-0">
                <div class="pain-item">
                    <div class="section-description">
                        <h2 class="section-description__title">
                            <?= $pain['title']?>
                        </h2>
                        <div class="section-description__subtitle">
                            <?= $pain['subtitle']?>
                        </div>
                    </div>
                    <ul class="custom-list custom-list--dark">
                        <?php 
                            foreach ($pain['list'] as $item) {
                                echo '<li>' . $item{'item'} . '</li>';
                        }
                    ?>
                    </ul>
                </div>
                <div class="pain-description">
                    <h3 class="pain-description__title">
                        <?= $pain['secondary_title']?>
                    </h3>
                    <div class="pain-description__subtitle">
                        <?= $pain['secondary_subtitle']?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pain-beforeAfter d-none d-xl-block">
        <div class="beforeAfter">
            <img src="../../images/content/pain/after.jpg" alt="">
            <img src="../../images/content/pain/before.jpg" alt="">
        </div>
    </div>
</section>