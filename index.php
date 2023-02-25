<?php
/**
 * Plugin Name:       Demo Plugin
 * Plugin URI:        https://example.com/plugins/demo-plugin/
 * Description:       A basic plugin built using ReactJS library.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            James Bond
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/demo-plugin/
 * Text Domain:       demo-plugin
 * Domain Path:       /languages
 *
 * @package Demo Plugin
 */

add_action( 'admin_menu', 'dp_add_menu' );

function dp_add_menu() {
	add_menu_page(
		'Demo Plugin',
		'Demo Plugin',
		'manage_options',
		'demo_plugin',
		'dp_render_page',
		'',
		'2'
	);
}


function dp_render_page() {
	include_once 'templates/page-template.php';
}

add_action( 'admin_enqueue_scripts', 'dp_add_assets' );

function dp_add_assets() {
	wp_enqueue_script( 'demo_plugin', plugin_dir_url( __FILE__ ) . 'build/main.js' );
}
