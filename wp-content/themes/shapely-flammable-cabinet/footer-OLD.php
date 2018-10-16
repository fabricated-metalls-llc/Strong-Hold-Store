<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

</div><!-- #main -->
</section><!-- section -->

<div class="footer-callout">
	<?php shapely_footer_callout(); ?>
</div>

<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
	<div class="container footer-inner">
		<div class="row">
			<div class="border"></div>
			<div class="col-md-3 hidden-sm hidden-xs"></div>
			<div class="col-md-6" class="center">
				<h2 style="text-align: center;">Subscribe & Stay Informed</h2>
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
			</div>
			<div class="col-md-3 hidden-sm hidden-xs"></div>
		</div>

		<div class="row">
			<p style="text-align: center;">Have questions? Call us at 800-820-2625 or <a href="https://www.strong-hold.com/contact">email us</a>. © <?php echo date('Y'); ?> Strong Hold Products</p>
		</div>
	</div>

	<a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>
</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
