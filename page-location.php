<?php Themewrangler::setup_page();get_header(/***Template Name: Location */); ?>

<article <?php post_class(); ?>>
	<?php 

	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'original', true);
	$thumb_url = $thumb_url_array[0];

	?>

	<header class="hentry__header">
	  <div class="hero hero--md hero--overlay relative bg--black" style="background-image: url(<?php echo $thumb_url; ?>);" data-stellar-background-ratio="0.75">
	    <div class="centered">
	      <div class="fs-row">
	        <div class='fs-cell fs-xl-7 fs-lg-8 fs-md-6 fs-sm-3 color--white'>
	          <h3><span><?php echo get_the_content(); ?></span></h3>
	        </div>
	      </div>
	    </div>
	  </div>
	</header>

	<script>
	  $(document).ready(function(){
	    $( ".hentry__header h3" ).wrapInner( "<span></span>");  
	    $( ".hero h3" ).wrapInner( "<span></span>");  
	  });
	</script>

</article>

<div class="hero map relative">
	<div class="centered centered--full">
		<div class="fs-row">
			<div class="fs-cell fs-full-all">
				<?php the_field('intro_copy'); ?>
			</div>
		</div>
	</div>
	<div id="gmap" class="covered"></div>
</div>

<hr class="invisible">

<div class="fs-row">
	<div class="fs-cell fs-lg-8 fs-md-full fs-sm-3">
		<div class="fs-row">
			<div class="fs-cell fs-all-half fs-sm-full">
				<span class="title title--md color--white">From the 101 Fwy</span><br><br>
				<p>Alameda Ave. south to E. 2nd St. turn left. Right on Rose Ave. Right on East 3rd. EightyTwo is on the left at the end of the block where East 3rd hits 4th Place.</p>
			</div>
			<div class="fs-cell fs-all-half fs-sm-full">
				<span class="title title--md color--white">From the 10 Fwy</span><br><br>
				<p>Exit Santa Fe Ave. North. Go 1 mile to east to 3rd Street, turn left. Go straight until you hit 4th place. EightyTwo is on the left.</p>
			</div>
			<hr class="fs-cell fs-all-full invisible compact">
			<div class="fs-cell fs-all-half fs-sm-full">
				<span class="title title--md color--white">The parking situation</span><br><br>
				<p>PAY LOTS: There are an abundance of lots in the area, both on East 3rd and Traction.</p>
				<p>VALET: East 3rd in front of Zip sushi and Wurstcüche.</p>
			</div>
			<div class="fs-cell fs-all-half fs-sm-full">
				<span class="title title--md color--white">&nbsp;</span><br><br>
				<p>NOT DRIVING — EightyTwo is located 2 blocks south of the Little Tokyo / Arts District Gold Line stop.  We also have ample short and long-term bike storage.</p>
			</div>
		</div>
	</div>
</div>

<br>
<br>

<?php get_footer(); ?>