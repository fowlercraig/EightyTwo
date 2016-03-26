<?php Themewrangler::setup_page();get_header(/***Template Name: Programming */); ?>

<article <?php post_class(); ?>>
	<?php get_template_part('parts/page', 'header' ); ?>
	<div style="position: relative; z-index:99">
		<div class="hentry__content">
			<div class="fs-row">
				<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
					<?php the_post(); the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</article>

<div class="fs-row" id="instafeed"></div>
<div class="fs-row">
	<div class="fs-cell fs-all-full fs-centered">
		<div class="text-center">
			<button class="btn--full" id="load-more">Load More</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		var loadButton = document.getElementById('load-more');
		var feed = new Instafeed({
			get: 'user',
			userId: '391656327',
			clientId: '92edd37c66a44760a6e11f658e4ec473',
			accessToken: '3031273.1677ed0.7433495798e14df3b01c5ccdc1a160a6',
			resolution: 'standard_resolution',
			template: '<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-half"><a class="open--image" href="{{link}}"><img src="{{image}}" class="img-responsive" /></a><hr class="invisible compact" /></div>',
			after: function() {
		    // disable button if no more results to load
		    if (!this.hasNext()) {
		      loadButton.setAttribute('disabled', 'disabled');
		    }
		  },
		});

		// bind the load more button
		loadButton.addEventListener('click', function() {
		  feed.next();
		});
		feed.run();
	});
</script>


<?php get_footer(); ?>