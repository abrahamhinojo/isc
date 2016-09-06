<?php get_header() ?>

						<?php
						/*
						// Set up the objects needed
						$my_wp_query = new WP_Query();
						//$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

						// Get the page as an Object
						$portfolio =  get_page_by_title('ISC');

						// Filter through all pages and find Portfolio's children
						//$portfolio_children = get_page_children( $portfolio->ID, $all_wp_pages );
						$portfolio_children = get_pages('sort_column=menu_order&child_of=' . $portfolio->ID);

						// echo what we get back from WP to the browser
						echo '<pre>' . print_r( $portfolio_children, true ) . '</pre>';
						wp_reset_postdata();
						*/
						?>

	<div id="container">
		<div id="content">

			<div class="slider-wraper header-slider">
				<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'principal', 'slug' ); } ?>
			</div>

			<div class="space"></div>

			<?php /*
				<ul>
				<?php $args = array(
					//'posts_per_page'   => 5,
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
				$posts_array = get_posts( $args );
				foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

						<?php if (has_post_thumbnail( $post->ID ) ): ?>
						  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'custom-size' ); ?>
							<?php var_dump($image) ?>
						  <img src="<?php echo $image[0]; ?>" alt="" class="img-responsive" height="265" />
						<?php endif; ?>


					</li>
				<?php endforeach;
				wp_reset_postdata();?>
			</ul>
			*/ ?>

			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="portfolio">
							<h2>Últimas Noticias!</h2>
							<p>Nuestra mas reciente información en todo el ISC</p>

							<?php  $args = array(
								//'posts_per_page'   => 5,
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

							<div id="filters" class="portfolio-filters button-group">
								<button class="btn btn-default is-checked" data-filter="*">Ver todo</button>
								<?php foreach ($cats_buttons as $cat): ?>
									<button class="btn btn-default is-checked" data-filter=".<?php echo $cat['slug']; ?>"><?php echo $cat['name']; ?></button>
								<?php endforeach; ?>
								<?php /*
								<button class="btn btn-default" data-filter=".metal">metal</button>
								<button class="btn btn-default" data-filter=".transition">transition</button>
								<button class="btn btn-default" data-filter=".alkali, .alkaline-earth">alkali and alkaline-earth</button>
								<button class="btn btn-default" data-filter=":not(.transition)">not transition</button>
								<button class="btn btn-default" data-filter=".metal:not(.transition)">metal but not transition</button>
								<button class="btn btn-default" data-filter="numberGreaterThan50">number > 50</button>
								<button class="btn btn-default" data-filter="ium">name ends with &ndash;ium</button>
								*/ ?>
							</div>


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

								<?php /*
								<div class="element-item transition metal " data-category="transition">
									<h3 class="name">Mercury</h3>
									<p class="symbol">Hg</p>
									<p class="number">80</p>
									<p class="weight">200.59</p>
								</div>
								<div class="element-item metalloid " data-category="metalloid">
									<h3 class="name">Tellurium</h3>
									<p class="symbol">Te</p>
									<p class="number">52</p>
									<p class="weight">127.6</p>
								</div>
								<div class="element-item post-transition metal " data-category="post-transition">
									<h3 class="name">Bismuth</h3>
									<p class="symbol">Bi</p>
									<p class="number">83</p>
									<p class="weight">208.980</p>
								</div>
								<div class="element-item post-transition metal " data-category="post-transition">
									<h3 class="name">Lead</h3>
									<p class="symbol">Pb</p>
									<p class="number">82</p>
									<p class="weight">207.2</p>
								</div>
								<div class="element-item transition metal " data-category="transition">
									<h3 class="name">Gold</h3>
									<p class="symbol">Au</p>
									<p class="number">79</p>
									<p class="weight">196.967</p>
								</div>
								<div class="element-item alkali metal " data-category="alkali">
									<h3 class="name">Potassium</h3>
									<p class="symbol">K</p>
									<p class="number">19</p>
									<p class="weight">39.0983</p>
								</div>
								<div class="element-item alkali metal " data-category="alkali">
									<h3 class="name">Sodium</h3>
									<p class="symbol">Na</p>
									<p class="number">11</p>
									<p class="weight">22.99</p>
								</div>
								<div class="element-item transition metal " data-category="transition">
									<h3 class="name">Cadmium</h3>
									<p class="symbol">Cd</p>
									<p class="number">48</p>
									<p class="weight">112.411</p>
								</div>
								<div class="element-item alkaline-earth metal " data-category="alkaline-earth">
									<h3 class="name">Calcium</h3>
									<p class="symbol">Ca</p>
									<p class="number">20</p>
									<p class="weight">40.078</p>
								</div>
								<div class="element-item transition metal " data-category="transition">
									<h3 class="name">Rhenium</h3>
									<p class="symbol">Re</p>
									<p class="number">75</p>
									<p class="weight">186.207</p>
								</div>
								<div class="element-item post-transition metal " data-category="post-transition">
									<h3 class="name">Thallium</h3>
									<p class="symbol">Tl</p>
									<p class="number">81</p>
									<p class="weight">204.383</p>
								</div>
								<div class="element-item metalloid " data-category="metalloid">
									<h3 class="name">Antimony</h3>
									<p class="symbol">Sb</p>
									<p class="number">51</p>
									<p class="weight">121.76</p>
								</div>
								<div class="element-item transition metal " data-category="transition">
									<h3 class="name">Cobalt</h3>
									<p class="symbol">Co</p>
									<p class="number">27</p>
									<p class="weight">58.933</p>
								</div>
								<div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
									<h3 class="name">Ytterbium</h3>
									<p class="symbol">Yb</p>
									<p class="number">70</p>
									<p class="weight">173.054</p>
								</div>
								<div class="element-item noble-gas nonmetal " data-category="noble-gas">
									<h3 class="name">Argon</h3>
									<p class="symbol">Ar</p>
									<p class="number">18</p>
									<p class="weight">39.948</p>
								</div>
								<div class="element-item diatomic nonmetal " data-category="diatomic">
									<h3 class="name">Nitrogen</h3>
									<p class="symbol">N</p>
									<p class="number">7</p>
									<p class="weight">14.007</p>
								</div>
								<div class="element-item actinoid metal inner-transition " data-category="actinoid">
									<h3 class="name">Uranium</h3>
									<p class="symbol">U</p>
									<p class="number">92</p>
									<p class="weight">238.029</p>
								</div>
								<div class="element-item actinoid metal inner-transition " data-category="actinoid">
									<h3 class="name">Plutonium</h3>
									<p class="symbol">Pu</p>
									<p class="number">94</p>
									<p class="weight">(244)</p>
								</div>
								*/?>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="space"></div>

			<div class="videos">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2>Videos</h2>
							<p><a href="https://www.youtube.com/user/ISCSonora">Entérate de las novedades del ISC</a></p>
						</div>
					</div>
					<div class="row section-content">
						<?php echo do_shortcode("[huge_it_videogallery id='1']"); ?>
					</div>
				</div>
			</div>

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
							<h2>Nuestros productos sonorenses</h2>
							<p>Hermosos y maravillosos son nuestros productos hechos por grandes artistas sonorenses!</p>
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

						<?php /*
						<div class="col-sm-4 col-xs-12">
							<div class="crop">
								<img src="<?php bloginfo('template_url') ?>/assets/img/portadageometrias-01.jpg" class="img-responsive" alt="" />
							</div>
							<div class="product-info">
								<h3>Libro: De cuando ellos se narraron</h3>
								<p>
									Precio: $100.00 / Biblioteca Pública Central
								</p>
								<hr>
								<p>
									Selene Carolina Ramírez García (ISC, 2016)
								</p>
								<p>
									Juegos Trigales Valle del Yaqui 2014, Premio Nacional de Narrativa "Gerardo Cornejo" ...
								</p>
								<a href="#">Leer más</a>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="crop">
								<img src="<?php bloginfo('template_url') ?>/assets/img/selenecorrecion3-01.jpg" class="img-responsive" alt="" />
							</div>
							<div class="product-info">
								<h3>Libro: La geometría de las desapariciones</h3>
								<p>
									Precio: $100.00 / Biblioteca Pública Central
								</p>
								<hr>
								<p>
									Omar Quintana Nagano (ISC, 2016)
								</p>
								<p>
									Concurso del Libro Sonorense 2015, género Cuento
								</p>
								<p>
									<a href="#">Leer más</a>
								</p>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="crop">
								<img src="<?php bloginfo('template_url') ?>/assets/img/webcamportada-01.jpg" class="img-responsive" alt="" />
							</div>
							<div class="product-info">
								<h3>Libro: Webcam</h3>
								<p>
									Precio: $100.00 / Biblioteca Pública Central
								</p>
								<hr>
								<p>
									Iván Figueroa (ISC, 2016)
								</p>
								<p>
									Concurso del Libro Sonorense 2015, género Poesía
								</p>
								<a href="#">Leer más</a>
							</div>
						</div>
						*/ ?>
					</div>
					<?php
						// Get the ID of a given category
						$category_id = get_cat_ID( 'Productos' );

						// Get the URL of this category
						$category_link = get_category_link( $category_id );
					?>
					<div class="row section-content">
						<div class="col-xs-12">
							<a href="<?php echo $category_link ?>" class="isc-btn">Ver mas productos</a>
						</div>
					</div>
				</div>
			</div>

			<div class="space"></div>

			<div class="subscribe">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2>Subscríbete a nuestro <strong>boletín cultural</strong></h2>
							<p>¿Estás interesado en todos los eventos culturales del Estado de Sonora? ¡No lo pienses más y subscribete!</p>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<p>
								<input type="text" name="name" value="" placeholder="Ingresa tu email"><button type="button" name="button">Enviar</button>
							</p>
						</div>
					</div>
				</div>
			</div>


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
