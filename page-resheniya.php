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
                    <button type="button" class="button -bordered" data-target="#modal-1" data-toggle="modal">связаться с нами</button>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <h1>Решения для банковской сферы</h1>
                        <h2 style="color: #1A73E8">Краткое описание решения и его преимуществ</h2>
                        <p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные члены предложения залетают прямо в рот. </p>
                        <h5>Продукты в рамках решения:</h5>
                        <div class="row" vertical-gutter="20" data-gutter="20">
                            <?php
                            $query = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 9,
                                    'cat' => [23],
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                )
                            );
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    $icon = get_post_meta( get_the_ID(), 'icon' );
                                    if ($icon[0]!='') $ic=$icon[0]; else $ic="features-icon-1.svg";
                                    ?>
                                    <div class="col-md-6 col-lg-4">
                                        <a href="<?=get_permalink()?>" class="solution">
                                            <img src="<?php bloginfo('template_url'); ?>/static/img/general/<?=$ic?>" class="solution__icon" alt="">
                                            <div class="solution__content">
                                                <div class="solution__title"><?php the_title(); ?></div>
                                                <div class="solution__link">Подробнее</div>
                                            </div>
                                            <div class="solution__background" style="background-image: url('<?=get_the_post_thumbnail_url()?>')"></div>
                                        </a>
                                    </div>
                                    <?php }}  ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <h1>Решения для банковской сферы</h1>
                        <h2 style="color: #1A73E8">Краткое описание решения и его преимуществ</h2>
                        <p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные члены предложения залетают прямо в рот. </p>
                        <h5>Продукты в рамках решения:</h5>
                        <div class="row" vertical-gutter="20" data-gutter="20">
                            <div class="col-md-6 col-lg-4">
                                <a href="#" class="solution">
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-1.svg" class="solution__icon" alt="">
                                    <div class="solution__content">
                                        <div class="solution__title">интернет-банкинг</div>
                                        <div class="solution__link">Подробнее</div>
                                    </div>
                                    <div class="solution__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/solution-1.jpg')"></div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="#" class="solution">
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-2.svg" class="solution__icon" alt="">
                                    <div class="solution__content">
                                        <div class="solution__title">МОБИЛЬНЫЙ БАНКИНГ</div>
                                        <div class="solution__link">Подробнее</div>
                                    </div>
                                    <div class="solution__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/solution-2.jpg')"></div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="#" class="solution">
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-3.svg" class="solution__icon" alt="">
                                    <div class="solution__content">
                                        <div class="solution__title">Портал самообслуживания</div>
                                        <div class="solution__link">Подробнее</div>
                                    </div>
                                    <div class="solution__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/solution-3.jpg')"></div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="#" class="solution">
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-4.svg" class="solution__icon" alt="">
                                    <div class="solution__content">
                                        <div class="solution__title">Маркетплейс</div>
                                        <div class="solution__link">Подробнее</div>
                                    </div>
                                    <div class="solution__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/solution-4.jpg')"></div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="#" class="solution">
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-5.svg" class="solution__icon" alt="">
                                    <div class="solution__content">
                                        <div class="solution__title">чат-боты</div>
                                        <div class="solution__link">Подробнее</div>
                                    </div>
                                    <div class="solution__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/solution-5.jpg')"></div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="#" class="solution">
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-6.svg" class="solution__icon" alt="">
                                    <div class="solution__content">
                                        <div class="solution__title">единый платежный шлюз</div>
                                        <div class="solution__link">Подробнее</div>
                                    </div>
                                    <div class="solution__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/solution-6.jpg')"></div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="#" class="solution">
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-7.svg" class="solution__icon" alt="">
                                    <div class="solution__content">
                                        <div class="solution__title">программа лояльности</div>
                                        <div class="solution__link">Подробнее</div>
                                    </div>
                                    <div class="solution__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/solution-7.jpg')"></div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="#" class="solution">
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-8.svg" class="solution__icon" alt="">
                                    <div class="solution__content">
                                        <div class="solution__title">тендерная площадка</div>
                                        <div class="solution__link">Подробнее</div>
                                    </div>
                                    <div class="solution__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/solution-8.jpg')"></div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="#" class="solution">
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/general/features-icon-9.svg" class="solution__icon" alt="">
                                    <div class="solution__content">
                                        <div class="solution__title">qr-платежи
                                            и переводы</div>
                                        <div class="solution__link">Подробнее</div>
                                    </div>
                                    <div class="solution__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/solution-9.jpg')"></div>
                                </a>
                            </div>
                        </div>
                        <form class="form contacts__form">
                            <h2 class="form__title">Написать нам</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="control">
                                        <input type="text" name="name" class="control__input" placeholder="Имя">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="control">
                                        <input type="text" name="phone" class="control__input" placeholder="+7 (***) ***-**-**">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="control">
                                        <input type="text" name="email" class="control__input" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="control mt-md-3">
                                <textarea class="control__textarea" placeholder="Сообщение"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="button -bordered form__button">отправить</button>
                            </div>
                        </form>
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