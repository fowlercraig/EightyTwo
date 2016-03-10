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

<div id="home" class="home__hero hero hero--lg pinned wallpaper bg--black relative" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
	<div class="centered centered__bottom">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white">
				<h3 class="title title--xl color--white">EightyTwo LA</h3>
				<a href="#" class="btn btn--link accent">View Case Study</a>
			</div>
		</div>
	</div>
</div>

<div style="position: relative; z-index:99">
<div class="home__hero hero hero--lg wallpaper relative"></div>

<?php
foreach($home_posts as $post): setup_postdata( $post );
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];
?>

<div id="<?php echo seoString(get_the_title()); ?>" class="home__hero hero wallpaper bg--black relative" <?php if($thumb_id): ?>data-background-options='{"source":"<?php echo $thumb_url; ?>"}'<?php endif; ?>>
	<div class="centered centered__bottom">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white">
				<h3 class="title title--lg color--white"><span class="bg--black"><?php the_title(); ?></span></h3>
			</div>
		</div>
	</div>
</div>
<div class="home__hero hero--padded bg--darkGray">
	<div class="fs-row">
		<div class="fs-cell fs-all-full color--white">
			<?php the_field('intro_copy'); ?>
		</div>
	</div>
</div>

<?php endforeach; wp_reset_postdata(); ?>

</div>

<div class="home__nav">
	<div class="home__nav-button">
		<a class="accent accent--sm" href="#home">
			<span class="bg--black color--white">
				Home
			</span>
		</a>
	</div>
	<?php foreach($home_posts as $post): setup_postdata( $post ); ?>
	<div class="home__nav-button">
		<a class="accent accent--sm" href="#<?php echo seoString(get_the_title()); ?>">
			<span class="bg--black color--white">
				<?php the_title(); ?>
			</span>
		</a>
	</div>
	<?php endforeach; wp_reset_postdata(); ?>
</div>	

<?php get_footer(); ?>