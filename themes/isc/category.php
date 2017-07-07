<?php get_header() ?>

<div class="entry-title-background">
	<div  class="entry-title-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="page-title"><span><?php single_cat_title() ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="category-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			
	<div id="container">
		<div id="content">

			<?php /* <h2 class="page-title"><?php _e( 'Category Archives:', 'sandbox' ) ?> <span><?php single_cat_title() ?></span></h2> */ ?>
			<?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>

			<?php /*
			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ) ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
			</div>
			*/?>
			<?php $color = 0; ?>
			<?php while ( have_posts() ) : the_post() ?>
				<?php $random_color = random_background($color); ?>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="block-post block-post-<?php echo $random_color?>">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );  ?>
						<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
							<?php if (is_array($image)) : ?>
							<div class="category post-head-image" style="background-image: url('<?php echo $image[0]; ?>')">
								<a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><span class="sr-only"><?php the_title() ?></span></a>
							</div>
							<?php endif ?>
							<div class="block-post-content">
								<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
								<div class="entry-date sr-only"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></div>
								<div class="entry-content">
								<?php //the_excerpt(__( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ), 5) ?>
								<?php echo excerpt(25); ?>
								<?php $meta = [] //$meta = get_customs_fields($post); ?>
								<ul class="meta-list">
								<?php foreach($meta as $key => $value): ?> 
									<li><span><?php echo $key ?>:</span> <?php echo implode(', ', $value) ?></li>
								<?php endforeach; ?>
								</ul>
								</div>

								<?php /*
								<div class="entry-meta">
									<?php if ( $cats_meow = sandbox_cats_meow(', ') ) : // Returns categories other than the one queried ?>
									<span class="cat-links"><?php printf( __( 'También publicado en %s', 'sandbox' ), $cats_meow ) ?></span>
									<span class="meta-sep">|</span>
									<?php endif ?>
									<?php the_tags( __( '<span class="tag-links">Etiquetado como ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
									<?php edit_post_link( __( 'Editar', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>
								</div>
								*/ ?>
							
								<?php /*
								<div class="entry-meta">
									<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_posts_url( $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
									<span class="meta-sep">|</span>
									<?php if ( $cats_meow = sandbox_cats_meow(', ') ) : // Returns categories other than the one queried ?>
									<span class="cat-links"><?php printf( __( 'Also posted in %s', 'sandbox' ), $cats_meow ) ?></span>
									<span class="meta-sep">|</span>
									<?php endif ?>
									<?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
									<?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
									<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
								</div>
								*/ ?>
							</div>
							<div class="read-more-wrapper-cat">
								<a href="<?php the_permalink(); ?>" class="read-more-category read-more-<?php echo $random_color?>">Leer más</a>
							</div>
						</div><!-- .post -->
					</div>
				</div>

<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Publicaciones Anteriores', 'sandbox' ) ) ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Publicaciones Recientes <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

			</div><!-- .col -->
			<div class="col-xs-12 col-sm-3">
<?php //get_sidebar() ?>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .category-wrapper -->

<?php get_footer() ?>