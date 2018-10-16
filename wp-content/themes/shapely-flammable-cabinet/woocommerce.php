<?php

get_header(); ?>
	<div class="row">
		<aside id="secondary" class="widget-area col-md-2 hidden-xs hidden-sm" role="complementary">
			<?php dynamic_sidebar( 'shop-sidebar' ); ?>
		</aside><!-- #secondary -->

		<div id="primary" class="col-md-10">
			<?php woocommerce_content(); ?>
		</div><!-- #primary -->

	</div>
<?php
get_footer();
