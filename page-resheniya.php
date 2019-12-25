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
                    <?php
                    $post_588 = get_post( 588 );
                    $PTitle588 = $post_588->post_title;
                    $PContent588=apply_filters( 'the_content', $post_588->post_content );
?>
        <div class="page__content">
        <div class="container">
            <div class="page__topbar">
                <button type="button" class="button -bordered ml-auto" data-target="#modal-1" data-toggle="modal">связаться с нами</button>
            </div>
            <div class="row">
                <div class="col">
        <?=$PContent588 ?>
                    <div class="features row">
                        <div class="features__col">
                            <?php
                            $post_180 = get_post( 180 );
                            $PTitle180 = $post_180->post_title;
                            $PContent180=apply_filters( 'the_content', $post_180->post_content );
                            $dpoleIcon180 = get_post_meta( $post_180->ID, 'icon' );
                            $output180 = $post_180->post_excerpt;
                            $urlIMG180=get_the_post_thumbnail_url(180);
                            $dpoleVid180 = get_post_meta( $post_180->ID, 'vid' );
                            $dpoleAnkor180 = get_post_meta( $post_180->ID, 'ankor' )[0];
                            if ((int)$dpoleVid180[0] > 0) $style=" -inverted"; else $style="";
                            ?>
                            <a href="/resheniya/#<?=$dpoleAnkor180?>" class="features__item -inverted">
                                <img src="<?=$dpoleIcon180[0] ?>" class="features__icon" alt="<?=$PTitle180?>">
                                <div class="features__title"><?=$PTitle180?></div>
                                <div class="features__text"><?=$output180?></div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?=$urlIMG180?>')"></div>
                            </a>

                            <?php
                            $post_289 = get_post( 289 );
                            $PTitle289 = $post_289->post_title;
                            $PContent289=apply_filters( 'the_content', $post_289->post_content );
                            $dpoleIcon289 = get_post_meta( $post_289->ID, 'icon' );
                            $output289 = $post_289->post_excerpt;
                            $urlIMG289=get_the_post_thumbnail_url(289);
                            $dpoleVid289 = get_post_meta( $post_289->ID, 'vid' );
                            $dpoleAnkor289 = get_post_meta( $post_289->ID, 'ankor' )[0];
                            if ((int)$dpoleVid289[0] > 0) $style=" -inverted"; else $style="";
                            ?>
                            <a href="/resheniya/#<?=$dpoleAnkor289?>" class="features__item">
                                <img src="<?=$dpoleIcon289[0] ?>" class="features__icon" alt="<?=$PTitle289?>">
                                <div class="features__title"><?=$PTitle289?></div>
                                <div class="features__text"><?=$output289?></div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?=$urlIMG289?>')"></div>
                            </a>

                            <?php
                            $post_296 = get_post( 296 );
                            $PTitle296 = $post_296->post_title;
                            $PContent296=apply_filters( 'the_content', $post_296->post_content );
                            $dpoleIcon296 = get_post_meta( $post_296->ID, 'icon' );
                            $output296 = $post_296->post_excerpt;
                            $urlIMG296=get_the_post_thumbnail_url(296);
                            $dpoleVid296 = get_post_meta( $post_296->ID, 'vid' );
                            $dpoleAnkor296 = get_post_meta( $post_296->ID, 'ankor' )[0];
                            if ((int)$dpoleVid296[0] > 0) $style=" -inverted"; else $style="";
                            ?>
                            <a href="/resheniya/#<?=$dpoleAnkor296?>" class="features__item -inverted">
                                <img src="<?=$dpoleIcon296[0] ?>" class="features__icon" alt="<?=$PTitle296?>">
                                <div class="features__title"><?=$PTitle296?></div>
                                <div class="features__text"><?=$output296?></div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?=$urlIMG296?>')"></div>
                            </a>
                        </div>
                        <div class="features__col">
                            <?php
                            $post_187 = get_post( 187 );
                            $PTitle187 = $post_187->post_title;
                            $PContent187=apply_filters( 'the_content', $post_187->post_content );
                            $dpoleIcon187 = get_post_meta( $post_187->ID, 'icon' );
                            $output187 = $post_187->post_excerpt;
                            $urlIMG187=get_the_post_thumbnail_url(187);
                            $dpoleVid187 = get_post_meta( $post_187->ID, 'vid' );
                            $dpoleAnkor187 = get_post_meta( $post_187->ID, 'ankor' )[0];
                            if ((int)$dpoleVid187[0] > 0) $style=" -inverted"; else $style="";
                            ?>
                            <a href="/resheniya/#<?=$dpoleAnkor187?>" class="features__item">
                                <img src="<?=$dpoleIcon187[0] ?>" class="features__icon" alt="<?=$PTitle187?>">
                                <div class="features__title"><?=$PTitle187?></div>
                                <div class="features__text"><?=$output187?></div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?=$urlIMG187?>')"></div>
                            </a>


                            <?php
                            $post_291 = get_post( 291 );
                            $PTitle291 = $post_291->post_title;
                            $PContent291=apply_filters( 'the_content', $post_291->post_content );
                            $dpoleIcon291 = get_post_meta( $post_291->ID, 'icon' );
                            $output291 = $post_291->post_excerpt;
                            $urlIMG291=get_the_post_thumbnail_url(291);
                            $dpoleVid291 = get_post_meta( $post_291->ID, 'vid' );
                            $dpoleAnkor291 = get_post_meta( $post_291->ID, 'ankor' )[0];
                            if ((int)$dpoleVid291[0] > 0) $style=" -inverted"; else $style="";
                            ?>
                            <a href="/resheniya/#<?=$dpoleAnkor291?>" class="features__item -inverted">
                                <img src="<?=$dpoleIcon291[0] ?>" class="features__icon" alt="<?=$PTitle291?>">
                                <div class="features__title"><?=$PTitle291?></div>
                                <div class="features__text"><?=$output291?></div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?=$urlIMG291?>')"></div>
                            </a>

                            <?php
                            $post_298 = get_post( 298 );
                            $PTitle298 = $post_298->post_title;
                            $PContent298=apply_filters( 'the_content', $post_298->post_content );
                            $dpoleIcon298 = get_post_meta( $post_298->ID, 'icon' );
                            $output298 = $post_298->post_excerpt;
                            $urlIMG298=get_the_post_thumbnail_url(298);
                            $dpoleVid298 = get_post_meta( $post_298->ID, 'vid' );
                            $dpoleAnkor298 = get_post_meta( $post_298->ID, 'ankor' )[0];
                            if ((int)$dpoleVid298[0] > 0) $style=" -inverted"; else $style="";
                            ?>
                            <a href="/resheniya/#<?=$dpoleAnkor298?>" class="features__item">
                                <img src="<?=$dpoleIcon298[0] ?>" class="features__icon" alt="<?=$PTitle298?>">
                                <div class="features__title"><?=$PTitle298?></div>
                                <div class="features__text"><?=$output298?></div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?=$urlIMG298?>')"></div>
                            </a>
                        </div>
                        <div class="features__col">
                            <?php
                            $post_287 = get_post( 287 );
                            $PTitle287 = $post_287->post_title;
                            $PContent287=apply_filters( 'the_content', $post_287->post_content );
                            $dpoleIcon287 = get_post_meta( $post_287->ID, 'icon' );
                            $output287 = $post_287->post_excerpt;
                            $urlIMG287=get_the_post_thumbnail_url(287);
                            $dpoleVid287 = get_post_meta( $post_287->ID, 'vid' );
                            $dpoleAnkor287 = get_post_meta( $post_287->ID, 'ankor' )[0];
                            if ((int)$dpoleVid287[0] > 0) $style=" -inverted"; else $style="";
                            ?>
                            <a href="/resheniya/#<?=$dpoleAnkor287?>" class="features__item -inverted">
                                <img src="<?=$dpoleIcon287[0] ?>" class="features__icon" alt="<?=$PTitle287?>">
                                <div class="features__title"><?=$PTitle287?></div>
                                <div class="features__text"><?=$output287?></div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?=$urlIMG287?>')"></div>
                            </a>

                            <?php
                            $post_300 = get_post( 300 );
                            $PTitle300 = $post_300->post_title;
                            $PContent300=apply_filters( 'the_content', $post_300->post_content );
                            $dpoleIcon300 = get_post_meta( $post_300->ID, 'icon' );
                            $output300 = $post_300->post_excerpt;
                            $urlIMG300=get_the_post_thumbnail_url(300);
                            $dpoleVid300 = get_post_meta( $post_300->ID, 'vid' );
                            $dpoleAnkor300 = get_post_meta( $post_300->ID, 'ankor' )[0];
                            if ((int)$dpoleVid300[0] > 0) $style=" -inverted"; else $style="";
                            ?>
                            <a href="/resheniya/#<?=$dpoleAnkor300?>" class="features__item">
                                <img src="<?=$dpoleIcon300[0] ?>" class="features__icon" alt="<?=$PTitle300?>">
                                <div class="features__title"><?=$PTitle300?></div>
                                <div class="features__text"><?=$output300?></div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?=$urlIMG300?>')"></div>
                            </a>

                            <?php
                            $post_293 = get_post( 293 );
                            $PTitle293 = $post_293->post_title;
                            $PContent293=apply_filters( 'the_content', $post_293->post_content );
                            $dpoleIcon293 = get_post_meta( $post_293->ID, 'icon' );
                            $output293 = $post_293->post_excerpt;
                            $urlIMG293=get_the_post_thumbnail_url(293);
                            $dpoleVid293 = get_post_meta( $post_293->ID, 'vid' );
                            $dpoleAnkor293 = get_post_meta( $post_293->ID, 'ankor' )[0];
                            if ((int)$dpoleVid293[0] > 0) $style=" -inverted"; else $style="";
                            ?>
                            <a href="/resheniya/#<?=$dpoleAnkor293?>" class="features__item -inverted">
                                <img src="<?=$dpoleIcon293[0] ?>" class="features__icon" alt="<?=$PTitle293?>">
                                <div class="features__title"><?=$PTitle293?></div>
                                <div class="features__text"><?=$output293?></div>
                                <div class="features__link">Подробнее</div>
                                <div class="features__background" style="background-image: url('<?=$urlIMG293?>')"></div>
                            </a>

                        </div>
                    </div>
        </div></div></div></div>
        <!-- Page Content Begin -->
        <div class="page__content">
            <div class="container">
                <div class="solution-b">


                    <?php
                    $query = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'cat' => [23],
                            'orderby' => 'date',
                            'order' => 'DESC',
                        )
                    );
                    $i=0;
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            if ($i>0) { $st=" order-md-last"; $i=0; } else { $st=""; $i=1; }
                            $pic = get_post_meta( get_the_ID(), 'new' );
                            $ankor = get_post_meta( get_the_ID(), 'ankor' )[0];
                            if ($pic[0]!='') $pcic=$pic[0]; else $pcic="";
                            ?>
                            <div class="solution-b__item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 text-center<?=$st?>">
                                        <a name="<?=$ankor?>"><img src="<?=$pcic ?>" alt=""></a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="solution-b__title"><?php the_title(); ?></div>
                                        <div class="solution-b__text">
                                            <?=the_excerpt_max_charlength(500)?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }}  ?>
                </div>
                        <form class="form contacts__form mb-5">
                            <h2 class="form__title">Заказать презентацию</h2>
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
        </div>
        <!--/. Page Content End -->
    </div>
    <!--/. Page End -->

</main>
<!--/. App Main End -->
<?php get_footer(); ?>