<?php
register_nav_menus( array(

    'main-menu' => 'Menu main',

) );
// register_nav_menu('main-menu', 'Menu Main');
// register_nav_menu('product-menu', 'Menu Product');
function get_menu($menu_name){
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

    return $menuitems;
}