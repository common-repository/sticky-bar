<?php

$wp_customize->add_setting('wpati_sticky_opening_animation', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_opening_animation', array(
    'type'      => 'radio',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_animation_section',
    'label'     => 'Choose opening animation',
    'choices'   => array(
        'without' => 'Without Animation',
        'fade'  => 'Fade',
        'slide'  => 'Slide',
    ),
));


$wp_customize->add_setting('wpati_sticky_opening_delay', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_opening_delay', array(
    'type'      => 'number',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_animation_section',
    'label'     => 'Openning delay as seconds. (leave empty for immediate)'
));


$wp_customize->add_setting('wpati_sticky_closing_animation', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_closing_animation', array(
    'type'      => 'radio',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_animation_section',
    'label'     => 'Choose closing animation',
    'choices'   => array(
        'without' => 'Without Animation',
        'fade'  => 'Fade',
        'slide'  => 'Slide',
    ),
));
