
	<div id="footer">
		<div class="footer-wraper">

			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contact">
							<strong>Instituto Sonorense de Cultura</strong><br>Obregón #58 entre Yáñez y Garmendia CP 83000 Teléfono 01 662 2134411
						</div>
					</div>
					<div class="col-sm-6">
						<div class="nav footer-nav">
							<ul>
								<li><a href="http://transparencia.esonora.gob.mx/Sonora/Transparencia/Poder+Ejecutivo/Entidades/INSTITUTO+SONORENSE+DE+CULTURA/">Portal de Transparecia</a></li>
								<li><a href="https://www.google.com/a/isc.gob.mx/ServiceLogin?service=mail&passive=true&rm=false&continue=http://mail.google.com/a/isc.gob.mx/&ltmpl=default&ltmplcache=2https://www.google.com/a/isc.gob.mx/ServiceLogin?service=mail&passive=true&rm=false&continue=http://mail.google.com/a/isc.gob.mx/&ltmpl=default&ltmplcache=2">Revisar E-mail</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!--
				<div class="row">
					<div class="col-sm-12">
						<div class="subscribe">
							<form class="form-inline">
							  <div class="form-group">
							    <label for="subscribe-email">Subscríbete a nuestro boletín</label>
							    <input type="email" class="form-control" id="subscribe-email" name="email" placeholder="tu.correo@ejemplo.com">
							  </div>
							  <button type="submit" class="btn btn-success">Regístrame</button>
							</form>
						</div>
					</div>
				</div>
				-->
			</div>

		</div>
	</div><!-- #footer -->

</div><!-- #wrapper .hfeed -->

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/node_modules/foundation-sites/vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/node_modules/jquery-lazyload/jquery.lazyload.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/isotope/isotope.pkgd.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/fancybox-master/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/fancybox-master/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/fancybox-master/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/fancybox-master/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/fancybox-master/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/nav.js"></script>

<script type="text/javascript">

	$( document ).ready(function() {
			$('.main-nav-toggle').on( "click", function() {
					var hfeed = $('.hfeed');
					if (hfeed.hasClass( 'show-nav' ) ) {
						hfeed.removeClass('show-nav');
					} else {
						hfeed.addClass('show-nav');
					}
			});
	});

	$(document).ready(function() {
		$('.fancybox-media')
			.attr('rel', 'media-gallery')
			.fancybox({
				openEffect : 'elastic',
				closeEffect : 'elastic',
				prevEffect : 'elastic',
				nextEffect : 'elastic',

				arrows : false,
				helpers : {
					media : {},
					buttons : {}
				}
			});
	});

	$(function() {
		$("img.img-responsive").lazyload({
			effect : "fadeIn"
		});
	});

	var $grid = $('.grid').isotope({
		itemSelector: '.element-item',
		layoutMode: 'fitRows',
		masonry: {
			columnWidth: '.grid-sizer'
		},
		getSortData: {
			name: '.name',
			symbol: '.symbol',
			number: '.number parseInt',
			category: '[data-category]',
			weight: function( itemElem ) {
				var weight = $( itemElem ).find('.weight').text();
				return parseFloat( weight.replace( /[\(\)]/g, '') );
			}
		}
	});

	// filter functions
	var filterFns = {
	  // show if number is greater than 50
	  numberGreaterThan50: function() {
	    var number = $(this).find('.number').text();
	    return parseInt( number, 10 ) > 50;
	  },
	  // show if name ends with -ium
	  ium: function() {
	    var name = $(this).find('.name').text();
	    return name.match( /ium$/ );
	  }
	};

	// bind filter button click
	$('#filters').on( 'click', 'button', function() {
	  var filterValue = $( this ).attr('data-filter');
	  // use filterFn if matches value
	  filterValue = filterFns[ filterValue ] || filterValue;
	  $grid.isotope({ filter: filterValue });
	});

	// bind sort button click
	$('#sorts').on( 'click', 'button', function() {
	  var sortByValue = $(this).attr('data-sort-by');
	  $grid.isotope({ sortBy: sortByValue });
	});

	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.is-checked').removeClass('is-checked');
	    $( this ).addClass('is-checked');
	  });
	});
</script>
<?php wp_footer() ?>
</body>
</html>
