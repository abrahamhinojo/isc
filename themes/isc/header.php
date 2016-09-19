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

<nav class="nav main-nav-mobile">
	<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
</nav>
<!--
<nav id="main-nav-mobile" class="main-nav-mobile nav">
	<ul>
		<?php
			$nav = [
				'¿Quiénes somos?',
				'¿Qué hacemos?',
				'Programas y Festivales'
			];
		?>
		<?php foreach ( $nav as $item ) : ?>
			<?php
				$my_wp_query = new WP_Query();
				$parent =  get_page_by_title($item);
			?>
			<li><a href="<?php echo get_page_link($parent->ID); ?>"><?php echo $parent->post_title ?></a></li>
		<?php endforeach; ?>

			<li><a href="<?php bloginfo('home') ?>/categorias/convocatorias/">Convocatorias</a></li>
			<li><a href="http://issuu.com/iscsonora/docs/agenda_cultural_septiembre_issuu?workerAddress=ec2-54-152-233-253.compute-1.amazonaws.com">Sala de prensa</a></li>

		<?php
			$nav = [
				'ISC Radio'
			];
		?>
		<?php foreach ( $nav as $item ) : ?>
			<?php
				$my_wp_query = new WP_Query();
				$parent =  get_page_by_title($item);
			?>
			<li><a href="<?php echo get_page_link($parent->ID); ?>"><?php echo $parent->post_title ?></a></li>
		<?php endforeach; ?>

			<li><a href="#">Ligas de interés</a></li>
			<li><a href="#"> Blogs</a></li>
	</ul>
</nav>
-->

