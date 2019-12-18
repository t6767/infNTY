<?php
get_header();
$dpole = get_post_meta( $wp_query->post->ID, 'kontakt' );
?>
<main role="main" class="app__main">

    <!-- Page Begin -->
    <div class="page">

        <!-- Page Header Begin -->
        <div class="page__header" style="background-image: url('static/img/content/header-bg.jpg')">
            <div class="container">
                <div class="page__header-title typed-effect">
                    <div id="js-typed-strings">
                        <p><?=$wp_query->post->post_title ?></p>
                    </div>
                </div>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="/" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?=$wp_query->post->post_title ?>
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
                                <a href="#" class="aside-news__item">
                                    <div class="aside-news__item-title">Компьютерщик</div>
                                    <div class="aside-news__item-text">
                                        <p>Обязанности:</p>
                                        <p>- Обеспечение бесперебойной работы сети и устройств</p>
                                    </div>
                                </a>
                                <a href="#" class="aside-news__item">
                                    <div class="aside-news__item-title">Компьютерщик</div>
                                    <div class="aside-news__item-text">
                                        <p>Обязанности:</p>
                                        <p>- Обеспечение бесперебойной работы сети и устройств</p>
                                    </div>
                                </a>
                                <a href="#" class="aside-news__item">
                                    <div class="aside-news__item-title">Компьютерщик</div>
                                    <div class="aside-news__item-text">
                                        <p>Обязанности:</p>
                                        <p>- Обеспечение бесперебойной работы сети и устройств</p>
                                    </div>
                                </a>
                            </div>
                        </div>
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
                                    <?=$dpole[0] ?>
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
<?php
//echo "<pre>";
//var_dump($wp_query->post);
//echo "</pre>";
?>
<?php get_footer(); ?>
