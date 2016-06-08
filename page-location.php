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
					<?php the_field('page_header'); ?>
					<hr class="divider bg--white--25">
					<?php the_post(); the_content(); ?>
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