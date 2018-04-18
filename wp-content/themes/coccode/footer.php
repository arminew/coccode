
<footer class="bg-dark pt-4 pb-4">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 col-lg-4">
				mailchimp
			</div><!--/ col 4 -->
			
			<div id="footerForm" class="col-md-6 col-lg-8">
				<?php echo do_shortcode('[contact-form-7 id="37" title="Contatti"]' ); ?>
			</div><!--/ col 8 -->
			
		</div><!--/ row-->
	</div><!--/ container-->
</footer>



<?php wp_footer(); ?>


<?php // use this version for owl carousel ?>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/owlCarousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/bootstrap4/bootstrap.min.js"></script>

<!--/ custom js-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/coccode.js"></script>

</body>
</html>