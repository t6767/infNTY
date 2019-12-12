<?php get_header(); ?>
<main role="main" class="app__main">

    <!-- Page Begin -->
    <div class="page">

        <!-- Page Header Begin -->
        <div class="page__header" style="background-image: url('static/img/content/header-bg.jpg')">
            <div class="container">
                <div class="page__header-title typed-effect">
                    <div id="js-typed-strings">
                        <p>Компьютерщик</p>
                    </div>
                </div>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="#" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item">
                        Компьютерщик
                    </li>
                </ul>
            </div>
        </div>
        <!--/. Page Header End -->

        <!-- Page Content Begin -->
        <div class="page__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="article">
                            <?php echo $wp_query->post->post_content; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="aside-news">
                            <div class="aside-news__header">Другие вакансии</div>
                            <div class="aside-news__content">
                                <div class="aside-news__title">Компьютерщик</div>
                                <div class="aside-news__text">
                                    <p>Обязанности:</p>
                                    <p>- Обеспечение бесперебойной работы сети и устройств</p>
                                    <p>- Сборка компьютеров, настройка сети, ремонт компьютеров, настройка ПО</p>
                                </div>
                                <a href="#" class="button -bordered aside-news__button">Читать далее</a>
                            </div>
                        </div>
                        <div class="aside-news">
                            <div class="aside-news__header">Контактная информация:</div>
                            <div class="aside-news__content">
                                <div class="aside-news__text">
                                    Малика
                                    <br>hr@infin-it.kz
                                    <br>+7 (555) 5557129
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/. Page Content End -->

    </div>
    <!--/. Page End -->

</main>
<?php get_footer(); ?>