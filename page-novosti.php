<?php get_header(); ?>
<?php
global $mystrings;
$mystrings="77777777";
?>
<!-- App Main Begin -->
<main role="main" class="app__main">

    <!-- Page Begin -->
    <div class="page">

        <!-- Page Header Begin -->
        <?php
        $nflag=1;
        if ($_SERVER[REQUEST_URI]=="/ru/novosti/")
        {
            $nflag=0;
        }
        ?>
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
                            Новости
                        </li>
                </ul>
            </div>
        </div>
        <!--/. Page Header End -->
        <!-- Page Content Begin -->
        <div class="page__content">
            <div class="container">
                <section>
                    <div class="page__topbar">
                        <div class="category-select dropdown">
                            <a href="#" class="category-select__link" id="novblock" data-toggle="dropdown">Новости</a>
                            <div class="dropdown-menu category-select__menu">
                                <a href="javascript:;" onclick="getNews(1); location.reload();" class="category-select__sublink">Все новости</a>
                                <a href="javascript:;" onclick="getNews(2);" class="category-select__sublink">События</a>
                                <a href="javascript:;" onclick="getNews(3);" class="category-select__sublink">Мероприятия</a>
                                <a href="javascript:;" onclick="getNews(4);" class="category-select__sublink">СМИ о нас</a>
                            </div>
                        </div>
                        <button type="button" class="button -bordered" data-target="#modal-cta" data-toggle="modal">контакт с pr-службой</button>
                    </div>
                    <div class="row" id="ajax" vertical-gutter="40" data-gutter="40">



                        <?php
                        global $paged;
                        if ( get_query_var('paged') )
                            $my_page = get_query_var('paged');
                        else {
                            if ( get_query_var('page') )
                                $my_page = get_query_var('page');
                            else
                                $my_page = 1;
                            set_query_var('paged', $my_page);
                            $paged = $my_page;
                        }


                        $query = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 4,
                                'cat' => [17,19,18,7],  //1 7 8
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
                                            <a href="<?php the_permalink(); ?>" class="news__date"><?=$date ?></a> / <?php the_category(', '); ?>
                                            <a href="<?php the_permalink(); ?>" class="news__title"><?php the_title(); ?></a>
                                            <div class="news__text">
                                                <?=new_excerpt_more(the_excerpt_max_charlength(150))?>
                                            </div>
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
                    <script>
                        function getNews(operation) {
                            switch (operation) {
                                case 1: document.getElementById('novblock').innerText='Новости'; break;
                                case 2: document.getElementById('novblock').innerText='События'; break;
                                case 3: document.getElementById('novblock').innerText='Мероприятия'; break;
                                case 4: document.getElementById('novblock').innerText='СМИ о нас'; break;
                            }

                            $.ajax({
                                type:'POST',
                                url:'/ajax.php',
                                data:{
                                    'operation':operation
                                },
                                success:function(html){
                                    $('#ajax').html(html);
                                },
                                error:function(html){
                                    $('body').css('cursor','default');
                                    alert('Ошибка подключения!');
                                },
                            });
                        }
                    </script>
                </section>
            </div>
        </div>
        <!--/. Page Content End -->
    </div>
    <!--/. Page End -->
</main>
<!--/. App Main End -->
<?php get_footer(); ?>
