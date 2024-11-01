<?php

$wp_customize->add_setting('wpati_sticky_bar_title', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_bar_title', array(
    'type'      => 'text',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_content_section',
    'label'     => 'Bar Title'
));


$wp_customize->add_setting('wpati_sticky_bar_content', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_bar_content', array(
    'type'      => 'textarea',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_content_section',
    'label'     => 'Bar Content'
));


$wp_customize->add_setting('wpati_sticky_bar_activate_button', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_bar_activate_button', array(
    'type'      => 'checkbox',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_content_section',
    'label'     => 'I want to use CTA button.'
));


$wp_customize->add_setting('wpati_sticky_bar_button_label', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_bar_button_label', array(
    'type'      => 'text',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_content_section',
    'label'     => 'Button Text'
));


$wp_customize->add_setting('wpati_sticky_bar_button_link', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_bar_button_link', array(
    'type'      => 'text',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_content_section',
    'label'     => 'Button Link'
));


$wp_customize->add_setting('wpati_sticky_bar_activate_close', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_bar_activate_close', array(
    'type'      => 'checkbox',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_content_section',
    'label'     => 'I want to use close button.'
));

$wp_customize->add_setting('wpati_sticky_bar_close_label', array(
    'type'          => 'option',
    'capability'    => 'edit_theme_options',
));
$wp_customize->add_control('wpati_sticky_bar_close_label', array(
    'type'      => 'text',
    'priority'  => 10,
    'section'   => 'wpati_sticky_bar_content_section',
    'label'     => 'Close Button Text'
));
