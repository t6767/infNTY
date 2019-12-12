<?php
$post = $wp_query->post;

if (in_category('20')) { //ID категории
    include(TEMPLATEPATH.'/single-vakansii.php');
} else {
    include(TEMPLATEPATH.'/single-default.php');
}
?>