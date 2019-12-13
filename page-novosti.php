<?php get_header(); ?>
<?php global $p123; ?>
<!-- App Main Begin -->
<main role="main" class="app__main">

    <!-- Page Begin -->
    <div class="page">

        <!-- Page Header Begin -->
        <div class="page__header" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/header-bg.jpg')">
            <div class="container">
                <div class="page__header-title typed-effect">
                    <div id="js-typed-strings">
                        <p><?php the_title(); ?></p>
                    </div>
                </div>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="/" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?php the_title(); ?>
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
                            <a class="tabs__link active" data-toggle="tab" id="t1" onclick="changeHash('');" href="#tabs-1" role="tab">Новости</a>
                        </li>
                        <li class="tabs__item">
                            <a class="tabs__link" data-toggle="tab"  id="t2" onclick="changeHash('#sobitiya');" href="#tabs-2" role="tab">События</a>
                        </li>
                        <li class="tabs__item">
                            <a class="tabs__link" data-toggle="tab"  id="t3" onclick="changeHash('#meropriyatiya');" href="#tabs-3" role="tab">Мероприятия</a>
                        </li>
                        <li class="tabs__item">
                            <a class="tabs__link" data-toggle="tab"  id="t4" onclick="changeHash('#smionas');" href="#tabs-4" role="tab">СМИ о нас</a>
                        </li>
                    </ul>
                    <!--<div class="category-select dropdown">
                    <a href="#" class="category-select__link" data-toggle="dropdown">Новости</a>
                    <div class="dropdown-menu category-select__menu">
                        <a href="#" class="category-select__sublink">Все категории</a>
                        <a href="#" class="category-select__sublink">Корпоративный сектор</a>
                        <a href="#" class="category-select__sublink">Государственный сектор</a>
                    </div>
                </div>-->
                    <button type="button" class="button -bordered page__topbar-button" data-target="#modal-1" data-toggle="modal">контакт с pr-службой</button>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">

                        <div class="row" vertical-gutter="40" data-gutter="40">
                            <?php
                            global $paged1;
                            if ( get_query_var('paged') )
                                $my_page = get_query_var('paged');
                            else {
                                if ( get_query_var('page') )
                                    $my_page = get_query_var('page');
                                else
                                    $my_page = 1;
                                set_query_var('paged', $my_page);
                                $paged1 = $my_page;
                            }


                            $query = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 4,
                                    'cat' => [17],  //1 7 8
                                    'post__not_in' => array(get_the_ID()),
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'paged' => $my_page
                                )
                            );


                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    $date = get_the_date( "d.m.Y");
                                    ?>

                                    <div class="col-md-6">
                                        <div class="news">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(array(533 ,200)); ?>
                                            </a>
                                            <div class="news__content">
                                                <a href="<?php the_permalink(); ?>" class="news__title"><?php the_title(); ?></a>
                                                <div class="news__text">
                                                    <?=new_excerpt_more(the_excerpt_max_charlength(150))?>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="news__date"><?=$date ?></a> / <?php the_category(', '); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if(function_exists('wp_pagenavi')) {
                                    ?>
                                    <div class="col-md-12">
                                        <?php
                                        wp_pagenavi(array('query' => $query));
                                        ?>
                                    </div>
                                    <?php
                                    $wp_query = null;
                                    $wp_query = $query;
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="row" vertical-gutter="40" data-gutter="40">
                            <?php
                            global $paged2;
                            if ( get_query_var('paged') )
                                $my_page = get_query_var('paged');
                            else {
                                if ( get_query_var('page') )
                                    $my_page = get_query_var('page');
                                else
                                    $my_page = 1;
                                set_query_var('paged', $my_page);
                                $paged2 = $my_page;
                            }


                            $query = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 4,
                                    'cat' => [7],  //1 7 8
                                    'post__not_in' => array(get_the_ID()),
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'paged' => $my_page
                                )
                            );


                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    $date = get_the_date( "d.m.Y");
                                    ?>

                                    <div class="col-md-6">
                                        <div class="news">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(array(533 ,200)); ?>
                                            </a>
                                            <div class="news__content">
                                                <a href="<?php the_permalink(); ?>" class="news__title"><?php the_title(); ?></a>
                                                <div class="news__text">
                                                    <?=new_excerpt_more(the_excerpt_max_charlength(150))?>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="news__date"><?=$date ?></a> / <?php the_category(', '); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if(function_exists('wp_pagenavi')) {
                                    ?>
                                    <div class="col-md-12">
                                        <?php
                                        wp_pagenavi(array('query' => $query));
                                        ?>
                                    </div>
                                    <?php
                                    $wp_query = null;
                                    $wp_query = $query;
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <div class="row" vertical-gutter="40" data-gutter="40">
                            <?php
                            global $paged3;
                            if ( get_query_var('paged') )
                                $my_page = get_query_var('paged');
                            else {
                                if ( get_query_var('page') )
                                    $my_page = get_query_var('page');
                                else
                                    $my_page = 1;
                                set_query_var('paged', $my_page);
                                $paged3 = $my_page;
                            }


                            $query = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 4,
                                    'cat' => [18],  //1 7 8
                                    'post__not_in' => array(get_the_ID()),
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'paged' => $my_page
                                )
                            );


                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    $date = get_the_date( "d.m.Y");
                                    ?>

                                    <div class="col-md-6">
                                        <div class="news">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(array(533 ,200)); ?>
                                            </a>
                                            <div class="news__content">
                                                <a href="<?php the_permalink(); ?>" class="news__title"><?php the_title(); ?></a>
                                                <div class="news__text">
                                                    <?=new_excerpt_more(the_excerpt_max_charlength(150))?>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="news__date"><?=$date ?></a> / <?php the_category(', '); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if(function_exists('wp_pagenavi')) {
                                    ?>
                                    <div class="col-md-12">
                                        <?php
                                        wp_pagenavi(array('query' => $query));
                                        ?>
                                    </div>
                                    <?php
                                    $wp_query = null;
                                    $wp_query = $query;
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-4" role="tabpanel">
                        <div class="row" vertical-gutter="40" data-gutter="40">
                            <?php
                            global $paged4;
                            if ( get_query_var('paged') )
                                $my_page = get_query_var('paged');
                            else {
                                if ( get_query_var('page') )
                                    $my_page = get_query_var('page');
                                else
                                    $my_page = 1;
                                set_query_var('paged', $my_page);
                                $paged4 = $my_page;
                            }


                            $query = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 4,
                                    'cat' => [19],  //1 7 8
                                    'post__not_in' => array(get_the_ID()),
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'paged' => $my_page
                                )
                            );


                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    $date = get_the_date( "d.m.Y");
                                    ?>

                                    <div class="col-md-6">
                                        <div class="news">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(array(533 ,200)); ?>
                                            </a>
                                            <div class="news__content">
                                                <a href="<?php the_permalink(); ?>" class="news__title"><?php the_title(); ?></a>
                                                <div class="news__text">
                                                    <?=new_excerpt_more(the_excerpt_max_charlength(150))?>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="news__date"><?=$date ?></a> / <?php the_category(', '); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if(function_exists('wp_pagenavi')) {
                                    ?>
                                    <div class="col-md-12">
                                        <?php
                                        wp_pagenavi(array('query' => $query));
                                        ?>
                                    </div>
                                    <?php
                                    $wp_query = null;
                                    $wp_query = $query;
                                }
                                wp_reset_postdata();
                            }
                            ?>
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
<script>
    function hashKoder(hash) {
        switch (hash) {
            //       case "#story": alert(1); break;
            case "#sobitiya":
                document.getElementById('t2').className='tabs__link active';
                document.getElementById('tabs-2').style.display="block";
                document.getElementById('t1').className='tabs__link';
                document.getElementById('tabs-1').style.display="none";
                document.getElementById('t3').className='tabs__link';
                document.getElementById('tabs-3').style.display="none";
                document.getElementById('t4').className='tabs__link';
                document.getElementById('tabs-4').style.display="none";
                break;
            case "#meropriyatiya":
                document.getElementById('t3').className='tabs__link active';
                document.getElementById('tabs-3').style.display="block";
                document.getElementById('t1').className='tabs__link';
                document.getElementById('tabs-1').style.display="none";
                document.getElementById('t2').className='tabs__link';
                document.getElementById('tabs-2').style.display="none";
                document.getElementById('t4').className='tabs__link';
                document.getElementById('tabs-4').style.display="none";
                break;
            case "#smionas":
                document.getElementById('t2').className='tabs__link';
                document.getElementById('tabs-2').style.display="none";
                document.getElementById('t3').className='tabs__link';
                document.getElementById('tabs-3').style.display="none";
                document.getElementById('t1').className='tabs__link';
                document.getElementById('tabs-1').style.display="none";
                document.getElementById('t4').className='tabs__link active';
                document.getElementById('tabs-4').style.display="block";
                break;
            default:
                document.getElementById('tabs-1').style.display="block";
                document.getElementById('t1').className='tabs__link active';
                document.getElementById('t2').className='tabs__link';
                document.getElementById('tabs-2').style.display="none";
                document.getElementById('t3').className='tabs__link';
                document.getElementById('tabs-3').style.display="none";
                document.getElementById('t4').className='tabs__link';
                document.getElementById('tabs-4').style.display="none";
                break;
        }
    }

    var hash = window.location.hash;
    hashKoder(hash);

    function locationHashChanged() {
        var hash = window.location.hash;
        hashKoder(hash);
    }

    function changeHash(h)
    {
        window.location.hash=h;
        var hash = window.location.hash;
        hashKoder(hash);
    }
    window.onhashchange = locationHashChanged;
</script>
<?php get_footer(); ?>
