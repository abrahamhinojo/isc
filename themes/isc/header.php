<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php bloginfo('template_url') ?>/assets/ico.png" type="image/x-icon" rel="shortcut icon">
	<title><?php wp_title( '-', true, 'right' ); echo _wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/node_modules/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/node_modules/bootstrap/dist/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/font-awesome/css/font-awesome.min.css" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/fancybox-master/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/fancybox-master/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/fancybox-master/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />


	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), _wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), _wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />


</head>

<body class="<?php sandbox_body_class() ?>">

<nav id="main-nav-mobile" class="main-nav-mobile nav">
	<ul>
		<li><a href="#">ISC</a></li>
		<li><a href="#">Artes</a></li>
		<li><a href="#">Programas</a></li>
		<li><a href="#">Centros Culturales</a></li>
		<li><a href="#">Patrimonio</a></li>
		<li><a href="#">Convocatorias</a></li>
		<li><a href="#">Sitios</a></li>
	</ul>
</nav>

<div id="wrapper" class="hfeed">

	<div id="header">
		<div class="clearfix header-wrap-social">
			<nav id="cultural-nav" class="pull-left nav cultural-nav">
				<ul>
					<li><a href="#">#CulturaSonora</a></li>
					<li><a href="#">Sala de Prensa</a></li>
				</ul>
			</nav>
			<nav id="social-nav" class="pull-right nav social-nav">
				<ul>
					<li><a href="https://www.facebook.com/iscsonora/"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
					<li><a href="https://twitter.com/ISCsonora"><span  class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
					<li><a href="https://www.instagram.com/iscsonora/"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
					<li><a href="https://www.youtube.com/user/ISCSonora"><span class="fa fa-youtube-play" aria-hidden="true"></span></a></li>
					<li><a href="https://www.flickr.com/photos/iscsonora/"><span class="fa fa-flickr" aria-hidden="true"></span></a></li>
					<li><a href="https://www.periscope.tv/ISCsonora/"><span class="fa fa-map-marker" aria-hidden="true"></span></a></li>
				</ul>
			</nav>
		</div>
		<div class="clearfix header-wrap">
			<h1 id="blog-title" class="pull-left">
				<span>
					<a
						class="header-logo gob-logo"
						href="<?php bloginfo('home') ?>/"
						title="<?php echo _wp_specialchars( get_bloginfo('name'), 1 ) ?>"
						rel="home"><?php bloginfo('name') ?></a>
					<a
						class="header-logo isc-logo"
						href="<?php bloginfo('home') ?>/"
						title="<?php echo _wp_specialchars( get_bloginfo('name'), 1 ) ?>"
						rel="home"><?php bloginfo('name') ?></a></span>
			</h1>
			<nav id="main-nav" class="nav main-nav">
				<ul>
					<li><a href="#">ISC</a>
						<?php
						$my_wp_query = new WP_Query();
						$portfolio =  get_page_by_title('ISC');
						$portfolio_children = get_pages('sort_column=menu_order&child_of=' . $portfolio->ID);
						if ( !empty($portfolio_children) ) :
						?>
						<ul>
							<?php foreach ( $portfolio_children as $page ) : ?>
							<li><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title?></a></li>
							<?php endforeach; wp_reset_postdata(); ?>
						</ul>
						<?php endif; ?>
					</li>
					<li><a href="#">Artes</a>
						<ul>
							<li><a href="#">Danza</a></li>
							<li><a href="#">Teatro</a></li>
							<li><a href="#">Música</a></li>
							<li><a href="#">Visuales</a></li>
							<li><a href="#">Plásticas</a></li>
							<li><a href="#">Literatura</a></li>
							<li><a href="#">Cine</a></li>
							<li><a href="#">Promotores culturales</a></li>
						</ul>
					</li>
					<li><a href="#">Programas</a></li>
					<li><a href="#">Centros Culturales</a></li>
					<li><a href="#">Patrimonio</a></li>
					<li><a href="#">Convocatorias</a></li>
					<li><a href="#">Sitios</a></li>
				</ul>
			</nav>
			<button class="pull-right main-nav-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
		</div>
		<div id="blog-description" class="sr-only"><?php bloginfo('description') ?></div>
	</div><!--  #header -->

<!--
	<div id="access">
		<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div>
		<?php sandbox_globalnav() ?>
	</div><!-- #access -->
