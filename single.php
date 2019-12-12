<?php
$post = $wp_query->post;

if (in_category('vakansii')) { //slug  категории
    include(TEMPLATEPATH.'/single-portfolio.php');
} else {
    include(TEMPLATEPATH.'/single-default.php');
}
?>