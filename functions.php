<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function portfolio_register_assets() {
    
    // Déclarer le JS
	wp_enqueue_script( 
        'portfolio-main-scripts', 
        get_template_directory_uri() . '/js/script.js', 
        array(), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'portfolio-main-style',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
}
add_action( 'wp_enqueue_scripts', 'portfolio_register_assets' );