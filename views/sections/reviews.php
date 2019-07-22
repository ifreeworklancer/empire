<!-- Reviews -->
<section id="reviews">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">
                    <?= $reviews['title']?>
                </h2>
                <div class="reviews-slider">
                    <?php 
                        foreach ($reviews['items'] as $item) {
                            echo '<div class="reviews-slider-item">'
                            .
                            '<div class="img" style="background-image: url(' . $item['image'] .')"></div>'
                            .
                            '   <div class="content">' 
                            .   '   <p class="content__text">' . $item['text'] . '</p>' 
                            .   '   <h5 class="content__description">' . $item['description'] . '</h5>' 
                            .   '</div>'
                            .'</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 d-flex justify-content-start justify-content-sm-end">
                <div class="slider-arrow">
                    <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-reviews">
                        <svg width="25" height="20">
                            <use xlink:href="#prev-arrow-icon"></use>
                        </svg>
                    </div>
                    <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-reviews">
                        <svg width="25" height="20">
                            <use xlink:href="#next-arrow-icon"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-block decor-block--little"></div>
    <div class="decor-block decor-block--middle"></div>
    <div class="decor-block decor-block--big d-none d-sm-block"></div>
</section>