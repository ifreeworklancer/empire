
    </main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 mb-3 mb-lg-0">
                <a href="#intro" class="logo scroll-link">
                    <img src="../../images/icon/logo/logo.png" alt="Carlone logo">
                </a>
            </div>
            <div class="col-sm-5 pr-sm-0">
                <ul class="menu-nav">
                    <?php
                        foreach ($nav as $key => $value) {
                            echo '<li><a href="#' . $key . '"' . 'class="scroll-link">' . $value . '</a></li>';
                        }
                    ?>
                </ul>
            </div>
            <div class="col-sm-4 col-lg-3 p-lg-0 ml-auto mr-0">
                <h3 class="section-title text-white mb-4">
                    Доверьтесь профессионалам
                </h3>

                <?php include(__DIR__ . '/../modules/form.php'); ?>
            </div>
            <div class="col-12">
                <div class="footer-copyr">
                    <div class="footer-copyr-item mb-3 mb-sm-0">
                        2018 Все права защищены
                    </div>
                    <div class="footer-copyr-item">
                        Дизайн и разработка сайта компании <a href="https://impressionbureau.pro" target="_blank">Impression.Bureau</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
<script src="dist/app.js"></script>
</body>

</html>