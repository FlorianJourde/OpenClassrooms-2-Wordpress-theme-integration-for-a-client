<?php

add_action( 'wp_enqueue_scripts', 'custom_enqueue_styles' );
function custom_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'init', 'custom_post_type_banner' );
function custom_post_type_banner() {
  $labels = array(
    'name'                => _x( 'Bannière', 'Post Type General Name'),
    'menu_name'           => __( 'Bannière'),
  );

  $args = array(
    'label'               => __( 'Bannière'),
//    'description'         => __( 'Toutes les locations'),
    'menu_icon'           => 'dashicons-cover-image',
    'labels'              => $labels,
    'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
    'show_in_rest'        => true,
    'hierarchical'        => false,
    'public'              => true,
    'has_archive'         => true,
  );

  register_post_type( 'banner', $args );
}

add_action( 'init', 'custom_post_type_rentals' );
function custom_post_type_rentals() {
  $labels = array(
    'name'                => _x( 'Locations', 'Post Type General Name'),
    'menu_name'           => __( 'Locations'),
  );

  $args = array(
    'label'               => __( 'Locations'),
    'description'         => __( 'Toutes les locations'),
    'menu_icon'           => 'dashicons-admin-home',
    'labels'              => $labels,
    'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
    'show_in_rest'        => true,
    'hierarchical'        => false,
    'public'              => true,
    'has_archive'         => true,
  );

  register_post_type( 'location', $args );
}

add_action( 'init', 'custom_post_type_sales' );
function custom_post_type_sales() {
  $labels = array(
    'name'                => _x( 'Ventes', 'Post Type General Name'),
    'menu_name'           => __( 'Ventes'),
  );

  $args = array(
    'label'               => __( 'Ventes'),
    'description'         => __( 'Toutes les ventes'),
    'menu_icon'           => 'dashicons-building',
    'labels'              => $labels,
    'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
    'show_in_rest' => true,
    'hierarchical'        => false,
    'public'              => true,
    'has_archive'         => true,
  );

  register_post_type( 'vente', $args );
}

add_action( 'wp_enqueue_scripts', 'menu_scripts' );
function menu_scripts() {
  wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom.js');
}
