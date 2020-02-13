<?php
function crear_tabla() {
global $wpdb;

$crear_name=$wpdb->prefix ."nombretabla";

$crear_query="CREATE TABLE $crear_name(
  id int(10) NOT NULL AUTO_INCREMENT,
  Nombre varchar (100) DEFAULT '',
  Apellido varchar (100) DEFAULT '',
  PRIMARY KEY (id)
)";

require_once(ABSPATH ."wp-admin/includes/upgrade.php");
dbDelta($crear_query);
}

function crear_tabla_settings() {
global $wpdb;

$crear_name=$wpdb->prefix ."nombretabla_settings";

$crear_query="CREATE TABLE $crear_name(
  id int(1) NOT NULL,
  logo varchar (100) DEFAULT '',
  texto varchar (1000) DEFAULT '',
  PRIMARY KEY (id)
)";

require_once(ABSPATH ."wp-admin/includes/upgrade.php");
dbDelta($crear_query);
}

function insertar_data_settings() {
  global $wpdb;
  $table_name=$wpdb->prefix.'nombretabla_settings';

  //Toma los datos
  $var_id= '1';
  $var_logo='https://arnaldocarrizales.com.ve/sitiotec/imagenes/logo-sitiotec.png';
  $var_texto='Prueba para GradiWeb';

  //Ingresa los datos

  $wpdb->insert($table_name,
                array(
                    'id'=>$var_id,
                    'logo'=>$var_logo,
                    'texto'=>$var_texto
                ),
                array(
                    '%s',
                    '%s',
                    '%s'
                )
      
  );
  }