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
          <?php the_field('intro_copy'); ?>
        </div>
      </div>
    </div>
  </div>
</header>

<script>
  $(document).ready(function(){
    $( ".hentry__header h3" ).wrapInner( "<span></span>");  
  });
</script>

