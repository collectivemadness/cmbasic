<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class('uk-offcanvas-content'); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'cssdrive' ); ?></a>
	
<!--  Header
============================================================ -->

<div class="uk-position-relative top">
	<header id="header" class="uk-position-top" role="banner" >
	
	<!-- Navigation
	============================================================ -->
	
	<nav id="navigation" class="uk-navbar-container uk-navbar-transparent" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'cssdrive' ); ?>" uk-sticky="show-on-up: true; animation: uk-animation-slide-top; bottom: #bottom">
		<div class="uk-container" uk-navbar>
	  
		  <div class="nav-overlay uk-navbar-left">
				<a class="uk-navbar-item uk-logo uk-text-uppercase uk-text-bold" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		  </div>
			
		  <div class="nav-overlay uk-navbar-right">
				<?php wp_nav_menu( array(
					'theme_location'  => 'top',
				  'menu_id'         => 'top-menu',
					'container'       => '',
					'menu_class'      => 'uk-navbar-nav uk-navbar-parent-icon uk-visible@m',
					'link_before'     => '<span>',
					'link_after'      => '</span>',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => 'dropdown::fallback',
					'walker'          => new dropdown('navbar'),
				));	?>
		  </div>
		  
		 <div class="nav-overlay uk-navbar-right uk-hidden@m">
			   <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a> 
			  <a class="uk-navbar-toggle uk-hidden@m" type="button" uk-toggle="target: #offcanvas-menu" ><span uk-navbar-toggle-icon></span></a>
			  <!-- <a class="uk-navbar-toggle " type="button" href="#modal-center" uk-toggle ><span uk-navbar-toggle-icon></span></a>-->
		  </div> 
		  
		  <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
		      <div class="uk-navbar-item uk-width-expand">
		        <form role="search" method="get" class="uk-search uk-search-navbar uk-width-1-1" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		          <input class="uk-search-input" type="search" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'cssdrive' ); ?>" autofocus>
		        </form>	
		      </div>
		      <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
		  </div>
		  
		</div>
	</nav><!-- #navigation -->
	
</header>
</div><!-- #header -->

<!-- Modal Menu 
============================================================ -->
<div id="modal-center" class="uk-flex-top" uk-modal>
	<button class="uk-close-large" type="button" uk-close></button>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        

        <?php wp_nav_menu( array(
			'theme_location'  => 'top',
		  'menu_id'         => 'top',
			'container'       => '',
			'menu_class'      => 'uk-nav uk-nav-primary uk-nav-center uk-nav-parent-icon',
			'link_before'     => '<span>',
			'link_after'      => '</span>',
			'items_wrap'      => '<ul id="%1$s" class="%2$s" uk-nav>%3$s</ul>',
			'fallback_cb'     => 'offcanvas::fallback',
			'walker'          => new offcanvas('navbar'),
		));?>

    </div>
</div>

<!-- #modal-full -->

<!--  Offcanvas
============================================================ -->

<div id="offcanvas-menu" uk-offcanvas="overlay: true; flip: true;">	
  <div class="uk-offcanvas-bar">
    <?php wp_nav_menu( array(
			'theme_location'  => 'top',
		  'menu_id'         => 'top',
			'container'       => '',
			'menu_class'      => 'uk-nav uk-nav-default uk-nav-parent-icon',
			'link_before'     => '<span>',
			'link_after'      => '</span>',
			'items_wrap'      => '<ul id="%1$s" class="%2$s" uk-nav>%3$s</ul>',
			'fallback_cb'     => 'offcanvas::fallback',
			'walker'          => new offcanvas('navbar'),
		));?>
  </div>
</div><!-- #offcanvas-menu -->

<!--  Container
============================================================ -->

<div id="container" class="uk-section uk-padding-remove-vertical uk-container" uk-height-viewport="expand: true">
		
	<?php if ( is_front_page() || is_home() ) : else : ?>
		
	<?php endif; ?>