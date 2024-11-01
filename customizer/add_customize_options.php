<?php
function wpati_sticky_bar_customizer($wp_customize){
    $wp_customize->add_panel('wpati_sticky_bar_panel', array(
        'title'         => 'Sticky Bar',
        'priority'      => 160
    ));


    $wp_customize->add_section('wpati_sticky_bar_content_section', array(
        'title'         => 'Content',
        'capability'    => 'edit_theme_options',
        'panel'         => 'wpati_sticky_bar_panel',
        'priority'      => 10
    ));
    require('content.php');

    $wp_customize->add_section('wpati_sticky_bar_display_section', array(
        'title'         => 'Display Rules',
        'capability'    => 'edit_theme_options',
        'panel'         => 'wpati_sticky_bar_panel',
        'priority'      => 20
    ));
    require('display.php');

    $wp_customize->add_section('wpati_sticky_bar_colors_section', array(
        'title'         => 'Colors',
        'capability'    => 'edit_theme_options',
        'panel'         => 'wpati_sticky_bar_panel',
        'priority'      => 30
    ));
    require('colors.php');

    $wp_customize->add_section('wpati_sticky_bar_animation_section', array(
        'title'         => 'Animations',
        'capability'    => 'edit_theme_options',
        'panel'         => 'wpati_sticky_bar_panel',
        'priority'      => 40
    ));
    require('animations.php');
}
add_action('customize_register', 'wpati_sticky_bar_customizer');

function wpati_customizer_javascript(){
    global $WPATI_DIR_URL;
    
    wp_enqueue_script('wpati_customizer_js', $WPATI_DIR_URL.'/customizer/customizer.js', array(), false, true);
}
add_action( 'customize_controls_enqueue_scripts', 'wpati_customizer_javascript' );
