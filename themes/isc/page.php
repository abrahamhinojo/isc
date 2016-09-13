<?php get_header() ?>
<?php the_post() ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>

<div class="entry-title-background" style="background-image: url('<?php echo $image[0]; ?>')">
	<div  class="entry-title-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="entry-title page-header-title"><?php the_title() ?></h2>
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
	$my_wp_query = new WP_Query();
	$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));
	$page_children = get_page_children( get_the_ID(), $all_wp_pages );
	//echo '<pre>' . print_r( $page_children, true ) . '</pre>';
?>
<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
					<?php if(function_exists('bcn_display')) { bcn_display(); }?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php if ( !empty($page_children) ) : ?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
				<div class="page-children">
					<ul>
						<?php foreach($page_children as $page) : ?>
						<li><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title ?></a></li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>
			<?php endif ?>
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-<?php if ( !empty($page_children) ) : ?>7<?php else : ?>9<?php endif ?>">

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

<?php edit_post_link( __( 'Editar', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>
<?php //edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>

				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>

		</div><!-- #content -->
	</div><!-- #container -->

			</div> <!-- .col -->
			<div class="col-xs-12 col-sm-3">
<?php get_sidebar() ?>
			</div><!-- .col -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</div> <!-- .page-wrapper -->

<?php get_footer() ?>