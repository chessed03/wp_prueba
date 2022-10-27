<?php
/**
 * Header file for the My Theme WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <title>
            <?php

                global $page, $paged;
                
                wp_title( '|', true, 'right' );
                
                // Add the blog name.
                bloginfo( 'name' );
                
                // Add the blog description for the home/front page.
                $site_description = get_bloginfo( 'description', 'display' );
                if ( $site_description && ( is_home() || is_front_page() ) )
                    echo " | $site_description";
                
                // Add a page number if necessary:
                if ( $paged >= 2 || $page >= 2 )
                    echo ' | ' . sprintf( __( 'Page %s', 'mytheme' ), max( $paged, $page ) );
            
            ?>
        </title>

        <?php wp_head(); ?>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

    <body>

    <div class="navbar navbar-material-blog navbar-primary navbar-absolute-top">

      <div class="navbar-image" style="background-image: url('<?php echo get_template_directory_uri() ?>./assets/img/technology/unsplash-6.jpg');background-position: center 40%;"></div>

      <div class="navbar-wrapper container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="index.html"><i class="material-icons">&#xE871;</i> Material Blog</a> -->
          <a class="navbar-brand" href="<?php home_url(); ?>"><i class="material-icons">&#xE871;</i> <?php bloginfo("name"); ?> </a>
        </div>
        <!-- <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
            <li class="active dropdown">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Stories <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="home-fashion.html">Fashion</a></li>
                <li><a href="home-food.html">Food</a></li>
                <li><a href="home-music.html">Music</a></li>
                <li><a href="home-photography.html">Photography</a></li>
                <li><a href="home-technology.html">Technology</a></li>
                <li><a href="home-travel.html">Travel</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Filters <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="filter-category.html">Category</a></li>
                <li><a href="filter-author.html">Author</a></li>
                <li><a href="filter-date.html">Date</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Post <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="post-image.html">Image post</a></li>
                <li><a href="post-video.html">Video post</a></li>
              </ul>
            </li>
            <li><a href="page-about.html">About</a></li>
            <li><a href="page-contact.html">Contact</a></li>
            <li class="dropdown hidden-sm">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Documentation <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="doc-buttons.html">Buttons</a></li>
                <li><a href="doc-forms.html">Forms</a></li>
                <li><a href="doc-icons.html">Icons</a></li>
                <li><a href="doc-indicators.html">Indicators</a></li>
                <li><a href="doc-navbars.html">Navbars</a></li>
                <li><a href="doc-panels.html">Panels</a></li>
                <li><a href="doc-tables.html">Tables</a></li>
                <li><a href="doc-typography.html">Typography</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div> -->

        <?php 
        
          $arg = array(
            'theme_location'  => 'principal',
            'container'       => 'div',
            'container_class' => 'navbar-collapse collapse navbar-responsive-collapse',
            'menu_class'      => 'nav navbar-nav',
          );

          wp_nav_menu( $arg );

        ?>

      </div>
    </div>

    <div class="container blog-content">

      <div class="row">
