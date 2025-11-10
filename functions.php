<?php

function assurerdev_scripts(){
    // Enqueue function which Wordpress uses to pull the stylesheet file as well as other functional filesize

    wp_enqueue_style('assurer_dev-style-css', get_template_directory_uri(  ) . '/style.css', array('assurer_dev-bootstrap-css'), '1.0', 'all' );    


    wp_enqueue_style('assurer_dev-bootstrap-css', get_template_directory_uri(  ) . '/assets/css/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style('assurer_dev-bootstrap-icons-css', get_template_directory_uri(  ) . '/assets/css/bootstrap-icons/bootstrap-icons.css' );
    wp_enqueue_style('assurer_dev-bootstrap-aos-css', get_template_directory_uri(  ) . '/assets/css/aos/aos.css' );
    wp_enqueue_style('assurer_dev-bootstrap-glighbox-css', get_template_directory_uri(  ) . '/assets/css/glightbox/css/glightbox.min.css' );
    wp_enqueue_style('assurer_dev-bootstrap-swiper-css', get_template_directory_uri(  ) . '/assets/css/swiper/swiper-bundle.min.css' );
}

add_action( 'wp_enqueue_scripts','assurerdev_scripts' );
    // Enqueue the javascript files

    // wp_enqueue_script('assurer-dev-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true );


    wp_enqueue_script('assurer_dev-main-js',get_template_directory_uri() . '/assets/js/main.js', array('assurer_dev-aos-js','assurer_dev-purecounter_vanilla-js','assurer_dev-glightbox-js'), null, true); 
    wp_enqueue_script('assurer_dev-bootstrap-min-js',get_template_directory_uri() . '/assets/js/bootstrap/js/bootstrap.bundle.min.js', array(), null, true); 
    wp_enqueue_script('assurer_dev-aos-js',get_template_directory_uri() . '/assets/js/aos/aos.js', array(), null, true);
    wp_enqueue_script('assurer_dev-purecounter_vanilla-js',get_template_directory_uri() . '/assets/js/purecounter/purecounter_vanilla.js', array(), null, true);      
    wp_enqueue_script('assurer_dev-glightbox-js',get_template_directory_uri() . '/assets/js/glightbox/js/glightbox.min.js', array(), null, true);
    wp_enqueue_script('assurer_dev-swiper-js',get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.js', array(), null, true);    
    wp_enqueue_script('assurer_dev-imagesloaded-js',get_template_directory_uri() . '/assets/js/imagesloaded/imagesloaded.pkgd.min.js', array(), null, true); 
    wp_enqueue_script('assurer_dev-isotope-js',get_template_directory_uri() . '/assets/js/isotope-layout/isotope.pkgd.min.js', array(), null, true);         

add_action( 'wp_enqueue_script','assurerdev_scripts' );

register_nav_menus(
    array(
        'main_menu' => 'Main Menu'
    )
    );


function assurerdev_them_support(){

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

}

add_action( 'after_setup_theme','assurerdev_them_support' );

function assurerdev_custom_logo_setup(){
    $defaults = array(
                'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,

    );
    add_theme_support('custom-logo', $defaults);

}

add_action( 'after_setup_theme','assurerdev_custom_logo_setup');


function assurerdev_sidebars(){
    register_sidebar(
        array(
        'name'          => 'about-intro',
        'id'            => 'about-intro',
        'description'   => 'Widgets added here will appear in my custom sidebar.',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        )
    );
        register_sidebar(
        array(
        'name'          => 'About Us Left Column',
        'id'            => 'about-us-left-column',
        'description'   => 'Widgets added here will appear in my custom sidebar.',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        )
    );
            register_sidebar(
        array(
        'name'          => 'Promotion Image',
        'id'            => 'promotion-image',
        'description'   => 'Widgets added here will appear in my custom sidebar.',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        )
    );
        register_sidebar(
        array(
        'name'          => 'Promotion Text',
        'id'            => 'promotion-text',
        'description'   => 'Widgets added here will appear in my custom sidebar.',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        )
    );
        register_sidebar(
        array(
        'name'          => 'Price table one',
        'id'            => 'price-table-one',
        'description'   => 'Widgets added here will appear in my custom sidebar.',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        )
    );
}

add_action( 'widgets_init','assurerdev_sidebars' );



?> 

  