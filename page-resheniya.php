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
                        <a href="/" class="breadcrumbs__link">Главная</a>
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
                    <button type="button" class="button -bordered" data-target="#modal-1" data-toggle="modal">связаться с нами</button>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <?php
                        $post_16 = get_post( 16 );
                        $PContent=apply_filters( 'the_content', $post_16->post_content );
                        $dpolebank_sfera = get_post_meta( $post_16->ID, 'bank_sfera' );
                        $dpolekorp_sfera = get_post_meta( $post_16->ID, 'korp_sfera' );
                        $dpolegos_sfera = get_post_meta( $post_16->ID, 'gos_sfera' );
                        ?>
                        <?=$dpolebank_sfera[0] ?>
                        <div class="row" vertical-gutter="20" data-gutter="20">
                            <?php
                            $query = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 9,
                                    'cat' => [23],
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                )
                            );
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    $icon = get_post_meta( get_the_ID(), 'icon' );
                                    if ($icon[0]!='') $ic=$icon[0]; else $ic="features-icon-1.svg";
                                    ?>
                                    <div class="col-md-6 col-lg-4">
                                        <a href="<?=get_permalink()?>" class="solution">
                                            <img src="<?php bloginfo('template_url'); ?>/static/img/general/<?=$ic?>" class="solution__icon" alt="">
                                            <div class="solution__content">
                                                <div class="solution__title"><?php the_title(); ?></div>
                                                <div class="solution__link">Подробнее</div>
                                            </div>
                                            <div class="solution__background" style="background-image: url('<?=get_the_post_thumbnail_url()?>')"></div>
                                        </a>
                                    </div>
                                    <?php }}  ?>
                        </div>
                        <form class="form contacts__form">
                            <h2 class="form__title">Написать нам</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="control">
                                        <input type="text" id="resheniyaname" onblur="proverkaResheniya()" oninput="proverkaResheniya()"  name="name" class="control__input" placeholder="Имя">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="control">
                                        <input type="text" id="resheniyaphone"  onblur="proverkaResheniya()" oninput="proverkaResheniya()" name="phone" class="control__input" placeholder="+7 (***) ***-**-**">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="control">
                                        <input type="text" id="resheniyaemail"  onblur="proverkaResheniya()" oninput="proverkaResheniya()"  name="email" class="control__input" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="control mt-md-3">
                                <textarea onblur="proverkaResheniya()" oninput="proverkaResheniya()" id="resheniyamessage" class="control__textarea" placeholder="Сообщение"></textarea>
                            </div>
                            <div class="text-center">
                                <button id="buttonsendreshen" type="button" onclick="getAjaxContactForm('2', document.getElementById('resheniyaname').value, document.getElementById('resheniyamessage').value, document.getElementById('resheniyaphone').value, document.getElementById('resheniyaemail').value);" data-target="#modal-3" data-toggle="modal" class="button -bordered form__button" disabled>отправить</button>
                            </div>
                        </form>
                        <script>
                            function proverkaResheniya() {
                                nameResh=nm(document.getElementById('resheniyaname').value);
                                messResh=nm(document.getElementById('resheniyamessage').value);
                                telResh=ph(document.getElementById('resheniyaphone').value);
                                emailResh=ff(document.getElementById('resheniyaemail').value);
                                if(emailResh==1 && telResh==1 && nameResh==1 && messResh==1) document.getElementById('buttonsendreshen').disabled = false; else document.getElementById('buttonsendreshen').disabled = true;
                            }
                            var emailResh=0;
                            var telResh=0;
                            var nameResh=0;
                            var messResh=0;
                        </script>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <?=$dpolekorp_sfera[0] ?>
                    </div>
                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <?=$dpolegos_sfera[0] ?>
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