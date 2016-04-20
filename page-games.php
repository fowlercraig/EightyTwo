<?php Themewrangler::setup_page();get_header(/***Template Name: Games */); ?>

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

<div class="fs-row">
	<div class="fs-cell fs-all-full">
		<hr class="divider compact bg--white--25">
		<hr class="divider invisible">
	</div>
	<div class="fs-cell fs-xl-half fs-lg-half fs-md-half fs-sm-3">
			<div class="fs-row">
				<select class="fs-cell fs-all-half js-filters">
					<option>Filter</option>
					<option value="">All</option>
					<option value="Arcade Video Game">Arcade Video Game</option>
					<option value="Pinball">Pinball</option>
				</select>
				<select class="fs-cell fs-all-half sort-options">
					<option value="">Sort</option>
					<option value="title">Alphabetical A &rarr; Z</option>
					<option value="title-reversed">Alphabetical Z &rarr; A</option>
					<option value="date">Date</option>
				</select>
			</div>
		</div>
		<div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3 fs-right">
			<form><input type="text" placeholder="Search" id="search" class="js-shuffle-search" /></form>
		</div>
	</div>
</div>

<hr class="invisible fs-cell fs-all-full">

<div class="games-wrapper">
	<div class="fs-row">

<?php 
	$args =  array(
		'posts_per_page'	=> -1,
	); 
	$query = new WP_Query( $args );
	$games = $query->get_posts();
?>

<?php #$games = get_field('games'); ?>
<?php #foreach($games as $game): ?>
<?php foreach ( $games as $post ) : setup_postdata( $post ); ?>

		<?php 
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumb', true);
			if ( has_post_thumbnail() ) {
				$thumb_url = $thumb_url_array[0];
			} else {
				$thumb_url = '/assets/img/1459313206_507.png';
			}
		?>

		<div class="games__item fs-cell fs-xl-3 fs-lg-4 fs-md-half fs-sm-3" data-cat="<?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?>" data-title="<?php echo get_the_title(); ?>">
			<div class="games__item-content fs-cell fs-lg-fullfs-md-full fs-sm-2 fs-contained relative">
				<div class="centered wrapper">
					<div class="games__item-image" style="background-image:url(<?php echo $thumb_url; ?>);"></div>
					<div class="games__item-info">
						<span class="title title--type title--sm color--gray"><?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?></span><br>
						<span class="title title--main title--sm color--white"><?php echo get_the_title(); ?></span><br>
						<span class="title title--type title--sm color--gray"><?php the_field('maker'); ?> | <?php the_field('year'); ?></span>
					</div>
				</div>
			</div>
		</div>

<?php endforeach; wp_reset_postdata(); ?>

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