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
    <title><?php bloginfo('name'); ?></title>
    <meta content="" name="description">
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
    <link rel="icon" type="image/png" href="favicon.png">

    <script>
        (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
    </script>
    <!--[if lt IE 9 ]>
    <script src="<?php bloginfo('template_url'); ?>/static/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/static/js/separate-js/respond.min.js" type="text/javascript"></script>
    <meta content="no" http-equiv="imagetoolbar">
    <![endif]-->
</head>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
    <div class="menu">
        <div class="menu__col">
            <button type="button" class="menu__close">
                <span class="menu__close-item"></span>
            </button>
            <div class="menu__inner">

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
            if (($_SERVER[REQUEST_URI]=="/") || ($_SERVER[REQUEST_URI]=="/ru/") || ($_SERVER[REQUEST_URI]=="/kz/"))
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
                        <div class="lang" style="display: none">
                            <a href="/ru/" class="lang__link -active">РУС</a>
                            <a href="/kz/" class="lang__link">КАЗ</a>
                        </div>
                        <button type="button" class="burger jsBurgerMenu">
                            <span class="burger__item"></span>
                        </button>
                    </div>
                </div>
            </header>
            <!--/. Header end -->
