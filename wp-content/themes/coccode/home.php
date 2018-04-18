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
	
	<section id="home-section-2" class="d-flex min-h-100  align-middle text-light">
		<div class="container-fluid p-0 min-h-100 d-flex justify-content-center align-items-center"> 	
			
			
			<div id="home-carousel" class="owl-carousel">
				<div class="item" style="background-color: #23262B">
					<article class="portfolio-post">
						<div class="portfolio-text">
							<h1>Titolo</h1>
							<div class="parola-chiave">
								UX design<br/>
								UI design
							</div>
							<button type="button" class="btn btn-primary"><i>A</i> Vedi lavoro</button>
						</div><!--/ portfolio text -->
						​<picture>
							<?php // mobile image - METTERE immagine "FULL", gestiscono loro il formato ?>
							<source srcset="<?php echo get_template_directory_uri(); ?>/immagini-TEST/imgMobile-750x1334-01.jpg" media="(max-width: 767px)">
							<?php // desktop image - METTERE immagine "FULL", gestiscono loro il formato ?>
							<source srcset="<?php echo get_template_directory_uri(); ?>/immagini-TEST/imgHD-1920x1080-01.jpg">
							<?php // default image = desktop ?>
							<img src="<?php echo get_template_directory_uri(); ?>/immagini-TEST/imgHD-1920x1080-01.jpg" alt="Flowers">
						</picture>
					</article>
				</div>
				<div class="item" style="background-color: #48A9E1">
					<article class="portfolio-post">
						<div class="portfolio-text">
							<h1>Titolo</h1>
							<div class="parola-chiave">
								UX design<br/>
								UI design
							</div>
							<button type="button" class="btn btn-primary"><i>A</i> Vedi lavoro</button>
						</div><!--/ portfolio text -->
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/immagini-TEST/imgMobile-750x1334-02.jpg" media="(max-width: 767px)">
							<source srcset="<?php echo get_template_directory_uri(); ?>/immagini-TEST/imgHD-1920x1080-02.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/immagini-TEST/imgHD-1920x1080-02.jpg" alt="Flowers">
						</picture>
					</article>
				</div>
			</div><!--/ carousel -->
			
			
			<?php
			// IMPOSTO LA QUERY PER PORTFOLIO
/*
			$queryArgs = array(
			    "post_type" => 'portfolio',
			    "meta_key" => 'in_home_page',
			    "meta_value" => true
			);
			
			$portfolio = new WP_Query( $queryArgs );
			?>
			
			<?php
			 // ITERO I RISULTATI DI PORTFOLIO
			if ( $portfolio->have_posts() ) {
			  echo '<ul>';
			  while ( $portfolio->have_posts() ) {
			    $portfolio->the_post();
			    echo '<li>' . get_the_title() . '<br />';
			    echo get_the_content() . '</li>';
			  }
			  echo '</ul>';
			} else {
			  echo 'No portfolio';
			}
			wp_reset_postdata();
*/
			?>
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
					<button type="button" class="btn btn-primary"><i>A</i> Vedi tutti</button>
				</div>
			</div><!--/ row -->
			
		</div><!--/ container -->
	</section><!--/ section 2 -->
	
<?php get_footer(); ?>
