<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


  <?php // Load our CSS ?>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />



  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!-- <header>
  <div class="container">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>
<<<<<<< HEAD
  </div> <!-- /.container -->
<!-- </header> -->

<div id="header-wrapper">
  <div class="container">
    <div class="row">
      <div class="12u">

        <!-- Header -->
<header id="header">
  <div class="inner">

              

              <!-- Nav -->
      <div class="navFull">
          <div class="navLeft">

              <?php wp_nav_menu(array(
                  'container' => 'nav',
                  'container_id'=> 'nav',
                  'theme_location'=>'primary'
                  )); ?>
              <!-- nav left -->  
          </div>

              <!-- Logo -->
          <div class="navMiddle">
            <h1><a href="<?php echo home_url(); ?>" id="logo"><?php bloginfo('name'); ?></a></h1>
          </div>
              <!-- nav right -->
          <div class="navRight">
          <?php wp_nav_menu(array(
                  'container' => 'nav',
                  'container_id'=> 'nav',
                  'theme_location'=>'primary'
                  )); ?>
          </div>
      </div>
              <!-- nav end -->

              <div class="banner">
                <img src="" alt="">
              </div>

              <div class="overlay">
                <h1>Johar & Co.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button>See Menu</button>
              </div>


  </div>
</header>

      </div>
    </div>
  </div>
</div>
