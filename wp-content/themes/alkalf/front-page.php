<?php
/**
 * 
 * Template Name: Front page
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alkalf
 */

get_header(); 

?>
<main class="main">
    <?php get_template_part( 'template-parts/front', 'hero' ); ?>
    <?php get_template_part( 'template-parts/front', 'about' ); ?>
    <?php get_template_part( 'template-parts/front', 'cludes' ); ?>
    <?php get_template_part( 'template-parts/front', 'timer' ); ?>
    <?php get_template_part( 'template-parts/front', 'program' ); ?>
    <?php get_template_part( 'template-parts/front', 'feedback' ); ?>
    <?php get_template_part( 'template-parts/front', 'timer' ); ?>
</main>



<?php
get_footer();
?>