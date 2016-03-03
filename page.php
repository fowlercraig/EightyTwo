<?php 

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'url', true);
$thumb_url = $thumb_url_array[0];

?>

<article <?php post_class(); ?>>
	<header class="hentry__header">
		<div class="hero hero--sm relative pinned pinned--fixed bg--black wallpaper" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
			<div class="centered centered__bottom">
				<div class="fs-row">
					<div class='fs-cell fs-all-full'>
						<span class="title title--xl color--white"><span><?php the_title(); ?></span></span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div style="position: relative; z-index:99">
		<div class="home__hero hero--sm wallpaper relative"></div>
		<div class="hentry__content">
			<div class="fs-row">
				<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
					<?php the_post(); the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>