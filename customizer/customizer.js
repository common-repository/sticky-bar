jQuery(document).ready(function($){
    "use strict";

    wp.customize.control('wpati_sticky_bar_predefined_colors').setting.bind(function(){
        var colorSet = wp.customize.control('wpati_sticky_bar_predefined_colors').setting();
        changeColors(colorSet);
    });

    function changeColors(colorSet){
        if(colorSet == 'black'){
            wp.customize.control('wpati_sticky_bar_background_color').setting.set('#252525');
            wp.customize.control('wpati_sticky_bar_text_color').setting.set('#bbb');
            wp.customize.control('wpati_sticky_bar_link_color').setting.set('#fff');
            wp.customize.control('wpati_sticky_bar_link_hover_color').setting.set('#eee');
            wp.customize.control('wpati_sticky_bar_button_color').setting.set('#999');
            wp.customize.control('wpati_sticky_bar_button_text_color').setting.set('#fff');
            wp.customize.control('wpati_sticky_bar_hover_button_color').setting.set('#fff');
            wp.customize.control('wpati_sticky_bar_hover_button_text_color').setting.set('#999');
        } else if (colorSet == 'red') {
            wp.customize.control('wpati_sticky_bar_background_color').setting.set('#dd4b45');
            wp.customize.control('wpati_sticky_bar_text_color').setting.set('#f7e4e5');
            wp.customize.control('wpati_sticky_bar_link_color').setting.set('#f7e4e5');
            wp.customize.control('wpati_sticky_bar_link_hover_color').setting.set('#fff');
            wp.customize.control('wpati_sticky_bar_button_color').setting.set('#f7e4e5');
            wp.customize.control('wpati_sticky_bar_button_text_color').setting.set('#dd4b45');
            wp.customize.control('wpati_sticky_bar_hover_button_color').setting.set('#fff');
            wp.customize.control('wpati_sticky_bar_hover_button_text_color').setting.set('#dd4b45');
        } else if (colorSet == 'blue') {
            wp.customize.control('wpati_sticky_bar_background_color').setting.set('#25A8EF');
            wp.customize.control('wpati_sticky_bar_text_color').setting.set('#CBE5F8');
            wp.customize.control('wpati_sticky_bar_link_color').setting.set('#1E8FD8');
            wp.customize.control('wpati_sticky_bar_link_hover_color').setting.set('#CBE5F8');
            wp.customize.control('wpati_sticky_bar_button_color').setting.set('#1E8FD8');
            wp.customize.control('wpati_sticky_bar_button_text_color').setting.set('#CBE5F8');
            wp.customize.control('wpati_sticky_bar_hover_button_color').setting.set('#CBE5F8');
            wp.customize.control('wpati_sticky_bar_hover_button_text_color').setting.set('#1E8FD8');
        }
    }
});
