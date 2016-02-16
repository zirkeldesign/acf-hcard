<?php
/*
Plugin Name: Advanced Custom Fields: vCard
Plugin URI: https://github.com/zirkeldesign/acf-vcard
Description: Add vCard to Advanced Custom Fields
Version: 1.0.0
Author: Daniel Sturm
Author URI: https://zirkeldesign.de/sturm
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain('acf-vcard', false, dirname(plugin_basename(__FILE__)).'/lang/');

// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_vcard($version)
{
    include_once 'acf-vcard-v5.php';
}

add_action('acf/include_field_types', 'include_field_types_vcard');

// 3. Include field type for ACF4
function register_fields_vcard()
{
    include_once 'acf-vcard-v4.php';
}

add_action('acf/register_fields', 'register_fields_vcard');

/* end of file acf-vcard.php */
