<?php
function menu_list_run($atts)
{
    $a = shortcode_atts(array(
        'menu_location_id' => 'pictures_navigation',
    ), $atts);

    $menu = wp_nav_menu([
        'theme_location' => $a['menu_location_id'],
        'echo'  => false,
    ]);

    return $menu;
}

add_shortcode('menu-list', 'menu_list_run');