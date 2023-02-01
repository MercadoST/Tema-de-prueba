<?php
//Creacion del Menú
if (function_exists('register_nav_menus')){
    register_nav_menus(array('navegacion' => 'Menú principal superior'));
}

//<a> (Clase)
add_filter('nav_menu_link_attributes', 'clase_menu_navegacion', 10, 3);

function clase_menu_navegacion($atts, $menu_item, $args){
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}

?>