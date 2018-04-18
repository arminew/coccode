<?php
/*
 * Template Name: Portfolio
 * Template Post Type: post, page, product
 */
 ?>

 <?php get_header(); ?>

 <?php
	 /*
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
 */ ?>



<section id="home-section-3" class="pt-4 pb-4 pt-md-5 pb-md-5">
	<div class="container portfolio-page"> 	
		
		<div class="row pb-2 pt-3">
			<div class="col text-center">
				<h1 class="h3 title-with-egg text-center"><?php the_title();?></h1>
			</div>
		</div><!--/ row -->
	
		<div class="button-group filter-button-group">
		  <button data-filter="*" class="button is-checked">Show all</button>
		  	  <button class="button" data-filter="categoria-a">Categoria A</button>
		  	  <button class="button" data-filter="categoria-b">Categoria B</button>
		</div><!--/ button filters -->
			
		<div class="grid">	
			<?php 
				 // IMPOSTO LA QUERY PER PORTFOLIO
				 $queryArgs = array(
				     "post_type" => 'portfolio',
				 );
				$the_query = new WP_Query( $queryArgs );
				if ( $the_query->have_posts()) { while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
					
			<div class="grid-item categoria-a pb-3 p-sm-2 p-lg-3">
					
				<article class="isotope-post">
					<a href="<?php the_permalink();?>">
						<img src="<?php echo get_template_directory_uri(); ?>/immagini-TEST/thumbnailHD-800x533.jpg" class="img-fluid" />
					</a>
					<div class="post-text">
						<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
						<div class="categories">Categoria A, Categoria B</div>
					</div><!--/ post text -->
				</article><!--/ portfolio post -->	
	
			</div><!--/ grid item -->
				
			<?php }}
				
				wp_reset_postdata(); ?>	
		</div><!-- / grid -->
	

	</div><!-- / container -->
</section>


<?php get_footer(); ?>

