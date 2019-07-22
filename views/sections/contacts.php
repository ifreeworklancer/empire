<!-- Contacts -->
<section id="contacts">
    <div id="map"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-lg-4">
                <div class="contacts-item">
                    <div class="section-description mb-4">
                        <div class="section-description__subtitle">
							<?= $contacts['subtitle'] ?>
                        </div>
                        <h2 class="section-description__title text-primary">
							<?= $contacts['title'] ?>
                        </h2>
                    </div>
                    <ul class="contacts-list">
						<?php
						foreach ($contacts['items'] as $item) {
							echo '<li class="contacts-list-item contacts-list-item--'
								 . $item['name']
								 . '"><a href="'
								 . $item['link']
								 . '">'
								 . $item['info']
								 . '</a>';
							if ($item['name'] === 'phone') {
								echo '<div class="small text-white">звонки по Украине бесплатно</div>';
							}
							echo '</li>';
						}
						?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>