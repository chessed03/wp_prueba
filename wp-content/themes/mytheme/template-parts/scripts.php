<?php

    function mytheme_scripts() {

        wp_enqueue_script( 'script-pace', get_template_directory_uri() . '/assets/js/pace.min.js' );
        
        // Bootstrap core CSS and Material Bootstrap
        wp_enqueue_style( 'style-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'style-font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css' );
        wp_enqueue_style( 'style-bootstrap-material-design', get_template_directory_uri().'/assets/css/bootstrap-material-design.css' );
        wp_enqueue_style( 'style-ripples', get_template_directory_uri().'/assets/css/ripples.min.css' );
        wp_enqueue_style( 'style-material-scrolltop', get_template_directory_uri().'/assets/css/material-scrolltop.css' );
        // Custom styles for this template
        wp_enqueue_style( 'style', get_stylesheet_directory_uri());

        wp_enqueue_script( 'script-jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.3.min.js' );
        wp_enqueue_script( 'scripts-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
        wp_enqueue_script( 'scripts-ripples', get_template_directory_uri() . '/assets/js/ripples.min.js' );
        wp_enqueue_script( 'scripts-material', get_template_directory_uri() . '/assets/js/material.min.js' );
        wp_enqueue_script( 'scripts-material-scrolltop', get_template_directory_uri() . '/assets/js/material-scrolltop.js' );
        wp_enqueue_script( 'scripts-main', get_template_directory_uri() . '/assets/js/main.js' );

    }
 
    add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

?>