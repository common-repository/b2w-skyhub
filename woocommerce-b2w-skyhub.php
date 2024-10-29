<?php

/**
 * Plugin Name: B2W WooCommerce
 * Plugin URI:
 * Description: Módulo oficial de integração Woocommerce -> Skyhub
 * Version: 0.2.21
 * Author: B2W
 * Author URI: https://ri.b2w.digital/
 * Text Domain: woocommerce-b2w-skyhub
 * Domain Path: /i18n/languages/
 *
 * @package WooCommerce
 */

if (!defined( 'ABSPATH')) {
    exit;
}

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

if (!defined('WC_ABSPATH')) {
    define('WC_ABSPATH', __DIR__ . DS . '..' . DS . 'woocommerce' . DS);
}

if (!defined('WC_PLUGIN_FILE')) {
    define('WC_PLUGIN_FILE', WC_ABSPATH . 'woocommerce.php');
}

include_once(__DIR__ . DS . 'vendor' . DS . 'autoload.php');
include_once(__DIR__ . DS . 'App.php');

$app = App::run();

register_activation_hook(__FILE__, array($app, 'activate'));
register_deactivation_hook(__FILE__, array($app, 'deactivate'));