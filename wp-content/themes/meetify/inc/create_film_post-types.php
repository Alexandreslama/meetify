<?php 
function ajout_custom_type_profil() {
	$post_type = "film";
$labels = array(
        'name'               => 'Profils',
        'singular_name'      => 'Profil',
        'all_items'          => 'Tous les Profils',
        'add_new'            => 'Ajouter un Profil',
        'add_new_item'       => 'Ajouter un nouveau Profil',
        'edit_item'          => "Modifier le Profil",
        'new_item'           => 'Nouveau Profil',
        'view_item'          => "Voir le Profil",
        'search_items'       => 'Chercher un Profil',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Film parent:',
        'menu_name'          => 'Profils',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-users',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

    $taxonomy = "genre";
    $object_type = array("Profil");
    $args = array(
          'label' => __( 'Genre' ),
          'rewrite' => array( 'slug' => 'genre' ),
          'hierarchical' => true,
      );
    register_taxonomy( $taxonomy, $object_type, $args );
       
    $taxonomy = "region";
    $object_type = array("Profil");
    $args = array(
          'label' => __( 'Ville' ),
          'rewrite' => array( 'slug' => 'ville' ),
          'hierarchical' => false,
      );

    register_taxonomy( $taxonomy, $object_type, $args );




}

add_action ('init', 'ajout_custom_type_profil');