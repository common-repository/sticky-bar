<?php

//add assets function
function wpati_sticky_bar_assets(){
    global $WPATI_DIR_URL;

    //check for is sticky bar active and cookie
    $is_active = get_option('wpati_sticky_bar_active');
    $show = $_COOKIE['wpati_show'];
    if($is_active && $show != 'false'){
        wp_enqueue_style('wpati_sticky_bar_style', $WPATI_DIR_URL.'/sticky-bar.css');
\        wp_enqueue_script('wpati_sticky_bar_script', $WPATI_DIR_URL.'/sticky-bar.js', array('jquery'), false, true);
        require('render_assets.php');
    }
}

//render html template function
function wpati_sticky_bar_html(){
    //check for is sticky bar active and cookie
    $is_active = get_option('wpati_sticky_bar_active');
    $show = $_COOKIE['wpati_show'];
    if($is_active && $show != 'false'){
        echo '<div id="wpati_sticky_bar"><div id="wpati_sticky_bar_inner">
                '.wpati_sticky_bar_render_title().wpati_sticky_bar_render_content().wpati_sticky_bar_render_button().wpati_sticky_bar_render_close_button().'
             </div></div>';
     }
}

//Add scripts and styles if we are not in admin
if(!is_admin()){
    add_action('wp_enqueue_scripts', 'wpati_sticky_bar_assets');
    add_action('wp_footer', 'wpati_sticky_bar_html');
}
