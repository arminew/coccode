<?php
/*
 * Template Name: Portfolio
 * Template Post Type: post, page, product
 */
 ?>

 <?php get_header(); ?>

<section id="home-section-3" class="pt-4 pb-4 pt-md-5 pb-md-5">
	<div class="container portfolio-page">

		<div class="row pb-2 pt-3">
			<div class="col text-center">
				<h1 class="h3 title-with-egg text-center"><?php the_title();?></h1>
			</div>
		</div><!--/ row -->

		<div class="button-group filter-button-group">
		    <button data-filter="*" class="button is-checked">Show all</button>
            <?php
            $terms = get_terms( 'categoria_portfolio' );
            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	            foreach ( $terms as $term ) {
	              echo '<button class="button" data-filter=".'.$term->slug.'">'.$term->name.'</button>';
	            }
            }
            ?>
		</div><!--/ button filters -->

		<div class="grid">
			<?php
			 // IMPOSTO LA QUERY PER PORTFOLIO
			 $queryArgs = array(
			     "post_type" => 'portfolio',
			 );
			$the_query = new WP_Query( $queryArgs );
			if ( $the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post();
				$terms = wp_get_object_terms(get_the_ID(), 'categoria_portfolio');
				$term_names = array_map(create_function('$term', 'return $term->name;'), $terms);
				$term_slugs = array_map(create_function('$term', 'return $term->slug;'), $terms);
			?>

				<div class="grid-item pb-3 p-sm-2 p-lg-3 <? echo implode(" ", $term_slugs)?>">

					<article class="isotope-post">
						<a href="<?php the_permalink();?>">
							<img src="<?php echo get_template_directory_uri(); ?>/immagini-TEST/thumbnailHD-800x533.jpg" class="img-fluid" />
						</a>
						<div class="post-text">
							<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
							<div class="categories">
								<?php echo implode(', ', $term_names)?>
							</div>
						</div><!--/ post text -->
					</article><!--/ portfolio post -->

				</div><!--/ grid item -->

			<?php endwhile; endif;

			wp_reset_postdata(); ?>
		</div><!-- / grid -->


	</div><!-- / container -->
</section>


<?php get_footer(); ?>
