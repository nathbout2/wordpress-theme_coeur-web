<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function cw_register_assets() {
    
    // JS de Bootstrap
	wp_enqueue_script( 
        'cw-bootstrap-scripts', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', 
        array(), 
        '1.0', 
        true
    );
    // le JS
	wp_enqueue_script( 
        'cw-main-scripts', 
        get_template_directory_uri() . 'assets/scripts/main.js', 
        array(), 
        '1.0', 
        true
    );
    
    // CSS de Bootstrap
    wp_enqueue_style( 
        'cw-bootstrap-style',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css',
        array(), 
        '1.0'
    );
  	
    //style.css à la racine du thème
    wp_enqueue_style( 
        'cw-main-style',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Autres feuilles de style
    wp_enqueue_style( 
        'cw-nav-style',
        get_template_directory_uri() . '/assets/styles/nav.css', 
        array(), 
        '1.0'
    );
  	
}
add_action( 'wp_enqueue_scripts', 'cw_register_assets' );