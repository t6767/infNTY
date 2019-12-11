<?php get_header(); ?>
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
            <section id="intro-about" class="intro-about section">
                <div class="container section__container">
                    <div class="section__background-title" data-parallax='{"y": 80, "smoothness": 45}'>О КОМПАНИИ</div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="intro-about__text">
                                <p>InFin-IT Solution является научно-производственной компанией, занимающейся разработкой инновационных решений в области цифровых каналов для международного рынка.</p>

                                <p>InFin-IT входит в группу компаний OpenCivilization, представленную в США, Голландии, Белоруссии, России и Казахстане.</p>

                                <p>Штат сотрудников насчитывает более 200 специалистов (менеджеры проектов, архитекторы решений, бизнес – аналитики, разработчики, UX/UI- дизайнеры и QA инженеров).</p>
                                <p><strong>Представлены в США, Голландии, Белоруссии, России и Казахстане</strong>
                                </p>
                            </div>
                            <div class="intro-about__stats wow">
                                <div class="intro-about__stats-item">
                                    <div>
                                        <span class="jsCountStats">200</span>+
                                    </div>
                                    <span class="intro-about__subtext">сотрудников</span>
                                </div>
                                <div class="intro-about__stats-item">
                                    <div>
                                        <span class="jsCountStats">70</span>+
                                    </div>
                                    <span class="intro-about__subtext">проектов</span>
                                </div>
                                <div class="intro-about__stats-item">
                                    <div>
                                        <span class="jsCountStats">45</span>+
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
                                        <span class="jsCountStats">10</span>+
                                    </div>
                                    <span class="intro-about__top-stats-text">лет развития<br>и создания нового</span>
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
                            <div class="cta__title">Заполните бриф и получите план реализации Вашего проекта</div>
                            <div class="cta__subtitle">С расчетом стоимости и сроков реализации</div>
                            <a href="#" class="button cta__button">Заполнить бриф</a>
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
                    <a href="/category/smi-o-nas/" class="button intro-news__massmedia">СМИ о нас</a>
                </div>
            </section>
            <!--/. Intro News End -->

            <!-- Intro Card Begin -->
            <section>
                <div class="container">
                    <div class="row" vertical-gutter="30">
                        <div class="col-md-4">
                            <a href="/about/" class="info-card">
                                <div class="info-card__title">О Компании</div>
                                <div class="info-card__text">InFin-IT Solution является научно-производственной компанией, занимающейся разработкой инновационных решений в области цифровых каналов для международного рынка.</div>
                                <div class="info-card__link">Подробнее</div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="info-card">
                                <div class="info-card__title">Отывы заказчиков и партнеров</div>
                                <div class="info-card__text">InFin-IT Solution является научно-производственной компанией, занимающейся разработкой инновационных решений в области цифровых каналов для международного рынка.</div>
                                <div class="info-card__link">Подробнее</div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="info-card">
                                <div class="info-card__title">Пресс-центр</div>
                                <div class="info-card__text">InFin-IT Solution является научно-производственной компанией, занимающейся разработкой инновационных решений в области цифровых каналов для международного рынка.</div>
                                <div class="info-card__link">Подробнее</div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--/. Intro Card End -->

            <!-- Features Begin -->
            <section class="section">
                <div class="container section__container">
                    <div class="section__background-title -red" data-parallax='{"y": 80, "smoothness": 65}'>DIGITAL BANK</div>
                    <div class="features row">
                        <div class="features__col">
                            <a href="#" class="features__item">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/touch.svg" class="features__icon" alt="">
                                <div class="features__title">мобильный банкинг</div>
                                <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/p2.jpg')"></div>
                            </a>
                            <a href="#" class="features__item">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/touch.svg" class="features__icon" alt="">
                                <div class="features__title">портал самообслуживания</div>
                                <div class="features__text">Коммуникация без участия или с минимальным участием менеджеров Банка</div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/p3.jpg')"></div>
                            </a>
                            <a href="#" class="features__item -inverted">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/touch.svg" class="features__icon" alt="">
                                <div class="features__title">мобильный банкинг</div>
                                <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/p4.jpg')"></div>
                            </a>
                        </div>
                        <div class="features__col">
                            <a href="#" class="features__item">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/touch.svg" class="features__icon" alt="">
                                <div class="features__title">мобильный банкинг</div>
                                <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/p2.jpg')"></div>
                            </a>
                            <a href="#" class="features__item -inverted">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/touch.svg" class="features__icon" alt="">
                                <div class="features__title">портал самообслуживания</div>
                                <div class="features__text">Коммуникация без участия или с минимальным участием менеджеров Банка</div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/p3.jpg')"></div>
                            </a>
                            <a href="#" class="features__item">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/touch.svg" class="features__icon" alt="">
                                <div class="features__title">мобильный банкинг</div>
                                <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/p4.jpg')"></div>
                            </a>
                        </div>
                        <div class="features__col">
                            <a href="#" class="features__item -inverted">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/touch.svg" class="features__icon" alt="">
                                <div class="features__title">мобильный банкинг</div>
                                <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/p2.jpg')"></div>
                            </a>
                            <a href="#" class="features__item">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/touch.svg" class="features__icon" alt="">
                                <div class="features__title">портал самообслуживания</div>
                                <div class="features__text">Коммуникация без участия или с минимальным участием менеджеров Банка</div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/p3.jpg')"></div>
                            </a>
                            <a href="#" class="features__item">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/content/touch.svg" class="features__icon" alt="">
                                <div class="features__title">мобильный банкинг</div>
                                <div class="features__text">Для малого и среднего бизнеса, крупных корпораций, индивидуальных предпринимателей, частных клиентов</div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/p4.jpg')"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--/. Features End -->

            <!-- Partners Begin -->
            <section class="section pt-0">
                <div class="container section__container">
                    <div class="section__background-title" data-parallax='{"y": 80, "smoothness": 65}'>НАМ ДОВЕРЯЮТ</div>
                    <div class="row align-items-center" vertical-gutter="40">
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                            <img src="<?php bloginfo('template_url'); ?>/static/img/content/prime_source.png" class="w-100" alt="">
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                            <img src="<?php bloginfo('template_url'); ?>/static/img/content/sberbank.png" class="w-100" alt="">
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                            <img src="<?php bloginfo('template_url'); ?>/static/img/content/forbes-logo.png" class="w-100" alt="">
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                            <img src="<?php bloginfo('template_url'); ?>/static/img/content/prime_source.png" class="w-100" alt="">
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                            <img src="<?php bloginfo('template_url'); ?>/static/img/content/sberbank.png" class="w-100" alt="">
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                            <img src="<?php bloginfo('template_url'); ?>/static/img/content/forbes-logo.png" class="w-100" alt="">
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                            <img src="<?php bloginfo('template_url'); ?>/static/img/content/prime_source.png" class="w-100" alt="">
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                            <img src="<?php bloginfo('template_url'); ?>/static/img/content/sberbank.png" class="w-100" alt="">
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                            <img src="<?php bloginfo('template_url'); ?>/static/img/content/forbes-logo.png" class="w-100" alt="">
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                            <img src="<?php bloginfo('template_url'); ?>/static/img/content/forbes-logo.png" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!--/. Partners End -->

        </main>
        <!--/. App Main End -->
<?php get_footer(); ?>