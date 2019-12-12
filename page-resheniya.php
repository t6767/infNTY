<?php get_header(); ?>
<!-- App Main Begin -->
<main role="main" class="app__main">

    <!-- Page Begin -->
    <div class="page">

        <!-- Page Header Begin -->
        <div class="page__header" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/header-bg.jpg')">
            <div class="container">
                <div class="page__header-title typed-effect">
                    <div id="js-typed-strings">
                        <p>Решения</p>
                    </div>
                </div>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="#" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item">
                        Решения
                    </li>
                </ul>
            </div>
        </div>
        <!--/. Page Header End -->

        <!-- Page Content Begin -->
        <div class="page__content">
            <div class="container">
                <div class="page__topbar">
                    <!--<div class="category-select dropdown">
                    <a href="#" class="category-select__link" data-toggle="dropdown">Все категории</a>
                    <div class="dropdown-menu category-select__menu">
                        <a href="#" class="category-select__sublink">Все категории</a>
                        <a href="#" class="category-select__sublink">Корпоративный сектор</a>
                        <a href="#" class="category-select__sublink">Государственный сектор</a>
                    </div>
                </div>-->
                    <div class="page__topbar">
                        <ul class="nav tabs">
                            <li class="tabs__item">
                                <a class="tabs__link active" data-toggle="tab" href="#tabs-1" role="tab">Решения банковской сферы</a>
                            </li>
                            <li class="tabs__item">
                                <a class="tabs__link" data-toggle="tab" href="#tabs-2" role="tab">Корпоративный сектор</a>
                            </li>
                            <li class="tabs__item">
                                <a class="tabs__link" data-toggle="tab" href="#tabs-3" role="tab">Государственный сектор</a>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="button -bordered" data-target="#modal-cta" data-toggle="modal">связаться с нами</button>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="features row">
                                    <div class="features__col">
                                        <a href="#" class="features__item">
                                            <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-1.svg" class="features__icon" alt="">
                                            <div class="features__title">Интернет-банкинг</div>
                                            <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                            <div class="features__link">Подробнее</div>
                                            <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/features-1.jpg')"></div>
                                        </a>
                                        <a href="#" class="features__item">
                                            <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-4.svg" class="features__icon" alt="">
                                            <div class="features__title">маркетплейс</div>
                                            <div class="features__text">Коммуникация без участия или с минимальным участием менеджеров Банка</div>
                                            <div class="features__link">Подробнее</div>
                                            <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/features-4.jpg')"></div>
                                        </a>
                                        <a href="#" class="features__item -inverted">
                                            <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-7.svg" class="features__icon" alt="">
                                            <div class="features__title">программа лояльности</div>
                                            <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                            <div class="features__link">Подробнее</div>
                                            <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/features-7.jpg')"></div>
                                        </a>
                                    </div>
                                    <div class="features__col">
                                        <a href="#" class="features__item">
                                            <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-2.svg" class="features__icon" alt="">
                                            <div class="features__title">Мобильный банкинг</div>
                                            <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                            <div class="features__link">Подробнее</div>
                                            <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/features-2.jpg')"></div>
                                        </a>
                                        <a href="#" class="features__item -inverted">
                                            <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-5.svg" class="features__icon" alt="">
                                            <div class="features__title">чат-боты</div>
                                            <div class="features__text">Коммуникация без участия или с минимальным участием менеджеров Банка</div>
                                            <div class="features__link">Подробнее</div>
                                            <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/features-5.jpg')"></div>
                                        </a>
                                        <a href="#" class="features__item">
                                            <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-8.svg" class="features__icon" alt="">
                                            <div class="features__title">тендерная площадка</div>
                                            <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                            <div class="features__link">Подробнее</div>
                                            <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/features-8.jpg')"></div>
                                        </a>
                                    </div>
                                    <div class="features__col">
                                        <a href="#" class="features__item -inverted">
                                            <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-3.svg" class="features__icon" alt="">
                                            <div class="features__title">Портал самообслуживания</div>
                                            <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                            <div class="features__link">Подробнее</div>
                                            <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/features-3.jpg')"></div>
                                        </a>
                                        <a href="#" class="features__item">
                                            <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-6.svg" class="features__icon" alt="">
                                            <div class="features__title">Единый платежный шлюз</div>
                                            <div class="features__text">Коммуникация без участия или с минимальным участием менеджеров Банка</div>
                                            <div class="features__link">Подробнее</div>
                                            <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/features-6.jpg')"></div>
                                        </a>
                                        <a href="#" class="features__item">
                                            <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-9.svg" class="features__icon" alt="">
                                            <div class="features__title">qr-платежи и переводы</div>
                                            <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                            <div class="features__link">Подробнее</div>
                                            <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/features-9.jpg')"></div>
                                        </a>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">

                    </div>
                    <div class="tab-pane" id="tabs-3" role="tabpanel">

                    </div>
                </div>
            </div>
        </div>
        <!--/. Page Content End -->

    </div>
    <!--/. Page End -->

</main>
<!--/. App Main End -->
<?php get_footer(); ?>