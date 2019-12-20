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
            <?php
            $post_614 = get_post( 614 );
            $PTitle = $post_614->post_title;
            $PContent=apply_filters( 'the_content', $post_614->post_content );
            //$dpoleSotrudniki = get_post_meta( $post_614->ID, 'sotrudniki' );
            echo $PContent;
            ?>
            <!--/. Page Content End -->

        </div>
        <!--/. Page End -->

    </main>
    <!--/. App Main End -->
<?php
get_footer();
?>