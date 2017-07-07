<?php get_header() ?>

	<div id="container">
		<div id="content">

			<div class="slider-wraper header-slider">
				<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'principal', 'slug' ); } ?>
			</div>

			<?php /*
			<div class="space"></div>
			<div class="anuncios">
				<img src="<?php bloginfo('template_url') ?>/assets/img/mesdelavivienda.jpg" class="img-responsive" alt="noviembre, mes de la vivienda"/>
			</div>
			<div class="space"></div>
			*/?>

			<div class="eventos">
				<div class="space"></div>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2>Eventos de la semana</h2>
							<?php
								$args = array(
									'posts_per_page'   => 4,
									//'offset'           => 0,
									//'category'         => '',
									'category_name'    => 'eventos-de-la-semana',
									'orderby'          => 'date',
									//'order'            => 'DESC',
									//'include'          => '',
									//'exclude'          => '',
									'meta_key'         => '_is_ns_featured_post',
									'meta_value'       => 'yes',
									//'post_type'        => 'post',
									//'post_mime_type'   => '',
									//'post_parent'      => '',
									//'author'	   => '',
									//'author_name'	   => '',
									'post_status'      => 'publish',
									'suppress_filters' => true
								);

								$posts_featured = get_posts( $args );
							?>

							<div class="row section-content">
								<?php foreach ( $posts_featured as $post ) : setup_postdata( $post ); ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>

								<div class="col-sm-3 col-xs-12 eventos-item">
									<div class="crop">
										<div class="cell"><img src="<?php echo $image[0]; ?>" class="img-responsive" alt="<?php the_title(); ?>" /></div>
									</div>
									<div class="eventos-info">
										<h3><?php the_title(); ?></h3>
										<?php the_excerpt(); ?>
									</div>
								</div>
								<?php endforeach; wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div>

			<div class="artes">
				<div class="cuadricula">
					<div class="container-fluid no-space">
						<div class="row no-space">
							<div class="col-xs-12 col-sm-6 col-lg-4 no-space">
								<a href="http://isc.gob.mx/que-hacemos/artes/literatura/">
								<div class="cuadricula-container literatura">
									<div class="cuadricula-titulo">Literatura</div></div>
								</a></div>
							<div class="col-xs-12 col-sm-6 col-lg-4 no-space">
								<a href="http://isc.gob.mx/que-hacemos/artes/visuales/">
								<div class="cuadricula-container visuales">
									<div class="cuadricula-titulo">Visuales</div></div>
								</a></div>

							<div class="col-xs-12 col-sm-6 col-lg-4 no-space">
								<a href="http://isc.gob.mx/que-hacemos/artes/proyectos-cinematograficos/">
								<div class="cuadricula-container cine">
									<div class="cuadricula-titulo">Cine</div></div>
								</a></div>

							<div class="col-xs-12 col-sm-6 col-lg-4 no-space">
								<a href="http://isc.gob.mx/que-hacemos/artes/escenicas/">
								<div class="cuadricula-container escenicas">
									<div class="cuadricula-titulo">Escénicas</div></div>
								</a></div>

							<div class="col-xs-12 col-sm-6 col-lg-4 no-space">
								<a href="http://isc.gob.mx/que-hacemos/artes/musica/">
								<div class="cuadricula-container musica">
									<div class="cuadricula-titulo">Música</div></div>
								</a></div>

							<div class="col-xs-12 col-sm-6 col-lg-4 no-space">
								<a href="http://isc.gob.mx/que-hacemos/talleres/">
								<div class="cuadricula-container formacion">
									<div class="cuadricula-titulo">Talleres</div></div>
								</a></div>
						</div>
					</div>
				</div>
			</div>

			<div class="enterate">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2>Entérate</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col">
							<a href="http://isc.gob.mx/que-hacemos/patrimonio-cultural/">
								<div class="patrimonio"></div>
								<div class="subtitle">Patrimonio cultural</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-6 col">
							<a href="http://isc.gob.mx/que-hacemos/fondos-y-apoyos/">
								<div class="fondos"></div>
								<div class="subtitle">Fondos y apoyos</div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="programas">
				<div class="slider-wraper programas-slider">
					<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'programas', 'slug' ); } ?>
				</div>
			</div>

			<div class="ultimas-noticias">
				<div class="space"></div>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="portfolio">
								<h2>Últimas noticias</h2>
								<p class="subtitle"><a href="http://isc.gob.mx/secciones/boletines/">La información más reciente del ISC</a></p>

								<?php  $args = array(
									'posts_per_page'   => 8,
									//'offset'           => 0,
									//'category'         => '',
									'category_name'    => 'ultimas-noticias',
									'orderby'          => 'date',
									//'order'            => 'DESC',
									//'include'          => '',
									//'exclude'          => '',
									//'meta_key'         => '',
									//'meta_value'       => '',
									//'post_type'        => 'post',
									//'post_mime_type'   => '',
									//'post_parent'      => '',
									//'author'	   => '',
									//'author_name'	   => '',
									'post_status'      => 'publish',
									'suppress_filters' => true
								);
								$posts_array = get_posts( $args ); ?>
								<?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
								<?php $post_categories = wp_get_post_categories( $post->ID ); ?>
								<?php $post_categories = wp_get_post_categories( $post->ID ); ?>
								<?php
									foreach ($post_categories as $c) {
											$cat = get_category( $c );
											if ($cat->slug != 'ultimas-noticias')
												$cats_buttons[$cat->slug] = array( 'name' => $cat->name, 'slug' => $cat->slug );
									}
								?>
								<?php endforeach; wp_reset_postdata(); ?>

								<?php /* <button class="btn btn-default is-checked" data-filter="*">Ver todo</button> */ ?>

								<?php /*
								<div id="filters" class="portfolio-filters button-group">
									<?php foreach ($cats_buttons as $cat): ?>
										<button class="btn btn-default is-checked" data-filter=".<?php echo $cat['slug']; ?>">Sobre <?php echo $cat['name']; ?></button>
									<?php endforeach; ?>
								</div>
								*/?>

								<div class="section-content"></div>
								<div class="grid">
									<div class="grid-sizer"></div>
									<?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
									<?php $post_categories = false; ?>
									<?php $post_categories = wp_get_post_categories( $post->ID ); ?>
									<?php
										$cats = [];
										foreach ($post_categories as $c) {
												$cat = get_category( $c );
												if ($cat->slug != 'ultimas-noticias')
													$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
										}
									?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'custom-size' ); ?>
									<div class="element-item transition <?php foreach ($cats as $cat): ?><?php echo $cat['slug']; ?> <?php endforeach; ?>" data-category="transition">
										<img src="<?php echo $image[0]; ?>" alt="" class="img-responsive" height="265"/>
										<a href="<?php the_permalink(); ?>" class="element-item-container">
											<h3 class="name"><span><?php the_title(); ?></span></h3>
											<p class="symbol">
												<?php foreach ($cats as $cat): ?>
													<?php echo $cat['name'] . '<br/>' ?>
												<?php endforeach; ?>
											</p>
										</a>
									</div>
									<?php endforeach; wp_reset_postdata(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div>

			<div class="festivales">
				<div class="cuadricula">
					<div class="container-fluid no-space">
						<div class="row no-space">
							<div class="col-xs-12 col-sm-6 col-lg-3 no-space">
								<a href="http://festivalortiztirado.gob.mx/">
								<div class="cuadricula-container faot">
									<div class="cuadricula-titulo">Festival Alfonso Ortiz Tirado</div></div>
								</a></div>
							<div class="col-xs-12 col-sm-6 col-lg-3 no-space">
								<a href="http://isc.gob.mx/felih/">
								<div class="cuadricula-container felih">
									<div class="cuadricula-titulo">Feria del Libro Hermosillo</div></div>
								</a></div>

							<div class="col-xs-12 col-sm-6 col-lg-3 no-space">
								<a href="http://isc.gob.mx/muestra-internacional-un-desierto-para-la-danza/">
								<div class="cuadricula-container udpd">
									<div class="cuadricula-titulo">Un desierto para la danza </div></div>
								</a></div>

							<div class="col-xs-12 col-sm-6 col-lg-3 no-space">
								<a href="http://isc.gob.mx/festival-kino/">
								<div class="cuadricula-container fk">
									<div class="cuadricula-titulo">Festival Kino</div></div>
								</a></div>

							<div class="col-xs-12 col-sm-6 col-lg-3 no-space">
								<a href="http://isc.gob.mx/2016/10/31/semana-de-cine-mexicano-en-tu-ciudad-hermosillo-2/">
								<div class="cuadricula-container chmo">
									<div class="cuadricula-titulo">Semana de Cine Mx en HMO</div></div>
								</a></div>

							<div class="col-xs-12 col-sm-6 col-lg-3 no-space">
								<a href="http://isc.gob.mx/muestra-estatal-de-teatro/">
								<div class="cuadricula-container met">
									<div class="cuadricula-titulo">Muestra Estatal de Teatro</div></div>
								</a></div>

							<div class="col-xs-12 col-sm-6 col-lg-3 no-space">
								<a href="http://isc.gob.mx/festival-luna-de-montana/">
								<div class="cuadricula-container flm">
									<div class="cuadricula-titulo">Festival Luna de Montaña</div></div>
								</a></div>

							<div class="col-xs-12 col-sm-6 col-lg-3 no-space">
								<a href="http://isc.gob.mx/festivales/">
								<div class="cuadricula-container fs">
									<div class="cuadricula-titulo">Festivales en Sonora</div></div>
								</a></div>
						</div>
					</div>
				</div>
			</div>

			<div class="convocatorias">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="/secciones/convocatorias/">
								<div class="head-liner-text">Conoce las </div>
								<div class="head-liner-text">Convocatorias</div>
								<div class="sub-head-liner-text">Disponibles aquí</div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="cultura-sonora">
				<a href="http://iscradio.gob.mx/"></a>
			</div>

			<div class="videos">
				<div class="space"></div>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 videos-titulo">
							<h2>Videos</h2>
							<p class="subtitle"><a href="https://www.youtube.com/user/ISCSonora">Visita nuestro canal youtube para más videos</a></p>
						</div>
					</div>
					<div class="row section-content">
						<?php echo do_shortcode("[huge_it_videogallery id='1']"); ?>
					</div>
				</div>
			</div>

			<div class="flickr">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="https://www.flickr.com/photos/iscsonora/albums">
								<div class="head-liner-text">Visita nuestra</div>
								<div class="head-liner-text">Galería fotográfica</div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="space"></div>

			<div class="blogs seccion">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2>Blogs</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<a href="http://isc.gob.mx/secciones/blogs/astrid-arellano/"><img src="<?php bloginfo('template_url') ?>/assets/img/astrid.png" alt="Astrid Arellano" class="img-responsive img-circle img-thumbnail"></a>
							<p class="subtitle"><a href="http://isc.gob.mx/secciones/blogs/astrid-arellano/">Astrid Arellano</a></p>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<a href="http://isc.gob.mx/secciones/blogs/carlos-sanchez/"><img src="<?php bloginfo('template_url') ?>/assets/img/carlos.png" alt="Carlos Sánchez" class="img-responsive img-circle img-thumbnail"></a>
							<p class="subtitle"><a href="http://isc.gob.mx/secciones/blogs/carlos-sanchez/">Carlos Sánchez</a></p>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<a href="http://isc.gob.mx/secciones/blogs/josue-barrera/"><img src="<?php bloginfo('template_url') ?>/assets/img/josue.png" alt="Josue Barrera" class="img-responsive img-circle img-thumbnail"></a>
							<p class="subtitle"><a href="http://isc.gob.mx/secciones/blogs/josue-barrera/">Josué Barrera</a></p>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<a href="http://isc.gob.mx/secciones/blogs/equipo-isc/"><img src="<?php bloginfo('template_url') ?>/assets/isc.png" alt="Equipo ISC" class="img-responsive img-circle img-thumbnail"></a>
							<p class="subtitle"><a href="http://isc.gob.mx/secciones/blogs/equipo-isc/">Equipo ISC</a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="space"></div>

			<div class="ligas-interes seccion">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2>Sitios de interés</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3">
							<a href="http://isc.gob.mx/quienes-somos/voluntariado/">
								<div class="voluntariado liga"></div>
								<div class="subtitle">Voluntariado</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="http://www.sonora.gob.mx/">
								<div class="gob-sonora liga"></div>
								<div class="subtitle">Gobierno del Estado</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="http://www.sec.gob.mx/portal/index.php">
								<div class="sec liga"></div>
								<div class="subtitle">SEC</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="http://www.gob.mx/cultura">
								<div class="secu liga"></div>
								<div class="subtitle">Secretaría de Cultura</div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="space"></div>

			<?php /*
			<div class="space"></div>

			<?php  $args = array(
				//'posts_per_page'   => 5,
				//'offset'           => 0,
				//'category'         => '',
				'category_name'    => 'productos-pagina-principal',
				'orderby'          => 'date',
				//'order'            => 'DESC',
				//'include'          => '',
				//'exclude'          => '',
				//'meta_key'         => '',
				//'meta_value'       => '',
				//'post_type'        => 'post',
				//'post_mime_type'   => '',
				//'post_parent'      => '',
				//'author'	   => '',
				//'author_name'	   => '',
				'post_status'      => 'publish',
				'suppress_filters' => true
			);
			$posts_array = get_posts( $args ); ?>

			<div class="products">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2>Nuestros productos</h2>
							<p class="subtitle">Adquiere productos hechos por artistas sonorenses</p>
						</div>
					</div>
					<div class="row section-content">
						<?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>

						<div class="col-sm-4 col-xs-12 products-item">
							<div class="crop">
								<img src="<?php echo $image[0]; ?>" class="img-responsive" alt="<?php the_title(); ?>" />
							</div>
							<div class="product-info">
								<h3><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="products-read-more">Leer más</a>
							</div>
						</div>
						<?php endforeach; wp_reset_postdata(); ?>
					</div>
					<?php
						// Get the ID of a given category
						$category_id = get_cat_ID( 'Productos' );

						// Get the URL of this category
						$category_link = get_category_link( $category_id );
					?>
					<div class="row section-content">
						<div class="col-xs-12">
							<a href="<?php echo $category_link ?>" class="isc-btn">Ver más productos</a>
						</div>
					</div>
				</div>
			</div>

			<div class="space"></div>
			*/?>

			<?php /*
				<div class="subscribe">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2>Subscríbete a nuestro <strong>boletín cultural</strong></h2>
								<p>¿Estás interesado en los eventos culturales del Estado de Sonora? ¡No lo pienses más y subscríbete!</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>
									<input type="text" name="name" value="" placeholder="Ingresa tu email"><button type="button" name="button">Enviar</button>
								</p>
							</div>
						</div>
					</div>
				</div>
			*/ ?>

			<?php /*
			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>
			*/ ?>

			<?php /*
			<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h2>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></div>
				<div class="entry-content">
				<?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>

				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				</div>
				<div class="entry-meta">
					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_posts_url( $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="meta-sep">|</span>
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'sandbox' ), get_the_category_list(', ') ) ?></span>
					<span class="meta-sep">|</span>
					<?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
				</div>
			</div><!-- .post -->

			<?php comments_template() ?>

			<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

			*/ ?>
		</div><!-- #content -->
	</div><!-- #container -->

<?php //get_sidebar() ?>
<?php get_footer() ?>
