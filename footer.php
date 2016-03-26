</div>
</div><!--Wrapper-->

<footer id="footer">
  <div class="fs-row">
    <div class='fs-cell fs-lg-11 fs-md-6 fs-sm-3'>
      <span class="btn btn--nav btn__first">Copyright <?php bloginfo('name' );?> <?php echo date('Y'); ?></span>
    </div>
  </div>
</footer>

<?php 
  include locate_template('parts/mobile-menu.php' );
  wp_footer(); 
?>

</body>
</html>
