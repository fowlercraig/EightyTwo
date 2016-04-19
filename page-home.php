<?php 

Themewrangler::setup_page();get_header(/***Template Name: Home Page */); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

$home_args = array(
	'posts_per_page' => -1,
	'post__in'			 => array(10,14,4,8),
	'post_type'      => 'page',
	'order'          => 'ASC',
	'orderby'				 => 'menu_order'
);

$home_posts = get_posts( $home_args );

?>


<div id="home" class="home__hero hero hero--overlay hero--lg bg--black relative" style="background-image: url(<?php echo $thumb_url; ?>);" data-stellar-background-ratio="0.75">
	<div class="centered centered__bottom">
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-full fs-sm-full color--white">
				<h3 class="title title--lg color--white"><?php echo get_the_content(); ?></h3>
				<a href="#location" class="ss-gizmo ss-navigatedown color--white size--lg"></a>
			</div>
		</div>
	</div>
</div>

<?php
foreach($home_posts as $post): setup_postdata( $post );
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];
$seoTitle = seoString(get_the_title());

if( $seoTitle == 'location' ):
?>

<div id="<?php echo $seoTitle; ?>" class="home__hero hero  bg--white relative">
	<div class="centered">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--black">
				<div class="home__hero-copy">
					<?php the_field('intro_copy'); ?>
				</div>
			</div>
		</div>
	</div>
	<div id="gmap" class="covered"></div>
</div>
<div class="home__hero hero--padded bg--darkGray">
	<div class="fs-row">
		<div class="home__hero-copy fs-cell fs-lg-6 fs-md-5 fs-sm-3 color--white">
			<h2 class="home__title title title--xl color--white"><a href="<?php the_permalink(); ?>" class="bg--black">Info</a></h2>
			<?php the_content(); ?>
			<hr class="compact invisible">
			<a href="<?php the_permalink(); ?>" class="btn btn--primary bg--white color--black">More Info</a>
		</div>
	</div>
</div>

<?php else: ?>

<div id="<?php echo seoString(get_the_title()); ?>" class="home__hero hero hero--sm wallpaper--parallax bg--black relative" <?php if($thumb_id): ?>style="background-image: url(<?php echo $thumb_url; ?>);" data-stellar-background-ratio="0.75"<?php endif; ?>>
	<div class="centered centered__bottomer">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white">
				<h2 class="home__title title title--xl color--white"><a href="<?php the_permalink(); ?>" class="bg--black"><?php the_title(); ?></a></h2>
			</div>
		</div>
	</div>
</div>
<div class="home__hero hero--padded bg--darkGray">
	<div class="fs-row">
		<div class="home__hero-copy fs-cell fs-lg-6 fs-md-5 fs-sm-3 color--white">
			<?php the_field('intro_copy'); ?>
			<hr class="compact invisible">
			<a href="<?php the_permalink(); ?>" class="btn btn--primary bg--white color--black">More Info</a>
		</div>
	</div>
</div>

<?php endif; ?>

<?php endforeach; wp_reset_postdata(); ?>

</div>

<div class="home__nav">
	<div class="home__nav-button">
		<a class="accent accent--sm" href="#home"></a>
	</div>
	<?php foreach($home_posts as $post): setup_postdata( $post ); ?>
	<div class="home__nav-button">
		<a class="accent accent--sm" href="#<?php echo seoString(get_the_title()); ?>"></a>
	</div>
	<?php endforeach; wp_reset_postdata(); ?>
</div>	

<?php get_footer(); ?>