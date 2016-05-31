<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo( 'sitename' ) ?></title>
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="/assets/js/app.ie.min.js"></script>
<![endif]-->

<?php if(is_front_page() || is_page('info')): ?>
<script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/maplace-js/0.2.7/maplace.js"></script>
<?php endif; ?>

<?php include_once locate_template('lib/config.fonts.php' ); ?>
<?php include_once locate_template('lib/config.menus.php' ); ?>

</head>

<body <?php body_class('fs-grid'); ?>>
<div id="wrapper" class="bg--black">
<?php if(is_front_page()):?>
<header id="header" class="header header--lg pinned pinned--top" style="z-index: 100">
<?php else: ?>
<header id="header" class="header header--lg" style="z-index: 100">
<?php endif; ?>
  <div class="fs-row">
    <menu id="header-main" class="fs-cell fs-lg-4 fs-md-2 fs-sm-2">
      <a href="/" id="header--logo" class="btn btn--logo btn--nav btn__first color--white"><?php if(!is_front_page()):?><span>/ <?php the_title(); ?></span><?php endif; ?></a>
    </menu>
    <menu id="header-mobile" class="fs-cell fs-lg-hide fs-md-hide fs-sm-1 text-right">
      <a data-swap-target="#mobile-menu, #header" class="mobile-toggle btn btn--hamburg btn--hamburg__white btn--nav btn_first btn_last">&nbsp;</a>
    </menu>
    <menu id="header-navigation" class="fs-cell fs-lg-8 fs-md-4 fs-sm-hide text-right color--white">
      <?php echo wp_nav_menu( $mainMenu ); ?>
    </menu>
  </div>
</header>

<div id="content-wrapper" class='fs-grid'>
