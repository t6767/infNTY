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
                        <p>О компании</p>
                    </div>
                </div>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="/" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item">
                        О компании
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
                            <a class="tabs__link active" data-toggle="tab" id="t1" onclick="changeHash('');" href="#tabs-1" role="tab">История компании</a>
                        </li>
                        <li class="tabs__item">
                            <a class="tabs__link" data-toggle="tab" id="t2" href="#tabs-2" onclick="changeHash('#team');"  role="tab">Команда</a>
                        </li>
                        <li class="tabs__item">
                            <a class="tabs__link" data-toggle="tab" id="t3" href="#tabs-3"  onclick="changeHash('#reviews');" role="tab">Отзывы</a>
                        </li>
                        <li class="tabs__item">
                            <a class="tabs__link" data-toggle="tab" id="t4" href="#tabs-4" onclick="changeHash('#vacancy');" role="tab">Вакансии</a>
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
                                    <?php
                                    $post_388 = get_post( 388 );
                                    $PTitle = $post_388->post_title;
                                    $PContent=$post_388->post_content;
                                    $PImage = wp_get_attachment_url( get_post_thumbnail_id($post_388->ID), 'thumbnail' );
                                    // html код редактируется теперь внутри поста
                                    ?>
                                    <?=$PContent?>
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
                            <img src="<?=$PImage?>" class="my-3" alt="">
                           <div class="row" vertical-gutter="20">
                                <div class="col-sm-4"><div style="text-align: center; font-weight: 700; background: #eacace; color: #000; padding: 5px 0;">Масштабируемость Экспертизы</div></div>
                                <div class="col-sm-4"><div style="text-align: center; font-weight: 700; background: #fad4a0; color: #000; padding: 5px 0;">Центр Компетенции</div></div>
                                <div class="col-sm-4"><div style="text-align: center; font-weight: 700; background: #91eeb7; color: #000; padding: 5px 0;">Масштабируемость Ресурсов</div></div>
                            </div>
                           <p class="mt-3">Digital Community – наш бренд, который позволяет эффективно масштабировать экспертизу и ресурсы сохраняя и приумножая компетенцию в рамках динамично меняющегося рынка.</p>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="row" vertical-gutter="60">
                            <?php
                            $query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'cat' => [28], 'orderby' => 'date', 'order' => 'DESC'));
                            if ($query->have_posts()) { while ($query->have_posts()) {
                                $query->the_post();
                                $status = get_post_meta( get_the_ID(), 'status' );
                                //if ($icon[0]!='') $ic=$icon[0]; else $ic="";
                                ?>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="team">
                                        <div class="team__avatar">
                                            <img src="<?=get_the_post_thumbnail_url()?>" alt="">
                                        </div>
                                        <div class="team__header">
                                            <div class="team__name"><?php the_title(); ?></div>
                                            <div class="team__position"><?=$status[0]?></div>
                                        </div>
                                        <div class="team__body">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php }} ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <?php
                        $query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'cat' => [27], 'orderby' => 'date', 'order' => 'DESC'));
                        if ($query->have_posts()) { while ($query->have_posts()) {
                            $query->the_post();
                            $icon = get_post_meta( get_the_ID(), 'icon' );
                            //if ($icon[0]!='') $ic=$icon[0]; else $ic="";
                            ?>

                            <div class="reviews mb-3 mb-md-4">
                                <div class="reviews__img lg">
                                    <img src="<?=get_the_post_thumbnail_url()?>" data-src="<?=get_the_post_thumbnail_url()?>" alt="">
                                </div>
                                <div class="reviews__content">
                                    <div class="reviews__header">
                                        <div class="reviews__title"><?php the_title(); ?></div>
                                        <img src="<?=$icon[0]?>" class="reviews__logo" alt="">
                                    </div>
                                    <div class="spoiler">
                                        <div class="spoiler__inner jsSpoilerInner" data-height="100">
                                            <p><?php the_content(); ?></p>
                                        </div>
                                        <button type="button" class="spoiler__more jsSpoilerMore" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                    </div>
                    <div class="tab-pane" id="tabs-4" role="tabpanel">
                        <div class="row" vertical-gutter="30">
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
                                    'cat' => [20],  //1 7 8
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

                                    <div class="col-md-6 col-lg-4">
                                        <div class="vacancy">
                                            <a href="#" class="vacancy__title"><?php the_title(); ?></a>
                                            <div class="vacancy__content">
                                                <div class="vacancy__text">
                                                    <p>
                                                        <?php the_excerpt(); ?>                                                    </p>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="vacancy__link">Читать полностью</a>
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
            case "#team":
                document.getElementById('t2').className='tabs__link active';
                document.getElementById('tabs-2').style.display="block";
                document.getElementById('t1').className='tabs__link';
                document.getElementById('tabs-1').style.display="none";
                document.getElementById('t3').className='tabs__link';
                document.getElementById('tabs-3').style.display="none";
                document.getElementById('t4').className='tabs__link';
                document.getElementById('tabs-4').style.display="none";
                break;
            case "#reviews":
                document.getElementById('t3').className='tabs__link active';
                document.getElementById('tabs-3').style.display="block";
                document.getElementById('t1').className='tabs__link';
                document.getElementById('tabs-1').style.display="none";
                document.getElementById('t2').className='tabs__link';
                document.getElementById('tabs-2').style.display="none";
                document.getElementById('t4').className='tabs__link';
                document.getElementById('tabs-4').style.display="none";
                break;
            case "#vacancy":
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
