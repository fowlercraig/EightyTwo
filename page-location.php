<?php Themewrangler::setup_page();get_header(/***Template Name: Location */); ?>

<article <?php post_class(); ?>>
	<?php 

	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'original', true);
	$thumb_url = $thumb_url_array[0];

	?>

<article <?php post_class(); ?>>
	<?php get_template_part('parts/page', 'header' ); ?>
	<div style="position: relative; z-index:99">
		<div class="hentry__content">
			<div class="fs-row">
				<div class="fs-cell fs-lg-half fs-md-6 fs-sm-3 color--white mainType">
					<hr class="invisible">
					<?php the_post(); the_content(); ?>
					<hr class="divider bg--white--25">
					<div class="fs-row">
						<div class="fs-cell fs-all-full fs-sm-full">
				<p>
					Entry is on a first-come, first-served basis and is always 100% free with no cover charge.  
					We don't take reservations and there is no bottle service, reserved seating, or guest list.  
				</p>
			</div>
			<div class="fs-cell fs-all-full fs-sm-full">
				<p>
					A line sometimes forms on weekend nights based on our capacity, so it's always a good idea to 
					come as early as possible (before 9pm), especially if you have a larger group.
				</p>
			</div>
			<hr class="fs-cell fs-all-full invisible compact">
			<div class="fs-cell fs-all-full fs-sm-full">
				<p>
					We love when our friends and customers celebrate birthdays at EightyTwo but please note 
					that we don't allow balloons or decorations.  You are welcome to bring a cake and enjoy it 
					in our parking lot dining area - just leave it with security when you arrive.  Sorry, but 
					we do not allow other outside food or drink.
				</p>
			</div>
			<div class="fs-cell fs-all-full fs-sm-full">
				<p>
					For buyout inquiries and availability for large groups, please visit our Private Events page.
				</p>
				<p>
					<a href="/private-events" class="btn btn--link">Private Events</a>
				</p>
			</div>
					</div>
				</div>
				<div class="fs-cell fs-lg-half fs-md-6 fs-sm-3">
					<hr class="invisible">
					<div class="hero map relative">
						<div id="gmap" class="covered"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>

	<script>
	  $(document).ready(function(){
	    $( ".hentry__header h3" ).wrapInner( "<span></span>");  
	    $( ".hero h3" ).wrapInner( "<span></span>");  
	  });
	</script>

</article>

<hr class="invisible">

<?php get_footer(); ?>