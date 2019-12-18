<?php
$to = 't6767@mail.ru';
$subject = 'Проверка wp_mail';
$message = 'Это тестовое сообщение';
define( 'WP_USE_THEMES', false );
require( 'wp-load.php' );
$sent_message = wp_mail( $to, $subject, $message );
if ( $sent_message ) {
    echo 'Всё чётко настроил, бро!';
} else {
    echo 'Где-то ты лоханулся знатно!';
}
$pageCategories=0;
switch ($_POST['operation'])
{
    case 1: $pageCategories=[17,19,18,7]; break;
    case 2: $pageCategories=[17,19,18,7]; break;
    case 3: $pageCategories=[17,19,18,7]; break;
    case 4: $pageCategories=[17,19,18,7]; break;
    case 5:
        $to = 't6767@mail.ru';
        $subject = 'Проверка wp_mail';
        $message = 'Это тестовое сообщение';
        define( 'WP_USE_THEMES', false );
        require( 'wp-load.php' );
        $sent_message = wp_mail( $to, $subject, $message );
        if ( $sent_message ) {
            echo 'Всё чётко настроил, бро!';
        } else {
            echo 'Где-то ты лоханулся знатно!';
        }
        exit;
        break;
}
$to = 't6767@mail.ru';
$subject = 'Проверка wp_mail';
$message = 'Это тестовое сообщение';
define( 'WP_USE_THEMES', false );
require( 'wp-load.php' );
$sent_message = wp_mail( $to, $subject, $message );
if ( $sent_message ) {
    echo 'Всё чётко настроил, бро!';
} else {
    echo 'Где-то ты лоханулся знатно!';
}
global $paged;
if ( get_query_var('paged') )
    $my_page = get_query_var('paged');
else {
    if ( get_query_var('page') )
        $my_page = get_query_var('page');
    else
        $my_page = 1;
    set_query_var('paged', $my_page);
    $paged = $my_page;
}


$query = new WP_Query(
    array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'cat' => $pageCategories,  //1 7 8
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
        $content = get_the_content('читать далее');
        ?>

        <div class="col-md-6">
            <div class="news">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(array(533 ,200)); ?>
                </a>
                <div class="news__content">
                    <a href="<?php the_permalink(); ?>" class="news__date"><?=$date ?> / Nur.kz</a>
                    <a href="<?php the_permalink(); ?>" class="news__title"><?php the_title(); ?></a>
                    <div class="news__text">
                        <?=apply_filters( 'the_content', $content ); ?>
                    </div>
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

exit;