<?php get_header(); ?>
<!-- App Main Begin -->
<?php
var_dump($_GET);
global $mystrings;
echo $mystrings."999";
?>
<main role="main" class="app__main">

    <!-- Page Begin -->
    <div class="page">

        <!-- Page Header Begin -->
        <div class="page__header" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/header-bg.jpg')">
            <div class="container">
                <div class="page__header-title typed-effect">
                    <div id="js-typed-strings">
                        <p>О компании</p>
                    </div>
                </div>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="#" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item">
                        О компании11
                    </li>
                </ul>
            </div>
        </div>
        <!--/. Page Header End -->

        <!-- Page Content Begin -->
        <div class="page__content">
            <div class="container">
                <div class="page__topbar">
                    <ul class="nav tabs">
                        <li class="tabs__item">
                            <a class="tabs__link active" data-toggle="tab" href="#tabs-1" role="tab">История компании</a>
                        </li>
                        <li class="tabs__item">
                            <a class="tabs__link" data-toggle="tab" href="#tabs-2" role="tab">Команда</a>
                        </li>
                        <li class="tabs__item">
                            <a class="tabs__link" data-toggle="tab" href="#tabs-3" role="tab">Отзывы</a>
                        </li>
                        <li class="tabs__item">
                            <a class="tabs__link" data-toggle="tab" href="#tabs-4" role="tab">Вакансии</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="about">
                            <div class="about__left">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/p5.png" class="about__img" alt="">
                            </div>
                            <div class="text-center">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/notes.png" class="about__notes" alt="">
                            </div>
                            <div class="about__content">
                                <div class="about__top-content">
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/content/infin.png" alt="">
                                    <div class="about__top-stats">
                                        10 +
                                        <br>
                                        <span>лет развития<br>и создания нового</span>
                                    </div>
                                </div>
                                <div class="about__text">
                                    <p>InFin-IT Solution является научно-производственной компанией, занимающейся разработкой инновационных решений в области цифровых каналов для международного рынка.</p>

                                    <p>InFin-IT входит в группу компаний OpenCivilization, представленную в США, Голландии, Белоруссии, России и Казахстане.</p>

                                    <p>Штат сотрудников насчитывает более 200 (менеджеры проектов, архитекторы решений, бизнес – аналитики, разработчики, UX/UI- дизайнеры и QA инженеров).</p>

                                    <p><strong>Представлены в США, Голландии, Белоруссии, России и Казахстане</strong>
                                    </p>
                                </div>
                                <div class="about__stats">
                                    <div class="about__stats-item">
                                        200 +
                                        <br>
                                        <span>сотрудников</span>
                                    </div>
                                    <div class="about__stats-item">
                                        70 +
                                        <br>
                                        <span>проектов</span>
                                    </div>
                                    <div class="about__stats-item">
                                        45 +
                                        <br>
                                        <span>партнеров</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="row" vertical-gutter="60">
                            <div class="col-sm-6 col-lg-3">
                                <div class="team">
                                    <div class="team__avatar">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/avatar.png" alt="">
                                    </div>
                                    <div class="team__header">
                                        <div class="team__name">Alibek Kulseitov</div>
                                        <div class="team__position">Html 5 developer</div>
                                    </div>
                                    <div class="team__body">
                                        <p>Основатель компании Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        <ul class="social team__social">
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="team">
                                    <div class="team__avatar">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/avatar.png" alt="">
                                    </div>
                                    <div class="team__header">
                                        <div class="team__name">Alibek Kulseitov</div>
                                        <div class="team__position">Html 5 developer</div>
                                    </div>
                                    <div class="team__body">
                                        <p>Основатель компании Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        <ul class="social team__social">
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="team">
                                    <div class="team__avatar">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/avatar.png" alt="">
                                    </div>
                                    <div class="team__header">
                                        <div class="team__name">Alibek Kulseitov</div>
                                        <div class="team__position">Html 5 developer</div>
                                    </div>
                                    <div class="team__body">
                                        <p>Основатель компании Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        <ul class="social team__social">
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="team">
                                    <div class="team__avatar">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/content/avatar.png" alt="">
                                    </div>
                                    <div class="team__header">
                                        <div class="team__name">Alibek Kulseitov</div>
                                        <div class="team__position">Html 5 developer</div>
                                    </div>
                                    <div class="team__body">
                                        <p>Основатель компании Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        <ul class="social team__social">
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <div class="reviews mb-3 mb-md-4">
                            <div class="reviews__img lg">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/review.jpg" data-src="<?php bloginfo('template_url'); ?>/static/img/content/review.jpg" alt="">
                            </div>
                            <div class="reviews__content">
                                <div class="reviews__header">
                                    <div class="reviews__title">Компания Vitek</div>
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/content/reviews.png" class="reviews__logo" alt="">
                                </div>
                                <div class="spoiler">
                                    <div class="spoiler__inner jsSpoilerInner" data-height="100">
                                        <p>Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так счастлив,
                                            мой друг, так упоен ощущением покоя, что искусство мое страдает от этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты. Когда от милой моей
                                            долины поднимается пар и полдневное солнце стоит над непроницаемой чащей темного леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у быстрого ручья и, прильнув
                                            к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему сердцу крошечный мирок. ahe leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                                            1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                    <button type="button" class="spoiler__more jsSpoilerMore" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
                                </div>
                            </div>
                        </div>
                        <div class="reviews mb-3 mb-md-4">
                            <div class="reviews__img lg">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/review.jpg" data-src="<?php bloginfo('template_url'); ?>/static/img/content/review.jpg" alt="">
                            </div>
                            <div class="reviews__content">
                                <div class="reviews__header">
                                    <div class="reviews__title">Компания Vitek</div>
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/content/reviews.png" class="reviews__logo" alt="">
                                </div>
                                <div class="spoiler">
                                    <div class="spoiler__inner jsSpoilerInner" data-height="100">
                                        <p>Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так счастлив,
                                            мой друг, так упоен ощущением покоя, что искусство мое страдает от этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты. Когда от милой моей
                                            долины поднимается пар и полдневное солнце стоит над непроницаемой чащей темного леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у быстрого ручья и, прильнув
                                            к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему сердцу крошечный мирок. ahe leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                                            1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                    <button type="button" class="spoiler__more jsSpoilerMore" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
                                </div>
                            </div>
                        </div>
                        <div class="reviews mb-3 mb-md-4">
                            <div class="reviews__img lg">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/review.jpg" data-src="<?php bloginfo('template_url'); ?>/static/img/content/review.jpg" alt="">
                            </div>
                            <div class="reviews__content">
                                <div class="reviews__header">
                                    <div class="reviews__title">Компания Vitek</div>
                                    <img src="<?php bloginfo('template_url'); ?>/static/img/content/reviews.png" class="reviews__logo" alt="">
                                </div>
                                <div class="spoiler">
                                    <div class="spoiler__inner jsSpoilerInner" data-height="100">
                                        <p>Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так счастлив,
                                            мой друг, так упоен ощущением покоя, что искусство мое страдает от этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты. Когда от милой моей
                                            долины поднимается пар и полдневное солнце стоит над непроницаемой чащей темного леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у быстрого ручья и, прильнув
                                            к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему сердцу крошечный мирок. ahe leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                                            1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                    <button type="button" class="spoiler__more jsSpoilerMore" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="sk-chase">
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                            </div>
                            <p>Пример лоадера</p>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-4" role="tabpanel">
                        <div class="row" vertical-gutter="30">
                            <div class="col-md-6 col-lg-4">
                                <div class="vacancy">
                                    <a href="#" class="vacancy__title">Компьютерщик</a>
                                    <div class="vacancy__content">
                                        <div class="vacancy__text">
                                            <p>
                                                Обязанности:
                                                <br>- Обеспечение бесперебойной работы сети и устройств
                                                <br>- Сборка компьютеров, настройка сети, ремонт компьютеров, настройка ПО
                                            </p>
                                        </div>
                                        <a href="#" class="vacancy__link">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="vacancy">
                                    <a href="#" class="vacancy__title">Компьютерщик</a>
                                    <div class="vacancy__content">
                                        <div class="vacancy__text">
                                            <p>
                                                Обязанности:
                                                <br>- Обеспечение бесперебойной работы сети и устройств
                                                <br>- Сборка компьютеров, настройка сети, ремонт компьютеров, настройка ПО
                                            </p>
                                        </div>
                                        <a href="#" class="vacancy__link">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="vacancy">
                                    <a href="#" class="vacancy__title">Компьютерщик</a>
                                    <div class="vacancy__content">
                                        <div class="vacancy__text">
                                            <p>
                                                Обязанности:
                                                <br>- Обеспечение бесперебойной работы сети и устройств
                                                <br>- Сборка компьютеров, настройка сети, ремонт компьютеров, настройка ПО
                                            </p>
                                        </div>
                                        <a href="#" class="vacancy__link">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="vacancy">
                                    <a href="#" class="vacancy__title">Компьютерщик</a>
                                    <div class="vacancy__content">
                                        <div class="vacancy__text">
                                            <p>
                                                Обязанности:
                                                <br>- Обеспечение бесперебойной работы сети и устройств
                                                <br>- Сборка компьютеров, настройка сети, ремонт компьютеров, настройка ПО
                                            </p>
                                        </div>
                                        <a href="#" class="vacancy__link">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="vacancy">
                                    <a href="#" class="vacancy__title">Компьютерщик</a>
                                    <div class="vacancy__content">
                                        <div class="vacancy__text">
                                            <p>
                                                Обязанности:
                                                <br>- Обеспечение бесперебойной работы сети и устройств
                                                <br>- Сборка компьютеров, настройка сети, ремонт компьютеров, настройка ПО
                                            </p>
                                        </div>
                                        <a href="#" class="vacancy__link">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="vacancy">
                                    <a href="#" class="vacancy__title">Компьютерщик</a>
                                    <div class="vacancy__content">
                                        <div class="vacancy__text">
                                            <p>
                                                Обязанности:
                                                <br>- Обеспечение бесперебойной работы сети и устройств
                                                <br>- Сборка компьютеров, настройка сети, ремонт компьютеров, настройка ПО
                                            </p>
                                        </div>
                                        <a href="#" class="vacancy__link">Читать полностью</a>
                                    </div>
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
<!--/. App Main End -->
<?php get_footer(); ?>