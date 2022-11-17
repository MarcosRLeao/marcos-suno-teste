<?php

/**
 * Layout: views/layouts/app.php
 *
 * The main template file.
 *
 * This is the template that is used for displaying:
 * - posts
 * - single posts
 * - archive pages
 * - search results pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MyApp
 */

// \MyApp::render( 'views/partials/loop' );
?>

<!-- modulo suno-news.php -->
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


    <div class="sunoNews__topFive">
        <span class="sunoNews__topFive__title">
            Mais Lidas
        </span>

        <ul>
            <li><a href="#">Governo Federal divulga calendário de saques do FGTS em 2020</a></li>
            <li><a href="#">Brasil cria 48 mil vagas formais de trabalho em junho, segundo Caged</a></li>
            <li><a href="#">BNDES desembolsou R$ 25 bilhões no 1º semestre de 2019</a></li>
            <li><a href="#">Bovespa opera em alta, ajudada por exterior</a></li>
            <li><a href="#">Brasil cria 48 mil vagas formais de trabalho em junho, segundo dados do Caged</a></li>
        </ul>
    </div>

</section>


<!-- modulo dark-box.php -->
<div class="sunoDarkBox100">
    <section class="wrapper sunoDarkBox">


        <div class="sunoDarkBox__header">

            <picture class="sunoDarkBox__header__bg">
                <img class="sunoDarkBox__header__bg__image" src="<?php echo myapp_get_theme_image('dark-box/header-box-shadow.jpg'); ?>" alt="" srcset="">
                <div class="sunoDarkBox__header__bg__subDegrade"></div>
            </picture>

            <div class="sunoDarkBox__header__content">
                <h2 class="sunoDarkBox__header__title">Confira nossas notícias sobre as <strong>Eleições 2022</strong></h2>
                <div class="sunoDarkBox__header__tag">
                    <span>Suno <a class="sunoDarkBox__header__tag__parentheses" href="#">Notícias</a></span>
                    <span>ELEIÇÕES | 2022</span>
                </div>
            </div>

        </div>

        <!-- Swiper -->
        <div class="swiper mySwiper mySwiper--sunoDarkBox">

            <div class="swiper-wrapper sunoDarkBox__grid">

                <div class="swiper-slide sunoDarkBox__card">

                    <a class="sunoDarkBox__card__pictureLink" href="#">
                        <picture>
                            <img src="<?php echo myapp_get_theme_image('dark-box/bnds.jpg'); ?>" alt="">
                        </picture>
                    </a>

                    <div class="sunoDarkBox__card__content">

                        <a class="SunoNewsCategory" href="#">
                            <h2 class="SunoNewsCategory__title">Bolsa de valores</h2>
                        </a>

                        <a class="sunoDarkBox__card__content__author" href="#">
                            Laura Intrieri • 31/08/2022 • 08:00
                        </a>

                        <a class="sunoDarkBox__card__content__linkTitle" href="#">
                            <h3 class="sunoDarkBox__card__content__title">
                                Yduqs, ex-Estácio, compra dona da Ibmec por R$ 1,9 bilhão
                            </h3>
                        </a>

                    </div>



                </div>

                <div class="swiper-slide sunoDarkBox__card">

                    <a class="sunoDarkBox__card__pictureLink" href="#">
                        <picture>
                            <img src="<?php echo myapp_get_theme_image('dark-box/bnds.jpg'); ?>" alt="">
                        </picture>
                    </a>

                    <div class="sunoDarkBox__card__content">

                        <a class="SunoNewsCategory" href="#">
                            <h2 class="SunoNewsCategory__title">Bolsa de valores</h2>
                        </a>

                        <a class="sunoDarkBox__card__content__author" href="#">
                            Laura Intrieri • 31/08/2022 • 08:00
                        </a>

                        <a class="sunoDarkBox__card__content__linkTitle" href="#">
                            <h3 class="sunoDarkBox__card__content__title">
                                Yduqs, ex-Estácio, compra dona da Ibmec por R$ 1,9 bilhão
                            </h3>
                        </a>

                    </div>



                </div>

                <div class="swiper-slide sunoDarkBox__card">

                    <a class="sunoDarkBox__card__pictureLink" href="#">
                        <picture>
                            <img src="<?php echo myapp_get_theme_image('dark-box/paulo-guedes.jpg'); ?>" alt="">
                        </picture>
                    </a>

                    <div class="sunoDarkBox__card__content">

                        <a class="SunoNewsCategory" href="#">
                            <h2 class="SunoNewsCategory__title">Bolsa de valores</h2>
                        </a>

                        <a class="sunoDarkBox__card__content__author" href="#">
                            Laura Intrieri • 31/08/2022 • 08:00
                        </a>

                        <a class="sunoDarkBox__card__content__linkTitle" href="#">
                            <h3 class="sunoDarkBox__card__content__title">
                                Yduqs, ex-Estácio, compra dona da Ibmec por R$ 1,9 bilhão
                            </h3>
                        </a>

                    </div>



                </div>

                <div class="swiper-slide sunoDarkBox__card">

                    <a class="sunoDarkBox__card__pictureLink" href="#">
                        <picture>
                            <img src="<?php echo myapp_get_theme_image('dark-box/bnds.jpg'); ?>" alt="">
                        </picture>
                    </a>

                    <div class="sunoDarkBox__card__content">

                        <a class="SunoNewsCategory" href="#">
                            <h2 class="SunoNewsCategory__title">Bolsa de valores</h2>
                        </a>

                        <a class="sunoDarkBox__card__content__author" href="#">
                            Laura Intrieri • 31/08/2022 • 08:00
                        </a>

                        <a class="sunoDarkBox__card__content__linkTitle" href="#">
                            <h3 class="sunoDarkBox__card__content__title">
                                Yduqs, ex-Estácio, compra dona da Ibmec por R$ 1,9 bilhão
                            </h3>
                        </a>

                    </div>



                </div>

                <div class="swiper-slide sunoDarkBox__card">

                    <a class="sunoDarkBox__card__pictureLink" href="#">
                        <picture>
                            <img src="<?php echo myapp_get_theme_image('dark-box/paulo-guedes.jpg'); ?>" alt="">
                        </picture>
                    </a>

                    <div class="sunoDarkBox__card__content">

                        <a class="SunoNewsCategory" href="#">
                            <h2 class="SunoNewsCategory__title">Bolsa de valores</h2>
                        </a>

                        <a class="sunoDarkBox__card__content__author" href="#">
                            Laura Intrieri • 31/08/2022 • 08:00
                        </a>

                        <a class="sunoDarkBox__card__content__linkTitle" href="#">
                            <h3 class="sunoDarkBox__card__content__title">
                                BANCOS CAEM APÓS AUMENTO DE IMPOSTO (ITUB4, BBAS3, BBDC4, ...
                            </h3>
                        </a>

                    </div>



                </div>

            </div>

            <div class="swiper-pagination swiper-pagination--sunoDarkBox"></div>
        </div>

        <div class="sunoDarkBox__footer">
            <a class="sunoDarkBox__footer__btn" href="#">ver todos conteúdos</a>
            <span class="sunoDarkBox__footer__sponsoringCompany">
                Conteúdo patrocinado por
                <a href="#">Empresa Patrocinadora</a>
            </span>
        </div>


    </section>
</div>


