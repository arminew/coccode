<?php
/*
 * Template Name: Home
 * Template Post Type: post, page, product
 */
 ?>

 <?php get_header(); ?>

<?php // ********************************* HOME INTRO *********************************// ?>


	<section id="home-section-1" class="d-flex min-h-100 bg-primary align-middle text-light">
		<div class="container min-h-100 d-flex justify-content-center align-items-center">


			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<?php
					if ( have_posts() ) {while ( have_posts() ) {the_post(); ?>


							<?php the_content(); ?>


					<?php } // end while
					} // end if ?>
				</div>
			</div>

			<?php //include('#__TEST__typo-sample.php'); ?>

		</div><!--/ container -->
	</section><!--/ section 1 -->


<?php // ********************************* PORTFOLIO *********************************// ?>

	<?php
	// IMPOSTO LA QUERY PER PORTFOLIO
	$queryArgs = array(
		"post_type" => 'portfolio',
		"meta_key" => 'in_home_page',
		"meta_value" => true
	);

	$portfolio = new WP_Query( $queryArgs );
	?>

	<section id="home-section-2" class="d-flex min-h-100  align-middle text-light">
		<div class="container-fluid p-0 min-h-100 d-flex justify-content-center align-items-center">
			<?php
			 // ITERO I RISULTATI DI PORTFOLIO
			if ( $portfolio->have_posts() ) : ?>
			  	<div id="home-carousel" class="owl-carousel">
					<?php while( $portfolio->have_posts() ) : $portfolio->the_post(); $count++ ?>
                    <div class="item" style="background-color: #23262B">
    					<article class="portfolio-post">
    						<div class="portfolio-text">
    							<h1><? echo get_the_title(); ?></h1>
    							<div class="parola-chiave">
    								<? echo get_the_content() ?>
    							</div>
    							<button type="button" class="btn btn-primary"><i>A</i><?php _e('Vedi lavoro','theme-text-domain'); ?></button>
    						</div><!--/ portfolio text -->
    						​<picture>
    							<?php // mobile image - METTERE immagine "FULL", gestiscono loro il formato ?>
    							<source srcset="<?php echo get_template_directory_uri(); ?>/immagini-TEST/imgMobile-750x1334-0<? echo $count ?>.jpg" media="(max-width: 767px)">
    							<?php // desktop image - METTERE immagine "FULL", gestiscono loro il formato ?>
    							<source srcset="<?php echo get_template_directory_uri(); ?>/immagini-TEST/imgHD-1920x1080-0<? echo $count ?>.jpg">
    							<?php // default image = desktop ?>
    							<img src="<?php echo get_template_directory_uri(); ?>/immagini-TEST/imgHD-1920x1080-0<? echo $count ?>.jpg" alt="Flowers">
    						</picture>
    					</article>
    				</div>
					<? endwhile; ?>
				</div>
			<? endif; ?>
			<? wp_reset_postdata(); ?>

		</div><!--/ container -->
	</section><!--/ section 2 -->


<?php // ********************************* BLOG *********************************// ?>

	<section id="home-section-3" class="pt-4 pb-4 pt-md-5 pb-md-5">
		<div class="container">

			<div class="row pb-4 pb-md-5">
				<div class="col text-center">
					<h3 class="h3 title-with-egg text-center">Blog</h3>
				</div>
			</div><!--/ row -->

			<?php // get 3 blog articles ?>

			<div class="row pb-2 pb-md-4">
				<div class="col-lg-4 mb-3">
					<article class="blog-post">
						<img src="<?php echo get_template_directory_uri(); ?>/immagini-TEST/thumbnailHD-800x533.jpg" class="img-fluid" />
						<div class="post-text">
							<ul class="categories">
								<li><a href="#" class="labelled bg-primary">Grafica</a></li>
								<li><a href="#" class="labelled bg-primary">web</a></li>
							</ul>
							<h1 class="serif"><a href="#">Il Logo fai da te</a></h1>
							<ul class="date-author">
								<li>FEB 14, 2018</li>
								<li><a href="#">Lucia</a></li>
							</ul>
						</div><!--/ post text -->
					</article><!--/ blog post -->
				</div><!--/ col -->

				<div class="col-lg-4 mb-3">
					<article class="blog-post">
						<img src="<?php echo get_template_directory_uri(); ?>/immagini-TEST/thumbnailHD-800x533.jpg" class="img-fluid" />
						<div class="post-text">
							<ul class="categories">
								<li><a href="#" class="labelled bg-primary">Grafica</a></li>
								<li><a href="#" class="labelled bg-primary">web</a></li>
							</ul>
							<h1 class="serif"><a href="#">Il Logo fai da te</a></h1>
							<ul class="date-author">
								<li>FEB 14, 2018</li>
								<li><a href="#">Lucia</a></li>
							</ul>
						</div><!--/ post text -->
					</article><!--/ blog post -->
				</div><!--/ col -->

				<div class="col-lg-4 mb-3">
					<article class="blog-post">
						<img src="<?php echo get_template_directory_uri(); ?>/immagini-TEST/thumbnailHD-800x533.jpg" class="img-fluid" />
						<div class="post-text">
							<ul class="categories">
								<li><a href="#" class="labelled bg-primary">Grafica</a></li>
								<li><a href="#" class="labelled bg-primary">web</a></li>
							</ul>
							<h1 class="serif"><a href="#">Personal Branding – Continuiamo il discorso</a></h1>
							<ul class="date-author">
								<li>FEB 14, 2018</li>
								<li><a href="#">Lucia</a></li>
							</ul>
						</div><!--/ post text -->
					</article><!--/ blog post -->
				</div><!--/ col -->
			</div><!--/ row -->


			<div class="row">
				<div class="col text-center">
					<button type="button" class="btn btn-primary"><i>A</i><?php _e('Vedi tutti','theme-text-domain'); ?></button>
				</div>
			</div><!--/ row -->

		</div><!--/ container -->
	</section><!--/ section 2 -->

<?php get_footer(); ?>
