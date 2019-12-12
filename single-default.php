<?php get_header(); ?>
<div class="container">
<?php
echo $wp_query->post->post_content;
echo "<pre>";
var_dump($wp_query->post);
echo "</pre>";
?>
</div>

<?php get_footer(); ?>
