<?php  /*  boxinfo */

function boxinfo_register() {

    $labels = array(
        'name' => _x('Card Maker', 'post type general name'),
        'singular_name' => _x('boxinfo', 'post type singular name'),
        'add_new' => _x('Agregar Card', 'slideshow_two item'),
        'add_new_item' => __('Agregar Card'),
        'edit_item' => __('Editar Card'),
        'new_item' => __('Nueva Card'),
        'view_item' => __('Ver el Card'),
        'search_items' => __('Buscar Card'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-grid-view',
        'hierarchical' => false,
        'menu_position' => null,
        /*'taxonomies'	=> array( 'categoria-boxinfo', 'etiqueta-boxinfo', ), */
        'supports' => array('title'),
        'rewrite' => array('slug' => 'boxinfo', 'with_front' => false)
      ); 

    register_post_type( 'boxinfo' , $args );
}

add_action('init', 'boxinfo_register');