<?php
/**
 * Plugin Name: Syntax Highlighter for Post/Page HTML Editor
 * Plugin URI: https://github.com/ArthurGareginyan/syntax-highlighter-for-postpage-html-editor
 * Description: Replaces the defaults WordPress Post/Page HTML Editor with an enhanced editor with syntax highlighting and line numbering.
 * Author: Arthur Gareginyan
 * Author URI: https://www.arthurgareginyan.com
 * Version: 2.4.1
 * License: GPL3
 * Text Domain: syntax-highlighter-for-postpage-html-editor
 * Domain Path: /languages/
 *
 * Copyright 2017 Arthur Gareginyan ( website : https://www.arthurgareginyan.com )
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this plugin. If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *               █████╗ ██████╗ ████████╗██╗  ██╗██╗   ██╗██████╗
 *              ██╔══██╗██╔══██╗╚══██╔══╝██║  ██║██║   ██║██╔══██╗
 *              ███████║██████╔╝   ██║   ███████║██║   ██║██████╔╝
 *              ██╔══██║██╔══██╗   ██║   ██╔══██║██║   ██║██╔══██╗
 *              ██║  ██║██║  ██║   ██║   ██║  ██║╚██████╔╝██║  ██║
 *              ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═╝
 *
 *   ██████╗  █████╗ ██████╗ ███████╗ ██████╗ ██╗███╗   ██╗██╗   ██╗ █████╗ ███╗   ██╗
 *  ██╔════╝ ██╔══██╗██╔══██╗██╔════╝██╔════╝ ██║████╗  ██║╚██╗ ██╔╝██╔══██╗████╗  ██║
 *  ██║  ███╗███████║██████╔╝█████╗  ██║  ███╗██║██╔██╗ ██║ ╚████╔╝ ███████║██╔██╗ ██║
 *  ██║   ██║██╔══██║██╔══██╗██╔══╝  ██║   ██║██║██║╚██╗██║  ╚██╔╝  ██╔══██║██║╚██╗██║
 *  ╚██████╔╝██║  ██║██║  ██║███████╗╚██████╔╝██║██║ ╚████║   ██║   ██║  ██║██║ ╚████║
 *   ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═══╝
 *
 */


/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Define global constants
 *
 * @since 2.2
 */
$plugin_data = get_file_data( __FILE__, array( 'name'=>'Plugin Name', 'version'=>'Version', 'text'=>'Text Domain' ) );
function SHighlighterForPPHE_define_constants( $constant_name, $value ) {
    $constant_name = 'SHPPHE_' . $constant_name;
    if ( !defined( $constant_name ) )
        define( $constant_name, $value );
}
SHighlighterForPPHE_define_constants( 'DIR', dirname( plugin_basename( __FILE__ ) ) );
SHighlighterForPPHE_define_constants( 'BASE', plugin_basename( __FILE__ ) );
SHighlighterForPPHE_define_constants( 'URL', plugin_dir_url( __FILE__ ) );
SHighlighterForPPHE_define_constants( 'PATH', plugin_dir_path( __FILE__ ) );
SHighlighterForPPHE_define_constants( 'SLUG', dirname( plugin_basename( __FILE__ ) ) );
SHighlighterForPPHE_define_constants( 'NAME', $plugin_data['name'] );
SHighlighterForPPHE_define_constants( 'VERSION', $plugin_data['version'] );
SHighlighterForPPHE_define_constants( 'TEXT', $plugin_data['text'] );
SHighlighterForPPHE_define_constants( 'PREFIX', 'SHighlighterForPPHE' );
SHighlighterForPPHE_define_constants( 'SETTINGS', 'SHighlighterForPPHE' );

/**
 * Load the plugin modules
 *
 * @since 2.2
 */
require_once( SHPPHE_PATH . 'inc/php/core.php' );
require_once( SHPPHE_PATH . 'inc/php/upgrade.php' );
require_once( SHPPHE_PATH . 'inc/php/versioning.php' );
require_once( SHPPHE_PATH . 'inc/php/enqueue.php' );
require_once( SHPPHE_PATH . 'inc/php/functional.php' );
require_once( SHPPHE_PATH . 'inc/php/page.php' );
require_once( SHPPHE_PATH . 'inc/php/messages.php' );
require_once( SHPPHE_PATH . 'inc/php/uninstall.php' );
