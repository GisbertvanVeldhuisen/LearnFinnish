<?php /* Template Name: Flexibele Content */ ?>

<?php get_header(); ?>

<?php
$id = get_the_ID();

if (have_rows('flexible_layouts', $id)) :

    while (have_rows('flexible_layouts', $id)) : the_row();
        get_template_part('/layouts/' . get_row_layout());
    endwhile;

endif
?>

<?php get_footer(); ?>
