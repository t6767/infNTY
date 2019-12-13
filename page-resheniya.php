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
                            <?php
                            $query = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 9,
                                    'cat' => [23],
                                    'post__not_in' => array(get_the_ID()),
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'paged' => $my_page
                                )
                            );
                            $i=0;
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    if ($i==0) {echo '<div class="features__col">';}
                                    $query->the_post();
                                    $dpole = get_post_meta( get_the_ID(), 'vid' );
                                    $icon = get_post_meta( get_the_ID(), 'icon' );
                                    if ((int)$dpole[0] > 0) $style=" -inverted"; else $style="";
                                    if ($icon[0]!='') $ic=$icon[0]; else $ic="features-icon-1.svg";
                                    ?>
                                    <a href="<?=get_permalink()?>" class="features__item<?=$style?>">
                                        <img src="<?php bloginfo('template_url'); ?>/static/img/general/<?=$ic?>" class="features__icon" alt="">
                                        <div class="features__title"><?php the_title(); ?></div>
                                        <div class="features__text"><?=the_excerpt_max_charlength(150)?></div>
                                        <div class="features__link">Подробнее</div>
                                        <div class="features__background" style="background-image: url('<?=get_the_post_thumbnail_url()?>')"></div>
                                    </a>
                                    <?php
                                    $i++;
                                    if ($i==3) {echo '</div>'; $i=0;}
                                }
                                if (($i>0) && ($i<3)) {echo '</div>';}
                            }
                            ?>
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