<div id="wrapper" class="hfeed">

	<div id="header">
		<div class="clearfix header-wrap-social">
			<div class="container">
				<h1 id="blog-title" class="pull-left">
					<span>
						<a
							class="header-logo isc-logo-color"
							href="<?php bloginfo('home') ?>/"
							title="<?php echo _wp_specialchars( get_bloginfo('name'), 1 ) ?>"
							rel="home"><?php bloginfo('name') ?></a>
						<a
							class="header-logo sonora-logo"
							href="<?php bloginfo('home') ?>/"
							title="<?php echo _wp_specialchars( get_bloginfo('name'), 1 ) ?>"
							rel="home"><?php bloginfo('name') ?></a>
					</span>
				</h1>
				<nav id="social-nav" class="nav social-nav">
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
		</div>
		<div class="clearfix header-wrap">
			<h1 id="blog-title" class="pull-left">
				<span>
					<a
						class="header-logo isc-logo-color"
						href="<?php bloginfo('home') ?>/"
						title="<?php echo _wp_specialchars( get_bloginfo('name'), 1 ) ?>"
						rel="home"><?php bloginfo('name') ?></a>
					<a
						class="header-logo sonora-logo"
						href="<?php bloginfo('home') ?>/"
						title="<?php echo _wp_specialchars( get_bloginfo('name'), 1 ) ?>"
						rel="home"><?php bloginfo('name') ?></a>
				</span>
			</h1>
			<nav class="nav main-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</nav>
			<!--<nav id="main-nav" class="nav main-nav">
				<ul>

					<?php
						$nav = [
							'¿Quiénes somos?',
						];
					?>
					<?php foreach ( $nav as $item ) : ?>
						<?php
							$my_wp_query = new WP_Query();
							$parent =  get_page_by_title($item);
						?>
						<li><a href="<?php echo get_page_link($parent->ID); ?>"><?php echo $parent->post_title ?></a>
							<?php
								$parent_children = get_pages('sort_column=menu_order&child_of=' . $parent->ID);
								if ( !empty($parent_children) ) :
							?>
							<ul>
								<?php foreach ( $parent_children as $page ) : ?>
									<?php if ($page->post_parent == $parent->ID) : ?>
										<li><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title?></a></li>
									<?php endif; ?>
								<?php endforeach; wp_reset_postdata(); ?>
								<li><a href="http://transparencia.esonora.gob.mx/Sonora/Transparencia/Poder+Ejecutivo/Entidades/Instituto+Sonorense+de+Cultura/">Transparencia</a></li>
							</ul>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>

					<?php
						$nav = [
							'¿Qué hacemos?',
							'Programas y Festivales'
						];
					?>
					<?php foreach ( $nav as $item ) : ?>
						<?php
							$my_wp_query = new WP_Query();
							$parent =  get_page_by_title($item);
						?>
						<li><a href="<?php echo get_page_link($parent->ID); ?>"><?php echo $parent->post_title ?></a>
							<?php
								$parent_children = get_pages('sort_column=menu_order&child_of=' . $parent->ID);
								if ( !empty($parent_children)) :
							?>
							<ul>
								<?php foreach ( $parent_children as $page ) : ?>
									<?php if ($page->post_parent == $parent->ID) : ?>
										<li><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title?></a></li>
									<?php endif; ?>
								<?php endforeach; wp_reset_postdata(); ?>
							</ul>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>

					<li><a href="<?php bloginfo('home') ?>/categorias/convocatorias/">Convocatorias</a></li>
					<li><a href="#">Sala de prensa</a>
						<ul>
							<li><a href="http://issuu.com/iscsonora/docs/agenda_cultural_septiembre_issuu?workerAddress=ec2-54-152-233-253.compute-1.amazonaws.com">#CulturaSonora</a></li>
							<li><a href="<?php bloginfo('home') ?>/programa-de-radio-culturasonora/">Programa de radio #CulturaSonora</a></li>
							<li><a href="https://www.youtube.com/user/ISCSonora">Youtube</a></li>
							<li><a href="https://www.flickr.com/photos/iscsonora/">Galería</a></li>
							<li><a href="<?php bloginfo('home') ?>/categorias/boletines/">Boletines</a></li>
							<li><a href="<?php bloginfo('home') ?>/categorias/entrevistas/">Entrevistas</a></li>
							<li><a href="<?php bloginfo('home') ?>/categorias/cronicas-y-resenas/">Crónicas y Reseñas</a></li>
							<li><a href="<?php bloginfo('home') ?>/categorias/Ruedas de Prensa/">Ruedas de prensa</a></li>
							<li><a href="<?php bloginfo('home') ?>/categorias/disenos/">Diseños</a></li>
						</ul>
					</li>

					<?php
						$nav = [
							'ISC Radio',
						];
					?>
					<?php foreach ( $nav as $item ) : ?>
						<?php
							$my_wp_query = new WP_Query();
							$parent =  get_page_by_title($item);
						?>
						<li><a href="<?php echo get_page_link($parent->ID); ?>"><?php echo $parent->post_title ?></a>
							<?php
								$parent_children = get_pages('sort_column=menu_order&child_of=' . $parent->ID);
								if ( !empty($parent_children) ) :
							?>
							<ul>
								<?php foreach ( $parent_children as $page ) : ?>
									<?php if ($page->post_parent == $parent->ID) : ?>
										<li><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title?></a></li>
									<?php endif; ?>
								<?php endforeach; wp_reset_postdata(); ?>
								<li><a href="http://www.iscradio.gob.mx/">Link a sitio</a></li>
							</ul>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>

					<li><a href="#">Ligas de interés</a>
						<ul>
							<li><a href="http://www.isc.gob.mx/cine/index.html">Cine en Sonora</a></li>
							<li><a href="http://www.isc.gob.mx/pecas2021/index.html">Pecas</a></li>
							<li><a href="http://www.festivalortiztirado.gob.mx">Faot</a></li>
							<li><a href="http://www.sonora.gob.mx">Gobierno del Estado</a></li>
							<li><a href="http://www.sec.gob.mx">SEC</a></li>
							<li><a href="http://cultura.gob.mx/">Secretaría de Cultura</a></li> 
						</ul>
					</li>
					<li><a href="#">Blogs</a></li>
				</ul>
			</nav>-->
			<a class="pull-right main-nav-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
		</div>
		<div id="blog-description" class="sr-only"><?php bloginfo('description') ?></div>
	</div><!--  #header -->

	<!--
	<div id="access">
		<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div>
		<?php sandbox_globalnav() ?>
	</div>--><!-- #access -->
