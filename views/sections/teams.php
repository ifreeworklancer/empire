<!-- Questions -->
<section id="teams">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="section-description mb-5">
                    <h2 class="section-description__title">
                        <?= $teams['title'] ?>
                    </h2>
                    <div class="section-description__subtitle">
                        <?= $teams['subtitle'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="teams-slider">
                    <?php 
                        foreach ($teams['items'] as $item) {
                            echo '<div class="teams-col"><div class="teams-item" data-image="'.$item['image'].'" data-name="'.$item['name'].'" data-position="'.$item['position'].'" data-description="'.$item['description'].'">'
                                .'<div class="img" style="background-image: url(' . $item['image'] .')"></div>'
                                .'<div class="name">'. $item['name'] .'</div>'
                            .'</div></div>';
                        }
                    ?>
                </div>
                <div class="custom-modal custom-modal--team">
                    <div class="img"></div>
                    <div class="content">
                        <div class="name"></div>
                        <div class="position"></div>
                        <div class="description"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="slider-arrow">
                    <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-teams">
                        <svg width="25" height="20">
                            <use xlink:href="#prev-arrow-icon"></use>
                        </svg>
                    </div>
                    <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-teams">
                        <svg width="25" height="20">
                            <use xlink:href="#next-arrow-icon"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>