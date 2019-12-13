<?php get_header(); ?>
<?php
$s=get_search_query();
$args = array('s' =>$s );
$the_query = new WP_Query( $args );
?>
<!-- App Main Begin -->
<main role="main" class="app__main">

    <!-- Page Begin -->
    <div class="page">

        <!-- Page Header Begin -->
        <div class="page__header" style="background-image: url('static/img/content/header-bg.jpg')">
            <div class="container">
                <div class="page__header-title typed-effect">
                    <div id="js-typed-strings">
                        <p>Поиск по сайту</p>
                    </div>
                </div>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="/" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item">
                        Поиск по сайту
                    </li>
                </ul>
            </div>
        </div>
        <!--/. Page Header End -->

        <!-- Page Content Begin -->
        <div class="page__content">
            <div class="container">
                <div class="search-results">
                    <form class="search-results__header">
                        <div class="control mb-0">
                            <input type="search" class="control__input search-results__input" placeholder="Найти">
                        </div>
                        <button type="submit" class="button -bordered search-results__button">Искать</button>
                    </form>
                    <h5>Результаты поиска 23</h5>
                    <div class="search-results__item">
                        <a href="#" class="search-results__title">Расчет стоимости ИТ-сервисов</a>
                        <p>... ИТ сервисов, определенное на уровне правления или высшего руководства. Названия таких структур попадают в одну из следующих категорий: Разработка прикладных систем Эксплуатация Поддержка Безопасность Архитектурное
                            планирование И так далее Эти структуры начинают ссылаться ...</p>
                        <p class="mb-2">Дата: 23.05.2019</p>
                        <p>Путь: <a href="#">Главная</a> / <a href="#">Новости</a>
                        </p>
                    </div>
                    <div class="search-results__item">
                        <a href="#" class="search-results__title">Расчет стоимости ИТ-сервисов</a>
                        <p>... ИТ сервисов, определенное на уровне правления или высшего руководства. Названия таких структур попадают в одну из следующих категорий: Разработка прикладных систем Эксплуатация Поддержка Безопасность Архитектурное
                            планирование И так далее Эти структуры начинают ссылаться ...</p>
                        <p class="mb-2">Дата: 23.05.2019</p>
                        <p>Путь: <a href="#">Главная</a> / <a href="#">Новости</a>
                        </p>
                    </div>
                    <div class="search-results__item">
                        <a href="#" class="search-results__title">Расчет стоимости ИТ-сервисов</a>
                        <p>... ИТ сервисов, определенное на уровне правления или высшего руководства. Названия таких структур попадают в одну из следующих категорий: Разработка прикладных систем Эксплуатация Поддержка Безопасность Архитектурное
                            планирование И так далее Эти структуры начинают ссылаться ...</p>
                        <p class="mb-2">Дата: 23.05.2019</p>
                        <p>Путь: <a href="#">Главная</a> / <a href="#">Новости</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--/. Page Content End -->

    </div>
    <!--/. Page End -->

</main>
<!--/. App Main End -->
<pre>
<?php var_dump($the_query); ?>
</pre>
<?php get_footer(); ?>