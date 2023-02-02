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

//Imagenes destacadas o Thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );

}

//Sidebar

add_action( 'widgets_init', 'singles_sidebars' );
function singles_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'lateral',
			'name'          => __( 'Sidebar lateral' ),
			'description'   => __( 'Un sidebar para agregar widgets' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

?>