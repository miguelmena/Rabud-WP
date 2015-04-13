<?php
/**
 * Plugin Name: RABUD
 * Description: Permite crear formularios con la opcion de shortcode, una vez almacenados los datos del usuario, se guardan en una tabla que despliega los resultados.
 * Version: 1.0.0
 * Author: Servicios Web Moviles
 * Author URI: http://servicioswebmoviles.com
 * Text Domain: Servicios Web Móviles
 */

// PREFIJO DEL PLUGIN: rabud_

/* Funcion para agregar CSS
function rabud_style()
{
	wp_register_style( 'rabud_style', plugins_url( '/css/bootstrap.css', __FILE__ ) );
	wp_enqueue_style( 'rabud_style' );
}
add_action( 'wp_print_styles', 'rabud_style' );
// Funcion para agregar JavaScript
function rabud_js()
{
	wp_register_script( 'rabud_js', plugins_url( '/js/bootstrap.js', __FILE__ ) );
	wp_enqueue_script( 'rabud_js' );
}
add_action( 'wp_enqueue_scripts', 'rabud_js' );*/

// ******* AGREGANDO EL ACORTADOR DE SLUG *******
function url_slug_js() {
    echo '<script type="text/javascript" src="'.plugins_url().'/rabud-wp/js/url-slug.js"></script>';
}
add_action('admin_head', 'url_slug_js');

// ******* AGREGANDO CSS PARA PANEL ADMIN *******
function rabud_setup_panel() {
	echo '<link rel="stylesheet" href="'.plugins_url().'/rabud-wp/css/admin.css" type="text/css" />';
}
add_action('admin_head', 'rabud_setup_panel');

// ******* REGISTRANDO ACTIVACION DEL PLUGIN *******
function rabud_activate() {
	global $wpdb;
	$wpdb->query('CREATE TABLE IF NOT EXISTS ' . $wpdb->prefix . 'rabud_users ( `id` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY , `rabud_form` VARCHAR(25), `rabud_firstname` VARCHAR(50), `rabud_lastname` VARCHAR(50), `rabud_email` VARCHAR(100), `rabud_phone` VARCHAR(25), `rabud_cellphone` VARCHAR(25), `rabud_skype` VARCHAR(25), `rabud_date` DATE );');
	$wpdb->query('CREATE TABLE IF NOT EXISTS ' . $wpdb->prefix . 'rabud_forms ( `id` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY , `rabud_name` VARCHAR(25), `rabud_shortcode` VARCHAR(25), `rabud_style` VARCHAR(25), `rabud_label_firstname` VARCHAR(5), `rabud_label_lastname` VARCHAR(5), `rabud_label_phone` VARCHAR(5), `rabud_label_cellphone` VARCHAR(5), `rabud_label_skype` VARCHAR(5), `rabud_redirect` VARCHAR(5), `rabud_url` VARCHAR(250), `rabud_send_email` VARCHAR(5), `rabud_subject` VARCHAR(250), `rabud_message` VARCHAR(1000), `rabud_creation` DATE, `rabud_views` VARCHAR(10), `rabud_unique_views` VARCHAR(10), `rabud_optins` VARCHAR(10) );');
	add_option('rabud_tables', false);
}
register_activation_hook(__FILE__, 'rabud_activate');

// ******* REGISTRANDO DESINSTALACION DEL PLUGIN *******
function rabud_uninstall() {
	global $wpdb;
	$wpdb->query('DROP TABLE `'.$wpdb->prefix.'rabud_users`');
	$wpdb->query('DROP TABLE `'.$wpdb->prefix.'rabud_forms`');
	delete_option('rabud_tables');
}
register_uninstall_hook(__FILE__, 'rabud_uninstall');


// ******* ADMIN MENU *******
add_action( 'admin_menu', 'rabud_adminmenu' );
function rabud_adminmenu(){
	add_menu_page( 'RABUD', 'RABUD', 'administrator', 'rabud_setup', 'rabud_setup', 'dashicons-groups', 6 );
}
function rabud_setup(){
	require "setupPanel.php";
}

// ******* AGREGANDO SHORTCODE [rabud_form name=""] ******* 
function rabud_form( $atts ) {
	ob_start();
	shortcode_atts( array(
		'name' => '',
	), $atts );
	require ('shortcodes.php');
	return ob_get_clean();
}
add_shortcode( 'rabud_form', 'rabud_form' );