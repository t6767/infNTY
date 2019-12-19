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
                            <p><?php echo single_cat_title( '', false ); ?></p>
                        </div>
                    </div>
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item">
                            <a href="/" class="breadcrumbs__link">Главная</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="/ru/novosti/" class="breadcrumbs__link">Новости</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <?php echo single_cat_title( '', false ); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/. Page Header End -->
            <!-- Page Content Begin -->
            <div class="page__content">
                <div class="container">
                    <section>
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
                    </section>
                </div>
            </div>
            <!--/. Page Content End -->
        </div>
        <!--/. Page End -->
    </main>
    <!--/. App Main End -->
<?php get_footer(); ?>
<?php get_footer(); ?>