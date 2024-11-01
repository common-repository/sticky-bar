<?php

$wp_customize->add_setting('wpati_sticky_bar_predefined_colors', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
    'default'       => 'red'
));
$wp_customize->add_control('wpati_sticky_bar_predefined_colors', array(
    'type'      => 'select',
    'section'   => 'wpati_sticky_bar_colors_section',
    'label'     => 'Predefined Color Options',
    'choices'   => array(
        'red' => 'Heavy Red',
        'blue'  => 'Sky Blue',
        'black'  => 'Deep Black'
    )
));


$wp_customize->add_setting('wpati_sticky_bar_background_color', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
    'default'       => '#dd4b45'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpati_sticky_bar_background_color', array(
    'label' => 'Background Color',
    'section'   => 'wpati_sticky_bar_colors_section'
)));


$wp_customize->add_setting('wpati_sticky_bar_text_color', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
    'default'       => '#f7e4e5'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpati_sticky_bar_text_color', array(
    'label' => 'Text Color',
    'section'   => 'wpati_sticky_bar_colors_section'
)));


$wp_customize->add_setting('wpati_sticky_bar_link_color', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
    'default'       => '#f7e4e5'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpati_sticky_bar_link_color', array(
    'label' => 'Content Link Color',
    'section'   => 'wpati_sticky_bar_colors_section'
)));


$wp_customize->add_setting('wpati_sticky_bar_link_hover_color', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
    'default'       => '#fff'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpati_sticky_bar_link_hover_color', array(
    'label' => 'Content Link Hover Color',
    'section'   => 'wpati_sticky_bar_colors_section'
)));


$wp_customize->add_setting('wpati_sticky_bar_button_color', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
    'default'       => '#f7e4e5'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpati_sticky_bar_button_color', array(
    'label' => 'Button Color',
    'section'   => 'wpati_sticky_bar_colors_section'
)));


$wp_customize->add_setting('wpati_sticky_bar_button_text_color', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
    'default'       => '#dd4b45'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpati_sticky_bar_button_text_color', array(
    'label' => 'Button Text Color',
    'section'   => 'wpati_sticky_bar_colors_section'
)));


$wp_customize->add_setting('wpati_sticky_bar_hover_button_color', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
    'default'       => '#fff'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpati_sticky_bar_hover_button_color', array(
    'label' => 'Button Hover Color',
    'section'   => 'wpati_sticky_bar_colors_section'
)));


$wp_customize->add_setting('wpati_sticky_bar_hover_button_text_color', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
    'default'       => '#dd4b45'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpati_sticky_bar_hover_button_text_color', array(
    'label' => 'Button Hover Text Color',
    'section'   => 'wpati_sticky_bar_colors_section'
)));
