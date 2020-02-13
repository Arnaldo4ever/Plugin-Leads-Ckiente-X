<?php

function delete_plugin_database_tables(){
        global $wpdb;
        $tableArray = [   
          $wpdb->prefix . "nombretabla",
          $wpdb->prefix . "nombretabla_settings",
       ];

      foreach ($tableArray as $tablename) {
         $wpdb->query("DROP TABLE IF EXISTS $tablename");
      }
    }

    register_uninstall_hook(__FILE__, 'delete_plugin_database_tables');


if (!defined("WP_UNINSTALL_PLUGIN")) 
    exit();