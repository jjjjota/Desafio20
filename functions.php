<?php

  function dl_enqueue_styles() {
    // Registrar estilos
    wp_enqueue_style( 'main',      get_parent_theme_file_uri( '/css/main.css' ), null, $theme_data->get( '1.0' ) );
    wp_enqueue_style( 'slider',    get_parent_theme_file_uri( '/css/nivo-slider.css' ), null, $theme_data->get( '1.0' ) );
    wp_enqueue_style( 'nivotheme', get_parent_theme_file_uri( '/css/nivotheme.css' ), null, $theme_data->get( '1.0' ) );
    wp_enqueue_style( 'pretty',    get_parent_theme_file_uri( '/css/prettyPhoto.css' ), null, $theme_data->get( '1.0' ) );

  }

  add_action( 'wp_enqueue_scripts', 'dl_enqueue_styles' );


  function dl_enqueue_scripts() {

    // Registrar scripts
    wp_register_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
    wp_register_script( 'main', get_parent_theme_file_uri( '/js/main.js' ), null, '1.0', true );

    // Llamar scripts
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap_js' );
    wp_enqueue_script( 'main' );
  }

  add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );

  function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
  }

  add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
?>
