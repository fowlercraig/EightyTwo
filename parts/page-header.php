<?php 

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'original', true);
$thumb_url = $thumb_url_array[0];
$images = get_field('header_gallery');

?>

<?php if($images): ?>
<header class="hentry__header carousel carousel_fade" data-carousel-options='{"single":true, "autoAdvance": true }'>
  <?php foreach($images as $image): ?>
  <div class="hero hero--sm hero--overlay relative bg--black" style="background-image: url(<?php echo $image['sizes']['large']; ?>);"></div>
  <?php endforeach; ?>
</header>
<?php else: ?>
<header class="hentry__header">
  <div class="hero hero--sm hero--overlay relative bg--black" style="background-image: url(<?php echo $thumb_url; ?>);" data-stellar-background-ratio="0.75">
    <div class="centered centered__bottom">
      <div class="fs-row">
        <div class='fs-cell fs-xl-8 fs-lg-8 fs-md-6 fs-sm-3 color--white'>
          <?php #the_field('page_header'); ?>
        </div>
      </div>
    </div>
  </div>
</header>
<?php endif; ?>

<script>
  $(document).ready(function(){
    $( ".hentry__header h3" ).wrapInner( "<span></span>");  
  });
</script>

