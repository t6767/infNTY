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
        <div class="container">
            <div class="row">
                <div class="col">
        <?=$PContent588 ?>
        </div></div></div>
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
                            if ($pic[0]!='') $pcic=$pic[0]; else $pcic="1.svg";
                            ?>
                            <div class="solution-b__item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 text-center<?=$st?>">
                                        <a href="<?=get_permalink()?>"><img src="<?php bloginfo('template_url'); ?>/static/img/content/<?=$pcic ?>" alt=""></a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="solution-b__subtitle">Решения</div>
                                        <div class="solution-b__title"><?php the_title(); ?></div>
                                        <div class="solution-b__text">
                                            <?=new_excerpt_more(the_excerpt_max_charlength(500))?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }}  ?>
                </div>
            </div>
        </div>
        <!--/. Page Content End -->
        <div class="container">
            <div class="row">
                <div class="col">
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
                </div></div></div>
    </div>
    <!--/. Page End -->

</main>
<!--/. App Main End -->
<?php get_footer(); ?>