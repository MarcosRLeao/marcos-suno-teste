<section class="wrapper sunoNews">

    <div class="sunoNews__container">

        <div class="sunoNews__news">

            <picture>
                <img src="<?php echo myapp_get_theme_image('news/principal.jpg'); ?>" width="480" height="260" alt="Bolsonaro está fazendo um grande trabalho na Amazônia, diz Trump">
            </picture>


            <div class="sunoNews__news__emphasis">


                <a class="SunoNewsCategory" href="#">
                    <h2 class="SunoNewsCategory__title">Política</h2>
                </a>

                <ul>
                    <li>
                        <a href="#">
                            <h3 class="emphasis__title"> Bolsonaro está fazendo um grande trabalho na Amazônia, diz Trump</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3 class="emphasis__title"> Governo Federal divulga calendário de saques do FGTS em 2020</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3 class="emphasis__title"> BNDES desembolsou R$ 25 bilhões no 1º semestre de 2019</h3>
                        </a>
                    </li>
                </ul>

            </div>

        </div>

        <div class="sunoNews__triple">
            <div class="sunoNews__triple__card">

                <div class="sunoNews__triple__image">
                    <a class="sunoNews__triple__image__pictureLink" href="#">
                        <picture>
                            <img src="<?php echo myapp_get_theme_image('news/economia.jpg'); ?>" width="280" height="150" alt="financas">
                        </picture>
                    </a>

                    <a class="SunoNewsCategory" href="#">
                        <h2 class="SunoNewsCategory__title">financas</h2>
                    </a>
                </div>

                <a class="sunoNews__triple__card__link" href="#">
                    <h3 class="sunoNews__triple__card__title">Yduqs, ex-Estácio, compra dona da Ibmec por R$ 1,9 bilhão</h3>
                </a>
            </div>

            <div class="sunoNews__triple__card">
                <div class="sunoNews__triple__image">

                    <a class="sunoNews__triple__image__pictureLink" href="#">
                        <picture>
                            <img src="<?php echo myapp_get_theme_image('news/financas.jpg'); ?>" width="280" height="150" alt="financas">
                        </picture>
                    </a>

                    <a class="SunoNewsCategory" href="#">
                        <h2 class="SunoNewsCategory__title">financas</h2>
                    </a>
                </div>

                <a class="sunoNews__triple__card__link" href="#">
                    <h3 class="sunoNews__triple__card__title">Caixa vai antecipar saques de até R$ 500 do FGTS; veja calendário</h3>
                </a>

            </div>

            <div class="sunoNews__triple__card">

                <div class="sunoNews__triple__image">
                    <a class="sunoNews__triple__image__pictureLink" href="#">
                        <picture>
                            <img src="<?php echo myapp_get_theme_image('news/grafico.jpg'); ?>" width="280" height="150" alt="financas">
                        </picture>
                    </a>

                    <a class="SunoNewsCategory" href="#">
                        <h2 class="SunoNewsCategory__title">financas</h2>
                    </a>
                </div>

                <a class="sunoNews__triple__card__link" href="#">
                    <h3 class="sunoNews__triple__card__title">Caixa vai antecipar saques de até R$ 500 do FGTS; veja calendário</h3>
                </a>
            </div>
        </div>

    </div>


    <?php  \MyApp::render('views/partials/index/top-five'); ?>

</section>