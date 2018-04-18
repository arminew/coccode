<?php
/*
 * Template Name: Team
 * Template Post Type: post, page, product
 */
 ?>

 <?php get_header(); ?>


<?php
 // IMPOSTO LA QUERY PER TEAM
$team = new WP_Query(array("post_type" => 'team'));
?>

<?php
 // ITERO I RISULTATI DI TEAM
if ( $team->have_posts() ) {
  echo '<ul>';
  while ( $team->have_posts() ) {
    $team->the_post();
    echo '<li>' . get_the_title() . '<br />';
    echo get_the_content() . '<br />';
    echo get_post_meta(get_the_ID(), 'ruolo', TRUE) . '<br />';
  }
  echo '</ul>';
} else {
  echo 'No team';
}
wp_reset_postdata();
?>

 <?php get_footer(); ?>
