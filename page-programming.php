<?php Themewrangler::setup_page();get_header(/***Template Name: Programming */); ?>

<article <?php post_class(); ?>>
	<?php get_template_part('parts/page', 'header' ); ?>
	<div style="position: relative; z-index:99">
		<div class="hentry__content">
			<div class="fs-row">
				<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 color--white mainType">
					<hr class="invisible">
					<?php the_post(); the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</article>

<hr class="divider divider--dark">
<div id="instafeed--single-wrapper"><div class="fs-row" id="instafeed--single"></div></div>

<div class="fs-row">
	<div class="fs-cell fs-all-full">
		<div class="hentry__content" style="margin-bottom: 12.5px">
			<h3 class="color--white">Past Posts</h3>
		</div>
	</div>
</div>

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

		var smallFeed = new Instafeed({
			get: 'user',
			userId: '391656327',
			target: 'instafeed--single',
			limit: 1,
			clientId: '92edd37c66a44760a6e11f658e4ec473',
			accessToken: '391656327.1677ed0.45bd7ee1eaee4568a524873ea811c49f',
			resolution: 'standard_resolution',
			template: '<div class="featured fs-cell fs-lg-third fs-md-half fs-sm-full"><a class="open--image" href="{{image}}"><img src="{{image}}" class="img-responsive" /></a></div><div class="featured-caption fs-cell fs-lg-third fs-md-half fs-sm-full"><span class="title title--md">Posted {{model.created_time}}<br>{{caption}}</span></div>',
			after: function() {
				$('.open--image').magnificPopup({
					type: 'image',
					preloader: false,
				});
		  },
		  filter: function(image) {
				var date = new Date(image.created_time*1000);

				m = date.getMonth();
				d = date.getDate();
				y = date.getFullYear();

				var month_names = new Array ( );
				month_names[month_names.length] = "Jan";
				month_names[month_names.length] = "Feb";
				month_names[month_names.length] = "Mar";
				month_names[month_names.length] = "Apr";
				month_names[month_names.length] = "May";
				month_names[month_names.length] = "Jun";
				month_names[month_names.length] = "Jul";
				month_names[month_names.length] = "Aug";
				month_names[month_names.length] = "Sep";
				month_names[month_names.length] = "Oct";
				month_names[month_names.length] = "Nov";
				month_names[month_names.length] = "Dec";

				var thetime = month_names[m] + ' ' + d + ' ' + y;

				image.created_time = thetime;

				return true;
			}
		});

		var feed = new Instafeed({
			get: 'user',
			userId: '391656327',
			limit: 13,
			clientId: '92edd37c66a44760a6e11f658e4ec473',
			accessToken: '391656327.1677ed0.45bd7ee1eaee4568a524873ea811c49f',
			resolution: 'standard_resolution',
			template: '<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-half"><a class="open--image" title="Posted {{model.created_time}} — {{caption}}" href="{{image}}"><img src="{{image}}" class="img-responsive" /></a><hr class="invisible compact" /></div>',
			after: function() {
		    // disable button if no more results to load
		    if (!this.hasNext()) {
		      loadButton.setAttribute('disabled', 'disabled');
		    }
				$('.open--image').magnificPopup({
					type: 'image',
					preloader: false,
					//modal: true
				});
		  },
		  filter: function(image) {
				var date = new Date(image.created_time*1000);

				m = date.getMonth();
				d = date.getDate();
				y = date.getFullYear();

				var month_names = new Array ( );
				month_names[month_names.length] = "Jan";
				month_names[month_names.length] = "Feb";
				month_names[month_names.length] = "Mar";
				month_names[month_names.length] = "Apr";
				month_names[month_names.length] = "May";
				month_names[month_names.length] = "Jun";
				month_names[month_names.length] = "Jul";
				month_names[month_names.length] = "Aug";
				month_names[month_names.length] = "Sep";
				month_names[month_names.length] = "Oct";
				month_names[month_names.length] = "Nov";
				month_names[month_names.length] = "Dec";

				var thetime = month_names[m] + ' ' + d + ' ' + y;

				image.created_time = thetime;

				return true;
			}
		});

		// bind the load more button
		loadButton.addEventListener('click', function() {
		  feed.next();
		});
		feed.run();
		smallFeed.run();
	});

</script>

<hr class="invisible">


<?php get_footer(); ?>