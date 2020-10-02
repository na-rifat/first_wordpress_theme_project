<?php

function university_files(){
    wp_enqueue_style('main-style', get_theme_file_uri('/css/mystyle.css'));
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
   // wp_enqueue_style('bootstrap_theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css');
}
add_action('wp_enqueue_scripts', 'university_files');
function abcd_fetaures(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('sideMenuLocation', 'Side menu location');
}
add_action('after_setup_theme', 'abcd_fetaures');

?>