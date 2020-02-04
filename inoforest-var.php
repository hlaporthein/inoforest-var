<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Forbidden' ); }
/**
 * Plugin Name: Var dumper
 * Plugin URI: http://hlaporthein.me
 * Description: Inoforest WordPress Nonce Var Dumper in Synfony
 * Version: 1.0
 * Author: Hla Por Thein
 * Author URI: http://hlaporthein.me
 * License: GPL2+
 * Text Domain: vd
 */


if ( file_exists( plugin_dir_path(__FILE__) . 'vendor/autoload.php' ) ) {

    require plugin_dir_path(__FILE__) . 'vendor/autoload.php';

} else {

    /**
     * Show message to install composer
     */
    add_action('wp_footer', function(){
        echo fnm_show_message("Need to install composer in inoforest var plugin.");
    });

}