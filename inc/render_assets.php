<?php

function wpati_sticky_bar_custom_css_render(){
    ?>
    <style type="text/css">
        #wpati_sticky_bar{
            background: <?php echo get_option('wpati_sticky_bar_background_color', '#dd4b45'); ?>;
            color: <?php echo get_option('wpati_sticky_bar_text_color', '#f7e4e5'); ?>;
        }

        #wpati_sticky_bar p a{
            color: <?php echo get_option('wpati_sticky_bar_link_color', '#f7e4e5'); ?>;
        }

        #wpati_sticky_bar p a:hover{
            color: <?php echo get_option('wpati_sticky_bar_link_hover_color', '#fff'); ?>;
        }

        #wpati_sticky_bar a.button{
            background: <?php echo get_option('wpati_sticky_bar_button_color', '#f7e4e5'); ?>;
            color: <?php echo get_option('wpati_sticky_bar_button_text_color', '#dd4b45'); ?>;
        }

        #wpati_sticky_bar a.button:hover{
            background: <?php echo get_option('wpati_sticky_bar_hover_button_color', '#fff'); ?>;
            color: <?php echo get_option('wpati_sticky_bar_hover_button_text_color', '#dd4b45'); ?>;
        }

        #wpati_sticky_bar{
            <?php echo get_option('wpati_sticky_bar_location', 'bottom: 0;'); ?>
        }
    </style>
    <?php
}
add_action('wp_head', 'wpati_sticky_bar_custom_css_render');

function wpati_sticky_bar_js_render(){
    ?>
    <script>
        var closingAnimation = '<?php echo get_option('wpati_sticky_closing_animation', 'without'); ?>';
        var afterClose = '<?php echo get_option('wpati_sticky_bar_after_close', 'show'); ?>';
        var afterCloseDays = '<?php echo get_option('wpati_sticky_bar_after_close_days', '7'); ?>';
        var openningAnimation = '<?php echo get_option('wpati_sticky_opening_animation', 'without'); ?>';
        var openningDelay = '<?php echo get_option('wpati_sticky_opening_delay', '0'); ?>';
    </script>
    <?php
}
add_action('wp_footer', 'wpati_sticky_bar_js_render');
