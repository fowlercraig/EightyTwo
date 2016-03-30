<?php Themewrangler::setup_page();get_header(/***Template Name: Drinks */); ?>

<article <?php post_class(); ?>>
	<?php get_template_part('parts/page', 'header' ); ?>
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

<div class="drink-wrapper">
	

<?php $drinks = get_field('drinks'); ?>
<?php if($drinks): ?>
<?php $i = 1; foreach($drinks as $drink): ?>
	<div class="fs-row">

		<?php if($i % 2 == 0): ?>
		<div class="drinks-menu fs-cell fs-lg-half fs-md-full fs-sm-3 fs-right">
		<?php else: ?>
		<div class="drinks-menu fs-cell fs-lg-half fs-md-full fs-sm-3">
		<?php endif; ?>
			<span class="title title--md color--white"><?php echo $drink['title']; ?></span>
			<hr class="divider divider--dark">
			<?php echo $drink['drinks']; ?>
		</div>
		<div class="fs-cell fs-lg-half fs-md-full fs-sm-3">
			<?php $gallery = $drink['gallery']; ?>
			<?php if($gallery): ?>
			<div class="drinks-carousel carousel">
			<?php foreach($gallery as $image): ?>
				<div class="carousel__slide">
					<img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" />
				</div>
			<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
		</div>

<?php $i++; endforeach; ?>
<?php endif; ?>

	
</div>

<?php get_footer(); ?>