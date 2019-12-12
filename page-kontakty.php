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
                        <p>Контакты</p>
                    </div>
                </div>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="#" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item">
                        Контакты
                    </li>
                </ul>
            </div>
        </div>
        <!--/. Page Header End -->

        <!-- Page Content Begin -->
        <div class="page__content">
            <div class="container">
                <div class="contacts2">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <div class="contacts2__left">
                                <form class="form">
                                    <h2 class="form__title">Написать нам</h2>
                                    <div class="control">
                                        <input type="text" name="name" class="control__input" placeholder="Имя">
                                    </div>
                                    <div class="control">
                                        <input type="text" name="phone" class="control__input" placeholder="+7 (***) ***-**-**">
                                    </div>
                                    <div class="control">
                                        <input type="text" name="email" class="control__input" placeholder="Email">
                                    </div>
                                    <div class="control mt-md-3">
                                        <textarea class="control__input -textarea" placeholder="Сообщение"></textarea>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="button -bordered form__button">отправить</button>
                                    </div>
                                </form>
                                <div class="contacts2__info">
                                    г. Алматы, улица
                                    <br>+7 (727) 232 22 22
                                    <br>almaty.info@infin-it.kz
                                </div>
                                <ul class="social contacts2__social">
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
                        <div class="col-lg-8">
                            <div class="contacts2__map"></div>
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
