<?php get_header(); ?>
<!-- content -->




<?php the_post() ?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?>

<?php get_footer(); ?>
