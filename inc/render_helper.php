<?php

function wpati_sticky_bar_render_title(){
    if(get_option('wpati_sticky_bar_title') && get_option('wpati_sticky_bar_title') != ''){
        return '<h3>'.get_option('wpati_sticky_bar_title').'</h3>';
    }
}

function wpati_sticky_bar_render_content(){
    return '<p>'.get_option('wpati_sticky_bar_content').'</p>';
}

function wpati_sticky_bar_render_button(){
    if(get_option('wpati_sticky_bar_activate_button')){
        return '<a href="'.get_option('wpati_sticky_bar_button_link').'" class="button">'.get_option('wpati_sticky_bar_button_label').'</a>';
    }
}

function wpati_sticky_bar_render_close_button(){
    if(get_option('wpati_sticky_bar_activate_close')){
        return '<a href="#" class="button wsb-close-button wsb-close-bar">'.get_option('wpati_sticky_bar_close_label').'</a>';
    }
}
