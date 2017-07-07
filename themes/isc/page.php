<?php get_header() ?>
<?php the_post() ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>

<div class="entry-title-background" style="background-image: url('<?php echo $image[0]; ?>')">
	<div  class="entry-title-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					
					<h2 class="entry-title page-header-title">
						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
							<?php if(function_exists('bcn_display')) { bcn_display(); }?>
						</div>
					</h2>

					<?php /*
					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
					<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
					</div>
					*/?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	/*
	$my_wp_query = new WP_Query();
	$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));
	$page_children = get_page_children( get_the_ID(), $all_wp_pages );
	echo '<pre>' . print_r( $page_children, true ) . '</pre>';
	*/

	$my_wp_query = new WP_Query();
	$parent =  get_page_by_title(get_the_title());
	$parent_children = get_pages('sort_column=menu_order&child_of=' . $parent->ID);
	//echo get_the_ID();
	//echo '<pre>' . print_r( $parent_children, true ) . '</pre>';
?>
<div class="page-wrapper">
	<?php /*
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
					<?php if(function_exists('bcn_display')) { bcn_display(); }?>
				</div>
			</div>
		</div>
	</div>
	*/ ?>


	<div class="container">
		<div class="row">
			<div class="col-xs-12">

	<div id="container">
		<div id="content">

			<?php if ( is_array($image) ) : ?>
			<div class="post-head-image">
				<img src="<?php echo $image[0]; ?>" class="img-responsive" alt="<?php the_title(); ?>" />
			</div>
			<hr />
			<?php endif ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<?php /* <h2 class="entry-title"><?php the_title() ?></h2> */ ?>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>

<?php edit_post_link( __( 'Editar', 'sandbox' ), '<p><span class="edit-link">', '</span></p>' ) ?>
<?php //edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>

				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>

		</div><!-- #content -->
	</div><!-- #container -->

			</div> <!-- .col -->
		</div> <!-- .row -->

		<div class="row">
			<div class="sup-pages clearfix">
				<?php //echo '<pre>' . print_r($parent_children) . '</pre>' ?>
				<?php $color = 0; ?>
				<?php foreach ( $parent_children as $page ) : ?>
					<?php //var_dump($page) ?>
					<?php $random_color = random_background($color); ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'large' );  ?>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="block-post block-post-<?php echo $random_color?>">
							<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
								<?php if (is_array($image)) : ?>
								<div class="category post-head-image" style="background-image: url('<?php echo $image[0]; ?>')">
									<a href="<?php echo get_page_link( $page->ID ); ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), $page->post_title ) ?>" rel="bookmark"><span class="sr-only"><?php echo $page->post_title ?></span></a>
								</div>
								<?php endif ?>
								<div class="block-post-content">
									<h3 class="entry-title"><a href="<?php echo get_page_link( $page->ID ); ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), $page->post_title ) ?>" rel="bookmark"><?php echo $page->post_title ?></a></h3>
									<div class="entry-date sr-only"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), $page->post_date ) ?></abbr></div>
									<div class="entry-content">
										<?php //echo $page->post_excerpt; ?>
										<?php echo the_excerpt_max_charlength( $page->post_excerpt, 200 ) ?>
									</div>
								</div>
								<div class="read-more-wrapper-cat">
									<a href="<?php echo get_page_link( $page->ID ); ?>" class="read-more-category read-more-<?php echo $random_color?>">Leer más</a>
								</div>
							</div><!-- .post -->
						</div>
					</div>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<?php get_sidebar() ?>
			</div><!-- .col -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</div> <!-- .page-wrapper -->

<?php get_footer() ?>