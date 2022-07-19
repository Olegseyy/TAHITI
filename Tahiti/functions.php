<?php
/**************подключение изображения в админке************/
add_action( 'after_setup_theme', 'home_setup' );
 function home_setup(){
 	add_theme_support ('post-thumbnails');
 }

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'header menu'
	] );
	register_nav_menus( [
		'header_adaptive_menu' => 'header adaptive menu'
	] );
	register_nav_menus( [
		'footer_menu_islands' => 'footer menu islands'
	] );
	register_nav_menus( [
		'footer_menu_packages' => 'footer menu packages'
	] );
	register_nav_menus( [
		'footer_menu_tahiti' => 'footer menu tahiti'
	] );
} );



add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_style( 'style-slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style( 'icons',  'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200');

	wp_enqueue_script( 'script-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );

}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function my_scripts_method() {
	wp_deregister_script('jquery');
	wp_deregister_script('jquery');

	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );

	wp_enqueue_script( 'jquery' );
}

function cptui_register_my_cpts() {
	$labels = [
		"name" => __( "islands", "custom-post-type-ui" ),
		"singular_name" => __( "island", "custom-post-type-ui" ),
	];
	$args = [
		"label" => __( "islands", "custom-post-type-ui" ),
		"menu_position" => 5,
		"menu_icon" =>'dashicons-admin-site-alt2',
		"supports" => array('title','editor','thumbnail','post-formats','excerpt'),
		"has_archive" => false,
		"public" => true,
	];

	register_post_type( "tahiti_island", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
add_action( 'widgets_init', 'register_my_widgets' );
 
function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'footer_sidebar',
		'id'            => "social_icons",
		'description'   => 'lol',
		'before_widget' => '<div class="widget %2$s link-list cf"">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n",
	) );
}

?>
