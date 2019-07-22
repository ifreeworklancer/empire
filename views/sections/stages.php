<!-- Stages -->
<section id="stages">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-lg-8">
            <div class="section-description mb-4">
                    <h2 class="section-description__title">
                        <?= $stages['title']?>
                    </h2>
                    <div class="section-description__subtitle">
                        <?= $stages['subtitle']?>    
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-lg-7 mx-auto mx-lg-0">
                <div class="stages-column">
                    <?php 
                        foreach ($stages['items'] as $item) {
                            echo '<div class="stages-card">'
                            .
                            '<div class="stages-card-secondary">'
                            .   '<div class="icon">' . $item['svg'] . '</div>'
                            .   '<h4 class="title">' . $item['title'] . '</h4>'
                            .'</div>'
                            .'<div class="stages-card-description"><p>' . $item['text'] . '</p></div>'
                            .'</div>';
                        }
                    ?>
                </div>
            </div>
            <div class="col-sm-6 col-lg-5 mx-auto mx-lg-0">
                <div class="stages-tabs-img d-none d-lg-block">
                    <?php 
                        foreach ($stages['tabs'] as $item) {
                            echo '<div class="stages-tabs-img__item" style="background-image: url(' . $item['image'] .')"></div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>