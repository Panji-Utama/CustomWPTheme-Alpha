<?php
if (!function_exists('myfirsttheme_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress  
     * features.
     *
     * It is important to set up these functions before the init hook so
     * that none of these features are lost.
     *
     *  @since MyFirstTheme 1.0
     */
    function myfirsttheme_setup()
    {
        add_theme_support('automatic-feed-links');
    }
endif;
