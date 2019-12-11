<?php
function the_excerpt_max_charlength( $charlength ){
    $excerpt = get_the_excerpt();
    $charlength++;

    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo mb_substr( $subex, 0, $excut );
        } else {
            echo $subex;
        }
        echo '...';
    } else {
        echo $excerpt;
    }
}
?>
<!doctype html>
<html class="no-js" lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?>1</title>
    <meta content="<?php bloginfo('description'); ?>" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="format-detection" content="telephone=no">
    <!-- This make sence for mobile browsers. It means, that content has been optimized for mobile browsers -->
    <meta name="HandheldFriendly" content="true">

    <!-- Stylesheet -->
    <link href="<?php bloginfo('template_url'); ?>/static/css/main.min.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/static/css/separate-css/custom.css" rel="stylesheet" type="text/css">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="twitter:description" content="" />
    <link rel="image_src" href="" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicon.png">

    <script>
        (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
    </script>
    <!--[if lt IE 9 ]>
    <script src="<?php bloginfo('template_url'); ?>/static/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/static/js/separate-js/respond.min.js" type="text/javascript"></script>
    <meta content="no" http-equiv="imagetoolbar">
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>

<div class="menu">
    <div class="menu__col">
        <button type="button" class="menu__close">Закрыть</button>
        <div class="menu__inner">
            <form class="menu__search">
                <input type="search" class="menu__search-input">
                <button type="button" class="menu__search-button">Искать</button>
            </form>
            <ul class="menu__list">
                <li class="menu__item">
                    <a href="#" class="menu__link">О компании</a>
                </li>
                <li class="menu__item">
                    <a href="#" class="menu__link">Решения</a>
                </li>
                <li class="menu__item">
                    <a href="#" class="menu__link">Услуги</a>
                </li>
                <li class="menu__item">
                    <a href="#" class="menu__link">Пресс-центр</a>
                    <ul class="menu__sublist">
                        <li class="menu__item">
                            <a href="#" class="menu__link">Новости</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">События</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Мероприятия</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">СМИ о нас</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Контакт с PR-службой</a>
                        </li>
                    </ul>
                </li>
                <li class="menu__item">
                    <a href="#" class="menu__link">Услуги</a>
                </li>
            </ul>
            <div class="menu__footer">
                <div class="menu__info">
                    <p><strong>Алматы</strong>
                    </p>
                    <a href="#" class="menu__phone">+7 (727) 232 22 22</a>
                </div>
                <div class="menu__info">
                    <p><strong>Нур-Султан</strong>
                    </p>
                    <a href="#" class="menu__phone">+7 (727) 232 22 22</a>
                </div>
                <div class="menu__social">
                    <a href="#" class="menu__footer-link -facebook"></a>
                    <a href="#" class="menu__footer-link -linkedin"></a>
                    <a href="#" class="menu__footer-link -youtube"></a>
                    <a href="#" class="menu__footer-link -twitter"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu__overlay"></div>
</div>

<!-- App Begin -->
<div class="app">

    <!-- App Wrapper Begin -->
    <div class="app__wrapper">

        <?php
        $transperent="";
        if ($_SERVER['REQUEST_URI']=="/")
        {
            $transperent=" -transparent";
        }
        ?>
        <!-- Header Begin -->
        <header class="header<?=$transperent ?>">
            <div class="container header__container">
                <a href="/" class="logo" title="infin-it">Infin-it</a>
                <div class="header__right">
                    <nav class="navigation">
                        <?php
                        wp_nav_menu(array('menu' => 'menue', 'menu_class' => 'menue'));
                        ?>
                    </nav>
                    <button type="button" class="burger jsBurgerMenu">
                        <span class="burger__item"></span>
                    </button>
                </div>
            </div>
        </header>
        <!--/. Header end -->
