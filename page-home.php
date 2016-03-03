<?php 

Themewrangler::setup_page();get_header(/***Template Name: Home Page */); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

$home_args = array(
	'posts_per_page' => -1,
	'post__in'			 => array(10,14,4,8),
	'post_type'      => 'page',
	'order'          => 'DESC'
);

$home_posts = get_posts( $home_args );

?>

<div class="home__hero hero hero--wh pinned pinned--fixed wallpaper bg--black relative" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
	<div class="centered centered__bottom">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white">
				<h3 class="title title--xl color--white">EightyTwo LA</h3>
				<a href="#" class="btn btn--link accent">View Case Study</a>
			</div>
		</div>
	</div>
</div>

<div style="position: relative; z-index:999">
<div class="home__hero hero hero--wh wallpaper relative"></div>

<?php
foreach($home_posts as $post): setup_postdata( $post );
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];
?>

<div class="home__hero hero--md wallpaper bg--black relative" <?php if($thumb_id): ?>data-background-options='{"source":"<?php echo $thumb_url; ?>"}'<?php endif; ?>>
	<div class="centered centered__top">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white">
				<h3 class="title title--lg color--white"><?php the_title(); ?></h3>
			</div>
		</div>
	</div>
	<div class="centered centered__bottom">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white">
				<a href="<?php the_permalink(); ?>" class="btn btn--link accent">Jump In</a>
			</div>
		</div>
	</div>
</div>

<?php endforeach; wp_reset_postdata(); ?>

</div>

<?php get_footer(); ?>