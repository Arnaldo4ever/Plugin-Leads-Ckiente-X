<?php
/*
Plugin Name: Leads Cliente X
Plugin URI: https://arnaldocarrizales.com.ve/
Description: Plugin de prueba para la empresa GrandiWeb
Version: 1.0
Author: Arnaldo Carrizales
Author URI: https://arnaldocarrizales.com.ve/
*/

if(!defined('ABSPATH')){
  define('ABSPATH', dirname(__FILE__) . '/');
}

/*Agregando la base de datos*/
include_once("conexion.php");

/*Registrar hook*/
register_activation_hook(__FILE__,"crear_tabla");
register_activation_hook(__FILE__,"crear_tabla_settings");
register_activation_hook(__FILE__,"insertar_data_settings");

/*Creando variables*/
define('plug_dir',dirname(__FILE__));
define('plug_url',plugins_url('',__FILE__));

/*Acciones*/
add_action('admin_menu','prueba_grandiweb');  //agragando menú
add_action('admin_enqueue_scripts','admin_styles'); //agregando estilos

/*Agregando estilos*/
function admin_styles() {
  wp_enqueue_style("Leads", plugin_dir_url(__FILE__) . "admin/css/estilo.css");
}

/*Agrgando menú*/
function prueba_grandiweb(){

/*Agregar menú*/
add_menu_page('Todos los leads', 'Leads Cliente X', 'manage_options','leads-cliente-x','acutions_recent_bids_list','dashicons-chart-area', 56);   

/*Sub menú Todos los leads*/
add_submenu_page(
    'leads-cliente-x',       // parent slug
    'Todos los leads',    // page title
    'Todos los leads',             // menu title
    'manage_options',           // capability
    'leads-cliente-x', // slug
    'add_front_page' // callback
); 

/*Sub menú Settings*/
add_submenu_page(
    'leads-cliente-x',       // parent slug
    'Settings',    // page title
    'Settings',             // menu title
    'manage_options',           // capability
    'settings-leads-cliente-x', // slug
    'add_front_settings' // callback
); 

}

/*Estructura de las páginas*/

function add_front_page() {
  //Agregando el código
  include_once('codigo.php');
}

function add_front_settings() {
  //Agregando el código
  include_once('settings.php');
  actualizar_wpdb();
}

/*Agregando Shortcode*/
/*Crear Shortcode para el formulario*/
function formulario_leads($atts, $content = null) {
    include_once('shortcode.php');
    insertar_data();
}
add_shortcode('formulario_leads', 'formulario_leads'); 



