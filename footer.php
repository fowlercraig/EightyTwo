</div>
</div><!--Wrapper-->

<footer id="footer">
  <div class="fs-row">
    <div class='fs-cell fs-lg-6 fs-md-6 fs-sm-3 color--white'>
      <span class="btn btn--nav btn__first">&copy; <?php bloginfo('name' );?> <?php echo date('Y'); ?></span>
      <a target="_blank" href="https://www.facebook.com/eightytwola/" class="btn btn--nav btn__icon ss-social-circle ss-facebook"></a>
      <a target="_blank" href="https://www.instagram.com/EightyTwoLA/" class="btn btn--nav btn__icon ss-social-circle ss-instagram"></a>
      <a target="_blank" href="https://twitter.com/EightyTwoLA" class="btn btn--nav btn__icon ss-social-circle ss-twitter"></a>
    </div>
    <div class="fs-cell fs-lg-hide fs-md-6 fs-sm-3">
      <hr class="divider compact bg--white--50">
    </div>
    <div class='fs-cell fs-lg-6 fs-md-6 fs-sm-3 text-right'>
      <a href="<?php echo get_permalink(88); ?>" class="btn btn--nav btn__last">Interested in Private Events?</a>
    </div>
  </div>
</footer>

<?php if(is_front_page() || is_page('info')): ?>
<script type="text/javascript">
  $(function() {
    new Maplace({
      locations: [{
        lat: 34.0454001,
        lon: -118.2374439,
        icon: '/assets/img/82icon.png',
      }],
      map_options: {
        <?php if(is_front_page()): ?>
        set_center: [34.0454001, -118.2389439],
        <?php endif; ?>
        zoom: 17,
        draggable: false,
        scrollwheel: false,
        styles: <?php include locate_template('parts/googlemaps.php'); ?>,
      },
      controls_on_map: false
    }).Load();
  });
</script>
<?php endif; ?>

<?php 
  include locate_template('parts/mobile-menu.php' );
  wp_footer(); 
?>

</body>
</html>
