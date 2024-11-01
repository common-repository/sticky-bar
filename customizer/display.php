<?php

$wp_customize->add_setting('wpati_sticky_bar_active', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_bar_active', array(
    'type'      => 'checkbox',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_display_section',
    'label'     => 'Show sticky bar',
    'choices'   => array(
        'Yes' => 'true',
        'No'  => 'false'
    ),
));


$wp_customize->add_setting('wpati_sticky_bar_location', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
    'default'       => 'bottom: 0;'
));
$wp_customize->add_control('wpati_sticky_bar_location', array(
    'type'      => 'radio',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_display_section',
    'label'     => 'Where do you want to show bar?',
    'choices'   => array(
        'top: 0;' => 'Top',
        'bottom: 0;'  => 'Bottom'
    ),
));


$wp_customize->add_setting('wpati_sticky_bar_after_close', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
    'default'       => 'show'
));
$wp_customize->add_control('wpati_sticky_bar_after_close', array(
    'type'      => 'radio',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_display_section',
    'label'     => 'After sticky bar is closed',
    'choices'   => array(
        'show' => 'Keep showing again',
        'hide'  => 'Don\'t show for this number of days;'
    ),
));

$wp_customize->add_setting('wpati_sticky_bar_after_close_days', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_bar_after_close_days', array(
    'type'      => 'number',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_display_section',
));
