<!-- Saving -->
<section id="saving">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="saving-slider">
                    <?php 
                        foreach ($saving['items'] as $item) {
                            echo '<div class="saving-slider-item">'
                            .'<div class="img-container"><div class="img" style="background-image: url(' . $item['image'] .')"></div></div>'
                            .'<div class="content">' 
                                .'<div class="section-description">'
                                    .'<h2 class="section-description__title">' . $item['title'] . '</h2>'
                                    .'<div class="section-description__subtitle">' . $item['subtitle'] . '</div>'
                                .'</div>'
                                .$item['list']
                            .'</div>'
                            .'</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-arrow">
        <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-saving">
            <svg width="25" height="20">
                <use xlink:href="#prev-arrow-icon"></use>
            </svg>
        </div>
        <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-saving">
            <svg width="25" height="20">
                <use xlink:href="#next-arrow-icon"></use>
            </svg>
        </div>
    </div>
</section>