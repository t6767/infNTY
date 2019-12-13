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
                    <form class="search-results__header" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
                        <div class="control mb-0">
                            <input type="search" class="control__input search-results__input" name="s" placeholder="Найти" value="<?=$s?>">
                        </div>
                        <input type="hidden" name="post_type[]" value="book" />
                        <input type="hidden" name="post_type[]" value="magazine" />
                        <input type="hidden" name="post_type[]" value="ebook" />
                        <input type="hidden" name="post_type[]" value="pdf" />
                        <button type="submit" class="button -bordered search-results__button" value="Search">Искать</button>
                    </form>
                    <?php
                        if ( $the_query->have_posts() ) {
                            ?>
                            <h5>Результаты поиска <?=wp_count_posts()?></h5>
                    <?php
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                ?>
                                <div class="search-results__item">
                                    <a href="<?php the_permalink(); ?>" class="search-results__title"><?php the_title(); ?></a>
                                    <p><?=the_excerpt()?></p>
                                    <p class="mb-2">Дата: <?php echo get_the_date("d.m.Y"); ?></p>
                                    <p>Путь: <a style="color:#1a73e8;" href="/">Главная</a> / <span class="ttt"><?php the_category(', '); ?></span>
                                    </p>
                                </div>
                                <?php
                            }} else {
                            ?>
                            <h5>По вашему запросу ничего не найдено</h5>
                            <?php
                        }
                            ?>
                </div>
            </div>
        </div>
        <!--/. Page Content End -->

    </div>
    <!--/. Page End -->

</main>
<!--/. App Main End -->
<?php get_footer(); ?>