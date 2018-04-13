<?php
/*
 * Template Name: Portfolio
 * Template Post Type: post, page, product
 */
 ?>

 <?php get_header(); ?>

 <?php
 // IMPOSTO LA QUERY PER PORTFOLIO
 $queryArgs = array(
     "post_type" => 'portfolio',
 );

 $query = new WP_Query( $queryArgs );
 ?>

 <?php
 // ITERO I RISULTATI DI PORTFOLIO
 if ( $query->have_posts() ) {
   echo '<ul>';
   while ( $query->have_posts() ) {
     $query->the_post();
     echo '<li>' . get_the_title() . '<br />';
     echo get_the_content() . '</li>';
   }
   echo '</ul>';
 } else {
   echo 'No portfolio';
 }
wp_reset_postdata();
 ?>

 <?php get_footer(); ?>
