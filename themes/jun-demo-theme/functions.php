<?php

/*-------------------------------------------------------------
Enqueue Styles
-------------------------------------------------------------*/

if(!function_exists('jundemo_styles')) :

    function jundemo_styles() {
        wp_enqueue_style( 'jundemo-styles', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
    }

endif;

add_action( 'wp_enqueue_scripts', 'jundemo_styles');