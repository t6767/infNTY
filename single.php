<?php
$post = $wp_query->post;

if (in_category('20')) { //ID категории
    include(TEMPLATEPATH.'/single-vakansii.php');
} else
{
    if (in_category('22')) { //ID категории
        include(TEMPLATEPATH.'/single-solution.php');
    }
    else
    {
    include(TEMPLATEPATH.'/single-default.php');
    }
}
?>