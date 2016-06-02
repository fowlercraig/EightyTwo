<?php Themewrangler::setup_page();get_header(); ?>

<div id="error">
  <div id="error--centered">
    <div class="fs-row">
      <div class="fs-cell fs-lg-5 fs-md-4 fs-sm-3 fs-centered text-center">
      	<h1 class="entry-title"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
        <p><?php _e( 'Nothing found for the requested page.', 'blankslate' ); ?></p>
		<?php // get_search_form(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>