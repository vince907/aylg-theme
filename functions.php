<?php

if ( ! function_exists ( 'aylg_setup') ) :
	function aylg_setup() {
		//let WordPress handle the Titles tags
		add_theme_support( 'title-tag' );
	}
endif;
add_action('after_setup_theme', 'aylg_setup');

/* ----- Register Menus ----- */

function register_aylg_menus() {
	register_nav_menus(
		array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu')
		)
		);
}
add_action('init', 'register_aylg_menus');

/* ---- Add Stylesheets ---- */

function aylg_scripts() {

	// Enqueue Main stylesheet
	wp_enqueue_style('aylg_styles', get_stylesheet_uri() );
	// Enqueue Google Fonts, Raleway
	wp_enqueue_style('aylg_google_fonts', 'https://fonts.googleapis.com/css?family=Taleway:300,400,4001,700');
}
add_action('wp_enqueue_scripts', 'aylg_scripts');

/* ---- Register widget Areas ---- */

function aylg_widget_init() {
    register_sidebar( array (
            'name' => __( 'Main Sidebar', 'aylg' ),
            'id' => 'main-sidebar',
            'description' => __( 'Widgets added here will appear in all pages using full width template', 'aylg'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
            ));
}
add_action( 'widgets_init', 'aylg_widget_init' );

/* Register fields */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_content-home',
		'title' => 'Content Home',
		'fields' => array (
			array (
				'key' => 'field_5a9691bf561ed',
				'label' => 'Content 2',
				'name' => 'content_2',
				'type' => 'text',
				'instructions' => 'Enter the content you wish to display on the Content Home page\'s second content field.',
				'default_value' => 'Random Content',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a969250561ee',
				'label' => 'Content 3',
				'name' => 'content_3',
				'type' => 'text',
				'instructions' => 'Enter the content you wish to display on the Content Home page\'s third content field.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
