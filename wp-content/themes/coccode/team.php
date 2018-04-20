<?php
/*
 * Template Name: Team
 * Template Post Type: post, page, product
 */
 ?>
<?php get_header(); ?>

<?php
 // IMPOSTO LA QUERY PER TEAM
$queryArgs = array(
 "post_type" => 'team',
);
$the_query = new WP_Query( $queryArgs );
?>

<?php
 // ITERO I RISULTATI DI TEAM
if ( $the_query->have_posts()) : ?>
    <ul>
    <? while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
            <h3><? echo the_title ?> - <? echo get_post_meta(get_the_ID(), 'ruolo', TRUE) ?></h3>
        </li>
    <? endwhile; endif; ?>
    </ul>

<? wp_reset_postdata(); ?>

<?php get_footer(); ?>
