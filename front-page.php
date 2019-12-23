<?php get_header();
$post_566 = get_post( 566 );
$PTitle566 = $post_566->post_title;
$PContent566=apply_filters( 'the_content', $post_566->post_content );
$dpolezapolnitebrif = get_post_meta( $post_566->ID, 'zapolnitebrif' );
$dpolebriftext2566 = get_post_meta( $post_566->ID, 'briftext2' );
$dpolebriflink566 = get_post_meta( $post_566->ID, 'briflink' );
$dpoleblok3about566 = get_post_meta( $post_566->ID, 'blok3about' );
$dpoleblok3otzivi566 = get_post_meta( $post_566->ID, 'blok3otzivi' );
$dpoleblok3presscenter566 = get_post_meta( $post_566->ID, 'blok3presscenter' );
?>
        <!-- App Main Begin -->
        <main role="main" class="app__main">

            <!-- Entry Begin -->
            <section class="entry">
                <div class="container">
                    <div class="entry__title" data-aos="fade-up" data-aos-duration="1500">лидер в области инновационных решений</div>
                    <div class="entry__subtitle" data-aos="fade-up" data-aos-duration="2000">Гибкий подход к разработке программного обеспечения</div>
                    <div class="entry__features">

                        <?php
                        $query = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 3,
                                'cat' => 9,  //1 7 8
                                'post__not_in' => array(get_the_ID()),
                                'orderby' => 'date',
                                'order' => 'DESC'
                            )
                        );

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>

                                <a href="<?php the_permalink(); ?>" class="entry__features-item" data-aos="zoom-in" data-aos-duration="2000">
                                    <div class="entry__features-title"><?php the_title(); ?></div>
                                    <div class="entry__features-link">Подробнее</div>
                                </a>
                                <?php
                            }
                            wp_reset_postdata();
                        }

                        ?>
                    </div>
                </div>
                <div class="entry__slider">
                    <div class="swiper-container jsEntrySlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/entry-1.jpg')"></div>
                            <div class="swiper-slide" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/entry-2.jpg')"></div>
                        </div>
                    </div>
                </div>
                <a href="#intro-about" class="entry__scroll-down page-scroll">Вниз</a>
            </section>
            <!--/. Entry End -->

            <!-- Intro About Begin -->
            <?php
            $post_388 = get_post( 388 );
            $PTitle = $post_388->post_title;
            $PContent=apply_filters( 'the_content', $post_388->post_content );
            $dpoleSotrudniki = get_post_meta( $post_388->ID, 'sotrudniki' );
            $dpoleProekti = get_post_meta( $post_388->ID, 'proekti' );
            $dpolePartneri = get_post_meta( $post_388->ID, 'partneri' );
            $dpoletext10let = get_post_meta( $post_388->ID, 'text10let' );
            $dpolecifra10let = get_post_meta( $post_388->ID, 'cifra10let' );
            ?>
            <section id="intro-about" class="intro-about section">
                <div class="container section__container">
                    <div class="section__background-title" data-parallax='{"y": 80, "smoothness": 45}'><?=$PTitle ?></div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="intro-about__text">
                               <?=$PContent?>
                            </div>
                            <div class="intro-about__stats wow">
                                <div class="intro-about__stats-item">
                                    <div>
                                        <span class="jsCountStats"><?=$dpoleSotrudniki[0]?></span>+
                                    </div>
                                    <span class="intro-about__subtext">сотрудников</span>
                                </div>
                                <div class="intro-about__stats-item">
                                    <div>
                                        <span class="jsCountStats"><?=$dpoleProekti[0] ?></span>+
                                    </div>
                                    <span class="intro-about__subtext">проектов</span>
                                </div>
                                <div class="intro-about__stats-item">
                                    <div>
                                        <span class="jsCountStats"><?=$dpolePartneri[0] ?></span>+
                                    </div>
                                    <span class="intro-about__subtext">партнеров</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <div class="intro-about__top-content">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/infin.png" alt="">
                                <div class="intro-about__top-stats">
                                    <div>
                                        <span class="jsCountStats"><?=$dpolecifra10let[0] ?></span>+
                                    </div>
                                    <span class="intro-about__top-stats-text"><?=$dpoletext10let[0] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/. Intro About End -->

            <!-- Cta Begin -->
            <section class="cta">
                <div class="container">
                    <div class="cta__card" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/info-bg.jpg')">
                        <div class="cta__left">
                            <div class="cta__title"><?=$dpolezapolnitebrif[0]?></div>
                            <div class="cta__subtitle"><?=$dpolebriftext2566[0] ?></div>
                            <a href="<?=$dpolebriflink566[0] ?>" class="button cta__button">Заполнить бриф</a>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/static/img/general/briefing.png" class="cta__icon" alt="">
                    </div>
                </div>
            </section>
            <!--/. Cta End -->

            <!-- Intro News Begin -->
            <section class="intro-news section">
                <div class="container section__container">
                    <div class="section__background-title" data-parallax='{"y": 80, "smoothness": 65}'>Новости</div>
                    <div class="intro-news__row">

                        <?php
                        $query = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 2,
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
                                $date = get_the_date("d.m.Y");

                                ?>
                                <div class="intro-news__col">
                                    <a href="<?=get_permalink()?>" class="intro-news__date"><?=$date ?></a> / <?php the_category(', '); ?>
                                    <a href="<?=get_permalink()?>" class="intro-news__title"><?php the_title(); ?></a>
                                    <div class="intro-news__text">
                                        <?=the_excerpt_max_charlength(500)?>
                                    </div>
                                    <?=new_excerpt_more("") ?>
                                </div>
                                <?php
                            }}
                        ?>

                    </div>
                    <a href="/novosti/#smionas" class="button intro-news__massmedia">СМИ о нас</a>
                </div>
            </section>
            <!--/. Intro News End -->

            <!-- Intro Card Begin -->
            <!--<section>
                <div class="container">
                    <div class="row" vertical-gutter="30">
                        <div class="col-md-4">
                            <a href="/about/#history" class="info-card">
                                <div class="info-card__title"><?=$PTitle ?></div>
                                <div class="info-card__text"><?=$dpoleblok3about566[0] ?></div>
                                <div class="info-card__link">Подробнее</div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/about/#reviews" class="info-card">
                                <div class="info-card__title">Отзывы</div>
                                <div class="info-card__text"><?=$dpoleblok3otzivi566[0] ?></div>
                                <div class="info-card__link">Подробнее</div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/novosti/" class="info-card">
                                <div class="info-card__title">Пресс-центр</div>
                                <div class="info-card__text"><?=$dpoleblok3presscenter566[0] ?></div>
                                <div class="info-card__link">Подробнее</div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>-->
            <!--/. Intro Card End -->

            <!-- Features Begin -->
            <section class="section pt-0">
                <div class="container section__container">
                    <div class="section__background-title -red" data-parallax='{"y": 80, "smoothness": 65}'>DIGITAL BANK</div>
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
            </section>
            <!--/. Features End -->

            <?php
            $post_166 = get_post( 166 );
            $PTitle166 = $post_166->post_title;
            $PContent166=apply_filters( 'the_content', $post_166->post_content );
            //$link166=get_permalink(166);
            //$dpoleSotrudniki = get_post_meta( $post_388->ID, 'sotrudniki' );
            $post_425 = get_post( 425 );
            $PTitle425 = $post_425->post_title;
            $PContent425=apply_filters( 'the_content', $post_425->post_content );
            $post_423 = get_post( 423 );
            $PTitle423 = $post_423->post_title;
            $PContent423=apply_filters( 'the_content', $post_423->post_content );
            ?>  

                <!-- Services Begin -->
                <section class="section pt-0">
                    <div class="container section__container">
                        <div class="section__background-title" data-parallax='{"y": 20, "smoothness": 65}'>Услуги</div>
                        <div class="container">
                            <div class="row" vertical-gutter="60">
                                <div class="col-md-4">
                                    <div class="info-card">
                                        <div class="info-card__title"><?=$PTitle166 ?></div>
                                        <div class="info-card__text"><?=$PContent166?></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="info-card">
                                        <div class="info-card__title"><?=$PTitle425 ?></div>
                                        <div class="info-card__text"><?=$PContent425?></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="info-card">
                                        <div class="info-card__title"><?=$PTitle423 ?></div>
                                        <div class="info-card__text"><?=$PContent423?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!--/. Services End -->

            <!-- Partners Begin -->
            <section class="section pt-0">
                <div class="container section__container">
                    <div class="section__background-title -red" data-parallax='{"y": 80, "smoothness": 65}'>НАМ ДОВЕРЯЮТ</div>
                    <div class="row align-items-center" vertical-gutter="40">
                        <?php
                        $query = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'cat' => [26],
                                'post__not_in' => array(get_the_ID()),
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'paged' => $my_page
                            )
                        );
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                                    <img src="<?=get_the_post_thumbnail_url()?>" class="w-100" alt="">
                                </div>
                                <?php
                            }}
                        ?>
                    </div>
                </div>
            </section>
            <!--/. Partners End -->
        </main>
        <!--/. App Main End -->
<?php get_footer(); ?>