<!-- strukturen på hur sidan ska laddas i php -->
<?php while (have_posts()) {
    the_post();
}
?>
<?php get_header(); ?>
<?php get_footer(); ?>