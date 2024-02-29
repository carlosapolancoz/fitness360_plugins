<?php
/*
    Plugin Name: Fitness360 - Post Types
    Plugin URI: http://www.carlosapolancoz.com/
    Description: Añade Post Types al sitio Fitness360
    Version: 1.0.0
    Author: Carlos Andres Polanco Zevallos
    Author URI: http://www.carlosapolancoz.com/
    Text Domain: fitness360
*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function fitness360_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'fitness360' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'fitness360' ),
		'menu_name'             => __( 'Clases', 'fitness360' ),
		'name_admin_bar'        => __( 'Clase', 'fitness360' ),
		'archives'              => __( 'Archivo', 'fitness360' ),
		'attributes'            => __( 'Atributos', 'fitness360' ),
		'parent_item_colon'     => __( 'Clase Padre', 'fitness360' ),
		'all_items'             => __( 'Todas Las Clases', 'fitness360' ),
		'add_new_item'          => __( 'Agregar Clase', 'fitness360' ),
		'add_new'               => __( 'Agregar Clase', 'fitness360' ),
		'new_item'              => __( 'Nueva Clase', 'fitness360' ),
		'edit_item'             => __( 'Editar Clase', 'fitness360' ),
		'update_item'           => __( 'Actualizar Clase', 'fitness360' ),
		'view_item'             => __( 'Ver Clase', 'fitness360' ),
		'view_items'            => __( 'Ver Clases', 'fitness360' ),
		'search_items'          => __( 'Buscar Clase', 'fitness360' ),
		'not_found'             => __( 'No Encontrado', 'fitness360' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'fitness360' ),
		'featured_image'        => __( 'Imagen Destacada', 'fitness360' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'fitness360' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'fitness360' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'fitness360' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'fitness360' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'fitness360' ),
		'items_list'            => __( 'Lista de Clases', 'fitness360' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'fitness360' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'fitness360' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'fitness360' ),
		'description'           => __( 'Clases para el Sitio Web', 'fitness360' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'fitness360_clases', $args );

}
add_action( 'init', 'fitness360_clases_post_type', 0 );

function fitness360_instructores_post_type() {

	$labels = array(
		'name'                  => _x( 'Instructores', 'Post Type General Name', 'fitness360' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'fitness360' ),
		'menu_name'             => __( 'Instructores', 'fitness360' ),
		'name_admin_bar'        => __( 'Instructor', 'fitness360' ),
		'archives'              => __( 'Archivo', 'fitness360' ),
		'attributes'            => __( 'Atributos', 'fitness360' ),
		'parent_item_colon'     => __( 'Instructor Padre', 'fitness360' ),
		'all_items'             => __( 'Todas Las Instructores', 'fitness360' ),
		'add_new_item'          => __( 'Agregar Instructor', 'fitness360' ),
		'add_new'               => __( 'Agregar Instructor', 'fitness360' ),
		'new_item'              => __( 'Nueva Instructor', 'fitness360' ),
		'edit_item'             => __( 'Editar Instructor', 'fitness360' ),
		'update_item'           => __( 'Actualizar Instructor', 'fitness360' ),
		'view_item'             => __( 'Ver Instructor', 'fitness360' ),
		'view_items'            => __( 'Ver Instructores', 'fitness360' ),
		'search_items'          => __( 'Buscar Instructor', 'fitness360' ),
		'not_found'             => __( 'No Encontrado', 'fitness360' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'fitness360' ),
		'featured_image'        => __( 'Imagen Destacada', 'fitness360' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'fitness360' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'fitness360' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'fitness360' ),
		'insert_into_item'      => __( 'Insertar en Instructor', 'fitness360' ),
		'uploaded_to_this_item' => __( 'Agregado en Instructor', 'fitness360' ),
		'items_list'            => __( 'Lista de Instructores', 'fitness360' ),
		'items_list_navigation' => __( 'Navegación de Instructores', 'fitness360' ),
		'filter_items_list'     => __( 'Filtrar Instructores', 'fitness360' ),
	);
	$args = array(
		'label'                 => __( 'Instructores', 'fitness360' ),
		'description'           => __( 'Instructores para el Sitio Web', 'fitness360' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instructores', $args );

}
add_action( 'init', 'fitness360_instructores_post_type', 0 );

function fitness360_testimoniales_post_type() {
	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'fitness360' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'fitness360' ),
		'menu_name'             => __( 'Testimoniales', 'fitness360' ),
		'name_admin_bar'        => __( 'Testimonial', 'fitness360' ),
		'archives'              => __( 'Archivo', 'fitness360' ),
		'attributes'            => __( 'Atributos', 'fitness360' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'fitness360' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'fitness360' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'fitness360' ),
		'add_new'               => __( 'Agregar Testimonial', 'fitness360' ),
		'new_item'              => __( 'Nueva Testimonial', 'fitness360' ),
		'edit_item'             => __( 'Editar Testimonial', 'fitness360' ),
		'update_item'           => __( 'Actualizar Testimonial', 'fitness360' ),
		'view_item'             => __( 'Ver Testimonial', 'fitness360' ),
		'view_items'            => __( 'Ver Testimoniales', 'fitness360' ),
		'search_items'          => __( 'Buscar Testimonial', 'fitness360' ),
		'not_found'             => __( 'No Encontrado', 'fitness360' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'fitness360' ),
		'featured_image'        => __( 'Imagen Destacada', 'fitness360' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'fitness360' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'fitness360' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'fitness360' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'fitness360' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'fitness360' ),
		'items_list'            => __( 'Lista de Testimoniales', 'fitness360' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'fitness360' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'fitness360' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'fitness360' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'fitness360' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );
}
add_action( 'init', 'fitness360_testimoniales_post_type', 0 );