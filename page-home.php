<?php 

Themewrangler::setup_page();get_header(/***Template Name: Home Page */); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

$home_args = array(
	'posts_per_page' => -1,
	'post__in'			 => array(14,4,8),
	'post_type'      => 'page',
	'order'          => 'ASC',
	'orderby'				 => 'menu_order'
);

$home_posts = get_posts( $home_args );

?>


<div id="home" class="home__hero hero hero--overlay hero--md bg--black relative" style="background-image: url(<?php echo $thumb_url; ?>);" data-stellar-background-ratio="0.75">
	<div class="centered centered__bottomer" style="z-index: 50">
		<div class="fs-row">
			<div class="fs-cell fs-all-full">
				<h2 class="home__title title title--xl"><a href="<?php the_permalink(); ?>" class="color--white bg--black-90">EightyTwo</a></h2>
			</div>
		</div>
	</div>
</div>
<div class="bg--black">
	<div class="fs-row">
		<div class="fs-cell fs-lg-8 fs-md-full fs-sm-full color--white home__hero-copy">
			<hr class="invisible">
			<h3 class="color--white" style="padding:10px;margin-left: -10px;"><?php echo get_the_content(); ?></h3>
		</div>
	</div>
	<div class="fs-row">
		<div class="fs-cell fs-all-full hentry__content">
			<?php the_field('intro_copy',10); ?>
		</div>
	</div>
</div>

<?php
foreach($home_posts as $post): setup_postdata( $post );
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];
$seoTitle = seoString(get_the_title());

if( $seoTitle == 's' ):
?>

<div id="<?php echo seoString(get_the_title()); ?>" class="home__hero hero hero--sm bg--black relative">
	<div class="centered centered__bottomer">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white">
				<h2 class="home__title title title--xl color--white"><a href="<?php the_permalink(); ?>" class="bg--black-90">Info</a></h2>
			</div>
		</div>
	</div>
	<div id="gmap" class="covered"></div>
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

<?php else: ?>


<div class="relative">
	<a href="<?php the_permalink(); ?>" class="covered" style="z-index: 50;"></a>
	<div id="<?php echo seoString(get_the_title()); ?>" class="home__hero hero hero--sm wallpaper--parallax bg--black relative" <?php if($thumb_id): ?>style="background-image: url(<?php echo $thumb_url; ?>);" data-stellar-background-ratio="0.75"<?php endif; ?>>
		<div class="centered centered__bottomer">
			<div class="fs-row">
				<div class="fs-cell fs-all-full color--white">
					<h2 class="home__title title title--xl color--white"><a href="<?php the_permalink(); ?>" class="bg--black-90"><?php the_title(); ?></a></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="home__hero hero--padded bg--darkGray">
		<div class="fs-row">
			<div class="home__hero-copy fs-cell fs-lg-8 fs-md-6 fs-sm-3 color--white">
				<?php the_field('intro_copy'); ?>
				<hr class="compact invisible">
			</div>
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