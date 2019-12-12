<?php get_header(); ?>
<div class="container">
<?php
echo $wp_query->post->post_content;
?>
</div>

<?php get_footer(); ?>
