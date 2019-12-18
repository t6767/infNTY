<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <!-- App Main Begin -->
    <main role="main" class="app__main">

        <!-- Page Begin -->
        <div class="page">

            <!-- Page Header Begin -->
            <div class="page__header" style="background-image: url('static/img/content/header-bg.jpg')">
                <div class="container">
                    <div class="page__header-title typed-effect">
                        <div id="js-typed-strings">
                            <p>Новости</p>
                        </div>
                    </div>
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item">
                            <a href="/" class="breadcrumbs__link">Главная</a>
                        </li>
                        <li class="breadcrumbs__item">
                            Ошибка 404
                        </li>
                    </ul>
                </div>
            </div>
            <!--/. Page Header End -->

            <!-- Page Content Begin -->
            <div class="page__content">
                <div class="container">
                    <div class="not-found">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="not-found__title">Ой!</div>
                                <h3>Похоже, мы не можем найти<br>нужную вам страницу</h3>
                                <h5>Код Ошибки: 404</h5>
                                <p>
                                    Вот несколько полезных ссылок:
                                    <br>
                                    <a href="/">Главная</a>
                                    <br>
                                    <a href="/?s=123321">Поиск по сайту</a>
                                    <br>
                                    <a href="/novosti/">Новости</a>
                                </p>
                            </div>
                            <div class="col-md-6 text-center">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/general/not-found.svg" alt="">
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

<?php
// Кому отправляем
$to = 't6767@mail.ru';

// Тема письма
$subject = 'Проверка wp_mail';

// Само сообщение
$message = 'Это тестовое сообщение';

// Загружаем только ядро WordPress
define( 'WP_USE_THEMES', false );
require( 'wp-load.php' );

// Отправляем письмо
$sent_message = wp_mail( $to, $subject, $message );

if ( $sent_message ) {
    // Если сообщение успешно отправилось
    echo 'Всё чётко настроил, бро!';
} else {
    // Ошибки при отправке
    echo 'Где-то ты лоханулся знатно!';
}

get_footer();
?>