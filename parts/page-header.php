<?php 

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'url', true);
$thumb_url = $thumb_url_array[0];

?>

<header class="hentry__header">
  <div class="hero hero--md relative bg--black wallpaper" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
    <div class="centered">
      <div class="fs-row">
        <div class='fs-cell fs-lg-half fs-md-6 fs-sm-3 color--white'>
          <?php the_field('intro_copy'); ?>
        </div>
      </div>
    </div>
  </div>
</header>