<?php
/*
 * Plugin name: WPPP | Projects
 * Plugin URI: http://almawhoob.net
 * Author: Ahmed Al Abdulmohsen
 * Author URI: http://almawhoob.net
 * Version: 0.0.6
 * Description: WPPP is a WordPress Project Plugin.
*/

// Setting constants
define('WPPP_VERSION', 0.0); //self expanatory
//define('WPPP_PRO_MIN_VERSION', 1.0); //self expanatory
//define('WPPP_PRO_MIN_VERSION_CRITICAL', 1.0); //self expanatory
define('WPPP_DIR', dirname( __FILE__ )); //an absolute path to this directory
define('WPPP_DIR_URI', trailingslashit(plugins_url('',__FILE__))); //an absolute path to this directory
define('WPPP_SLUG', plugin_basename( __FILE__ )); //for updates


// INCLUDES
include_once('includes/basic.php');
include_once('includes/wppp_dashboard_widgets.php');
include_once('includes/wppp_custom_post_type.php');
include_once('includes/wppp_taxonomies.php');


