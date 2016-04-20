<?php 

Themewrangler::setup_page();get_header(/***Template Name: Private Events */); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'url', true);
$thumb_url = $thumb_url_array[0];

?>

<article <?php post_class(); ?>>
	<header class="hentry__header">
		<div class="hero hero--md hero--overlay relative bg--black" style="background-image: url(<?php echo $thumb_url; ?>);" data-stellar-background-ratio="0.75">
			<div class="centered centered__bottom">
				<div class="fs-row">
					<div class='fs-cell fs-lg-half fs-md-6 fs-sm-3 color--white'>
						<?php the_field('intro_copy'); ?>
					</div>
				</div>
			</div>
		</div>
	</header>
	<hr class="invisible">
	<div style="position: relative; z-index:99">
		<div class="hentry__content">
			<div class="fs-row">
				<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 color--white">
					<?php the_post(); the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</article>

<hr class="divider bg--white--25">

<div class="private__wrapper">
	<div class="private__quotes">
		<div class="fs-row">
			<div class='fs-cell fs-all-full'>
				<div class="carousel">
					<?php $quotes = get_field('quotes'); ?>
					<?php foreach($quotes as $quote): ?>
					<div class="carousel__slide">
						<?php echo $quote['quote']; ?>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="private__gallery">
		<div class="fs-row">
			<div class='fs-cell fs-all-full'>
				<div class="carousel">
					<?php $images = get_field('gallery'); ?>
					<?php foreach($images as $image): ?>
					<div class="carousel__slide">
						<img src="<?php echo $image['sizes']['gallery-lg']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>"/>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="private__policy-wrapper" style="background-image: url(<?php the_field('birds_eye'); ?>);">
		<div class="fs-row">
			<div class="private__policy fs-cell fs-lg-half fs-md-half color--white">
				<hr class="invisible">
				<?php the_field('policy'); ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>