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

add_theme_support('post-thumbnails')

?> 

  