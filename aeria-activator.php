<?php
/*
Plugin Name: Aeria Activator
Plugin URI: https://github.com/CaffeinaLab/aeria
Description: Ensures Aeria Framework is activated
Author: Caffeina
Author URI: http://caffeina.it
Version: 1.0.0
*/

// Ensure Aeria is activated
if (is_admin()){
  $aeria_plugin_path = dirname(__DIR__).'/plugins/aeria/aeria.php';
  $active_plugins = get_option('active_plugins');
  if (empty($active_plugins[$aeria_plugin_path])) {
    if (is_dir(ABSPATH .'/wp-admin/includes/plugin.php')){
      require_once(ABSPATH .'/wp-admin/includes/plugin.php');
      activate_plugin($aeria_plugin_path);
    }
  }
}
