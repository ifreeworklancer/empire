<!-- advantages -->
<section id="advantages">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-lg-6">
                <div class="advantages-logo d-none d-sm-block">
                    <img src="images/icon/logo/logo-icon-dark.png" alt="">
                </div>
            </div>
            <div class="col-sm-8 col-lg-6">
                <?php 
                    $count = 0;
                    foreach ($advantages['list'] as $item) {
                        $count++;
                        echo '<div class="advantages-item">'
                        .
                        '<div class="advantages-item__count"><span>' .  $count . '</span></div>'
                        .
                        '<div class="advantages-item__description">' .  $item['item'] . '</div>'
                        .
                        '<div class="decor-animate"></div>'
                        .
                        '</div>';
                    }
                ?>
            </div>
        </div>
    </div>
    <a href="#pain" class="scroll-down scroll-link">
        <div class="scroll-down__icon"></div>
        <div class="scroll-down__text">
            Хорошее авто за адекватные деньги
        </div>
    </a>
</section>


<!-- Car -->
<div id='decor-car' class="decor-car" style="background-image: url('../../images/content/advantages/11594_st1280_089.png');"></div>