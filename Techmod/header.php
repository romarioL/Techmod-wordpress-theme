<html>
    <head>

    	<title><?php echo bloginfo('name'); ?></title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link type="text/css" rel="stylesheet" href="<?php  bloginfo('stylesheet_url');?>"  media="screen,projection"/>

      <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono|VT323" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php  bloginfo('template_url');?>/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <?php wp_head(); ?>

    <div class="main-header" >
    	<?php wp_nav_menu(array('menu' => 'Nome do Menu', 'container' => 'nav', 'container_class' => 'menu black', 'menu_class' => 'menu-links')); ?>

    	<div class="main-screen" id="main-screen">
    	</div>
    </div>

    <body>

