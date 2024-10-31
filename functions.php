<?php

register_nav_menus( array(
    'primary' => __( 'Top primary menu', ' ultras' ),
    'secondary' => __( 'Secondary menu', ' ultras' ),
    ) );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support( 'widgets' );

function register_footer1_widget_area() {
    register_sidebar(
        array(
            'id' => 'footer-widget-area-1',
            'name' => esc_html__( 'Footer First Part', 'theme-domain' ),
            'description' => esc_html__( 'Your footer content', 'theme-domain' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );
    register_sidebar(
        array(
            'id' => 'footer-widget-area-2',
            'name' => esc_html__( 'Footer Second Part', 'theme-domain' ),
            'description' => esc_html__( 'Your footer content', 'theme-domain' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );
}
add_action( 'widgets_init', 'register_footer1_widget_area' );

/* custome post type */

add_action('init','register_ultras_post_type',0);
function register_ultras_post_type(){
    $slider_labels=array(
        'name'=>__('Slider',' ultras'),
        'singular_name'=>__('Slider',' ultras'),
        'add_new'=>__('Add New Slider',' ultras'),
        'add_new_item'=>__('Add New Slider',' ultras'),
        'edit_item'=>__('Edit Slider',' ultras'),
        'new_item'=>__('New Slider',' ultras'),
        'view_item'=>__('View Slider',' ultras'),
        'search_item'=>__('Search Slider',' ultras'),
        'not_found'=>__('No Slider Found','ultras'),
        'not_found_in_trash'=>__('No Slider Found in Trash',' ultras'),
        'parent_item_colon'=>__('Parent Slide:',' ultras'),
        'menu_name'=>__('Slides',' ultras'),
    );

    $slider_args=[
        'labels'=>$slider_labels,
        'description'=>__('Add your home page slides', ' ultras'),
        'supports'=>array('title','thumbnail'),
        'public'=>true,
        'show_ui'=>true,
        'show_ui_menu'=>true,
        'menu_icon'=>get_stylesheet_directory_uri().'/images/slider.png',
        'show_in_nav_menu'=>true,
        'publicly_queryable'=>true,
        'exclude_from_search'=>true,
        'has_archive'=>false,
        'query_var'=>true,
        'can_export'=>true,
        'rewrite'=>true,
        'capability_type'=>'post'
    ];

    register_post_type('slider',$slider_args);
}