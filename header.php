<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>


<body <?php body_class(); ?>>

<header>
   <div class="hero" style="background-image:url(<?php echo hackeryou_get_thumbnail_url(24) ?>)"  >
<!-- SET AS FEATURED IMAGE -->

  <div class="wrapper">
    
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <div class="logo"><h1><?php bloginfo( 'name' ); ?></h1>
          </div>
        </a>
    

   <nav class>
      <div class="fa fa-bars fa-2x" title="menu"></div>
    
      <div class="dropdown">
        
      <?php wp_nav_menu( array(
         'container' => false,
         'theme_location' => 'primary'
       )); ?>
      </div>
      
   </nav>
  </div> <!-- /.wrapper -->
</div><!-- /.hero-->
</header><!--/.header-->

