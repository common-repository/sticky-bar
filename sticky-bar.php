<?php
/*
 *	Plugin Name: Wpati Sticky Bar
 *	Description: This plugin allows you to create sticky bars on your site at header or footer of the browser window. You can check options from Appearance > Customize
 *	Version: 1.0.0
 *	Author: Wpati
 *	Author URI: http://wpati.com
 *	License: GPL2
 *
*/

//constants
$WPATI_DIR_URL = plugins_url('', __FILE__);

//include files
require('customizer/add_customize_options.php');
require('inc/render_helper.php');
require('inc/render.php');
