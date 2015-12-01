<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/../assets/ico/favicon.ico">  <!--this is where you link to the favicon-->
    <link href='http://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'> <!--H1 jumbotron font-->
     <!--will display the name of the page with a bar then followed by the URL-->
    <title>    
    <?php wp_title( '|', true, 'right'); ?>
    <?php bloginfo( 'name' )?>
    </title>

    <?php wp_head(); ?>
    
  </head>

  <body <?php body_class(); ?>>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-70865918-1', 'auto');


    </script>
    <script>
    //setting for each of the pages
    ga('set', {
      page: '/#',
      title: 'Home'
    });
    ga('send', 'pageview', '/#');
   ga('set', {
      page: '/#menu',
      title: 'Menu'
    });
   ga('send', 'pageview', '/#menu');
   ga('set', {
      page: '/#drinks',
      title: 'Drinks'
    });
   ga('send', 'pageview', '/#drinks');
   ga('set', {
      page: '/#food',
      title: 'Food'
    });
   ga('send', 'pageview', '/#food');
   ga('set', {
      page: '/#events-3',
      title: 'Events'
    });
    ga('send', 'pageview', '/#events-3'); 
   ga('set', {
      page: '/#find-us-3',
      title: 'Find-Us'
    });
   ga('send', 'pageview', '/#find-us-3'); 
   ga('set', {
      page: '/#photos',
      title: 'Photos'
    });                            
    ga('send', 'pageview', '/#photos');
    </script>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container ">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">Sharkys Bar and Grill</a>
         
        </div>

        <div class="navbar-collapse collapse">

          <?php 
            $args = array(
              'menu'        => 'header-menu',
              'menu_class'  => 'nav navbar-nav',
              'container'   => 'false'
            );
            wp_nav_menu( $args );
          ?>

        </div><!--/.navbar-collapse -->

      </div>
    </div>
