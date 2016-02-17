<?php
/*
Plugin Name: Advanced Custom Fields: hCard
Plugin URI: https://github.com/zirkeldesign/acf-hcard
Description: Add hCard to Advanced Custom Fields
Version: 1.0.0
Author: Daniel Sturm
Author URI: https://zirkeldesign.de/sturm
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain('acf-hcard', false, dirname(plugin_basename(__FILE__)).'/lang/');

// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_hcard($version)
{
    include_once 'acf-hcard-v5.php';
}

add_action('acf/include_field_types', 'include_field_types_hcard');

// 3. Include field type for ACF4
function register_fields_hcard()
{
    include_once 'acf-hcard-v4.php';
}

add_action('acf/register_fields', 'register_fields_hcard');

/* end of file acf-hcard.php */
