<?php 

Themewrangler::setup_page();get_header(/***Template Name: Contact */); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'url', true);
$thumb_url = $thumb_url_array[0];

?>

<article <?php post_class(); ?>>
	<header class="hentry__header">
		<div class="hero hero--sm relative bg--black wallpaper" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
			<div class="centered centered__bottom">
				<div class="fs-row">
					<div class='fs-cell fs-lg-half fs-md-6 fs-sm-3 color--white'>
						<?php the_field('intro_copy'); ?>
					</div>
				</div>
			</div>
		</div>
	</header>
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

<div class="games-wrapper">
	<div class="fs-row">
		<div class="fs-cell fs-xl-half fs-lg-half fs-md-half fs-sm-3">
			<div class="fs-row">
				<select class="fs-cell fs-all-half">
					<option>Filter</option>
					<option>Arcade</option>
					<option>Pinball</option>
					<option>Console</option>
				</select>
				<select class="fs-cell fs-all-half">
					<option>Sort</option>
					<option>Alphabetical A &rarr; Z</option>
					<option>Alphabetical Z &rarr; A</option>
				</select>
			</div>
		</div>
		<div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3 fs-right">
			<form><input type="text" placeholder="Search" id="search" /></form>
		</div>
		<hr class="invisible fs-cell fs-all-full">

<?php $games = get_field('games'); ?>
<?php foreach($games as $game): ?>

		<div class="games__item fs-cell fs-xl-3 fs-lg-4 fs-md-half fs-sm-3">
			<div class="games__item-type fs-cell fs-lg-2 fs-md-1 fs-sm-1 fs-contained relative">
				<span class="accent accent--sm color--white"><?php echo strtoupper($game['type']); ?></span>
			</div>
			<div class="games__item-content fs-cell fs-lg-10 fs-md-5 fs-sm-2 fs-contained relative">
				<div class="centered wrapper">
					<div class="games__item-image"></div>
					<div class="games__item-info">
						<span class="title title--sm color--white"><?php echo $game['name']; ?></span><br>
						<span class="title title--sm color--white--50"><?php echo $game['manufacturer']; ?></span>
						<span class="title title--sm color--white--50"><?php echo $game['year']; ?></span>
					</div>
				</div>
			</div>
		</div>

<?php endforeach; ?>

	</div>
</div>

<hr class="invisible">
<div class="carousel">

<?php $features = get_field('featured'); ?>
<?php foreach($features as $game): ?>

	<div class="carousel__slide relative home__hero hero--overlay hero--sm wallpaper relative bg--gray" data-background-options='{"source":"<?php echo $game['image']['sizes']['gallery-lg']; ?>"}'>
		<div class="centered centered--full">
			<div class="fs-row">
				<div class="fs-cell fs-lg-half fs-md-full fs-sm-3">
					<span class="accent accent--md color--white">Featured Game</span><br>
					<span class="title title--lg color--white"><?php echo $game['name']; ?></span>
					<div class="color--white"><?php echo $game['description']; ?></div>
				</div>
			</div>
		</div>
	</div>

<?php endforeach; ?>

</div>

<?php get_footer(); ?>