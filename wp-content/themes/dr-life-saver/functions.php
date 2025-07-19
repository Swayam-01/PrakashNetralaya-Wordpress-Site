<?php

add_action( 'wp_enqueue_scripts', 'dr_life_saver_chld_thm_parent_css' );
function dr_life_saver_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'dr_life_saver_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );
    
}

add_filter( 'bizberg_getting_started_screenshot', function(){
    return true;
});

add_filter( 'bizberg_banner_title', 'dr_life_saver_banner_title' );
function dr_life_saver_banner_title(){
    return current_user_can( 'edit_theme_options' ) ? esc_html__( 'Martin Peterson' , 'dr-life-saver' ) : '';
}

add_action( 'after_setup_theme', 'dr_life_saver_setup_theme' );
function dr_life_saver_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}