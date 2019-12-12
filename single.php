<?php
$post = $wp_query->post;

if (in_category('20')) { //ID категории
    include(TEMPLATEPATH.'/single-portfolio.php');
} else {
    include(TEMPLATEPATH.'/single-default.php');
}
?>