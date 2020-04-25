<?php get_header(); ?>

<div id="wrap">
	
<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'cssdrive' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'cssdrive' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Please go to menu for the desired content or just search the site.', 'cssdrive' ); ?></p>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->
	
	<p>
	  <?php include(TEMPLATEPATH . "/searchform.php"); ?>
	</p>

	

</div><!-- #wrap -->

<?php get_footer(); ?>