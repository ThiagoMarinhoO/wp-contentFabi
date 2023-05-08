<?php

function cpt_depoimentos() {
    $labels = array(
        'name'               => 'Depoimentos',
        'singular_name'      => 'Depoimento',
        'menu_name'          => 'Depoimentos',
        'name_admin_bar'     => 'Depoimentos',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo Depoimento',
        'new_item'           => 'Novo Depoimento',
        'edit_item'          => 'Editar Depoimento',
        'view_item'          => 'Visualizar Depoimento',
        'all_items'          => 'Todos os Depoimentos',
        'search_items'       => 'Procurar Depoimentos',
        'parent_item_colon'  => 'Depoimentos pai:',
        'not_found'          => 'Nenhum Depoimento encontrado.',
        'not_found_in_trash' => 'Nenhum Depoimento encontrado na Lixeira.'
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'depoimentos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );
    
    register_post_type( 'depoimentos', $args );
}
add_action( 'init', 'cpt_depoimentos' );


// Registrar uma Taxonomia "Categorias" para o CPT "Depoimentos"
function taxonomia_categorias() {
    $labels = array(
        'name'              => 'Categorias',
        'singular_name'     => 'Categoria',
        'search_items'      => 'Procurar Categorias',
        'all_items'         => 'Todas as Categorias',
        'parent_item'       => 'Categoria pai',
        'parent_item_colon' => 'Categoria pai:',
        'edit_item'         => 'Editar Categoria',
        'update_item'       => 'Atualizar Categoria',
        'add_new_item'      => 'Adicionar nova Categoria',
        'new_item_name'     => 'Nova Categoria'
    );
    
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categorias' )
    );
    
    register_taxonomy( 'categorias', 'depoimentos', $args );
}
add_action( 'init', 'taxonomia_categorias' );