<?php
get_header();
//$dpole = get_post_meta( $wp_query->post->ID, 'kontakt' );
?>
<!-- App Main Begin -->
<main role="main" class="app__main">

    <!-- Page Begin -->
    <div class="page">

        <!-- Page Header Begin -->
        <div class="page__header" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/header-bg.jpg')">
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
                    <div class="col-md-4">
                        <div id="aside-menu" class="aside-menu">
                            <div class="aside-menu__item">
                                <button class="aside-menu__link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Решения банковской сферы
                                </button>
                                <div id="collapseOne" class="collapse show" data-parent="#aside-menu">
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                </div>
                            </div>
                            <div class="aside-menu__item">
                                <button class="aside-menu__link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Корпоративный сектор
                                </button>
                                <div id="collapseTwo" class="collapse" data-parent="#aside-menu">
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                </div>
                            </div>
                            <div class="aside-menu__item">
                                <button class="aside-menu__link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Государственный сектор
                                </button>
                                <div id="collapseThree" class="collapse" data-parent="#aside-menu">
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                    <a href="#" class="aside-menu__sublink">Интернет-банкинг</a>
                                </div>
                            </div>
                        </div>
                        <div class="aside-news">
                            <div class="aside-news__header">Последняя новость</div>
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/p3.jpg" class="aside-news__img" alt="">
                            </a>
                            <div class="aside-news__content">
                                <a href="#" class="aside-news__title">Немного о компании-интеграторе </a>
                                <div class="aside-news__text">InFin-IT Solution является инновационной научно-производственной компанией...</div>
                                <a href="#" class="aside-news__date">23.05.2019 / Nur.kz</a>
                                <a href="#" class="button -bordered aside-news__button">Читать далее</a>
                            </div>
                        </div>
                        <div class="aside-news">
                            <img src="<?php bloginfo('template_url'); ?>/static/img/content/p3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="article">
                            <h1><?=$wp_query->post->post_title ?></h1>
                            <p>
                                <?php echo $wp_query->post->post_content; ?>
                            </p>
                            <h2 class="mt-4">Примеры реализации</h2>
                            <div class="row" vertical-gutter="30">
                                <div class="col-md-6">
                                    <div class="projects">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/reviews.png" class="projects__img" alt="">
                                        <p>BANK - казахстанский розничный системообразующий банк. Головной офис находится в Алма-Ате.</p>
                                        <strong>ИТ-поддержка производства и центрального офиса</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="projects">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/reviews.png" class="projects__img" alt="">
                                        <p>BANK - казахстанский розничный системообразующий банк. Головной офис находится в Алма-Ате.</p>
                                        <strong>ИТ-поддержка производства и центрального офиса</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="projects">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/reviews.png" class="projects__img" alt="">
                                        <p>BANK - казахстанский розничный системообразующий банк. Головной офис находится в Алма-Ате.</p>
                                        <strong>ИТ-поддержка производства и центрального офиса</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="projects">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/reviews.png" class="projects__img" alt="">
                                        <p>BANK - казахстанский розничный системообразующий банк. Головной офис находится в Алма-Ате.</p>
                                        <strong>ИТ-поддержка производства и центрального офиса</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-5">
                                <a href="javascript:void(0);" id="linkesho" onclick="document.getElementById('linkesho').style.display='none'; document.getElementById('showmore').style.display='flex'; ">Посмотреть ещё</a>
                            </div>
                            <div class="row" vertical-gutter="30" id="showmore" style="display: none;">
                                <div class="col-md-6">
                                    <div class="projects">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/reviews.png" class="projects__img" alt="">
                                        <p>BANK - казахстанский розничный системообразующий банк. Головной офис находится в Алма-Ате.</p>
                                        <strong>ИТ-поддержка производства и центрального офиса</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="projects">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/reviews.png" class="projects__img" alt="">
                                        <p>BANK - казахстанский розничный системообразующий банк. Головной офис находится в Алма-Ате.</p>
                                        <strong>ИТ-поддержка производства и центрального офиса</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="projects">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/reviews.png" class="projects__img" alt="">
                                        <p>BANK - казахстанский розничный системообразующий банк. Головной офис находится в Алма-Ате.</p>
                                        <strong>ИТ-поддержка производства и центрального офиса</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="projects">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/reviews.png" class="projects__img" alt="">
                                        <p>BANK - казахстанский розничный системообразующий банк. Головной офис находится в Алма-Ате.</p>
                                        <strong>ИТ-поддержка производства и центрального офиса</strong>
                                    </div>
                                </div>
                            </div>
                            <form class="form -cta">
                                <h2 class="form__title">Связаться с нами</h2>
                                <div class="row align-items-end" vertical-gutter="30">
                                    <div class="col-md-4">
                                        <div class="control mb-0">
                                            <input type="text" name="name" class="control__input" placeholder="Имя">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="control mb-0">
                                            <input type="text" name="phone" class="control__input" placeholder="+7 (***) ***-**-**">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="button -bordered form__button">отправить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/. Page Content End -->

    </div>
    <!--/. Page End -->

</main>
<!--/. App Main End -->
<?php
//echo "<pre>";
//var_dump($wp_query->post);
//echo "</pre>";
?>
<?php get_footer(); ?>
