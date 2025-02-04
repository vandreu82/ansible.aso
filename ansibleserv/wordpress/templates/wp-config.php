<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wp_user');
define('DB_PASSWORD', 'wp_password');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'random-key');
define('SECURE_AUTH_KEY',  'random-key');
define('LOGGED_IN_KEY',    'random-key');
define('NONCE_KEY',        'random-key');
define('AUTH_SALT',        'random-key');
define('SECURE_AUTH_SALT', 'random-key');
define('LOGGED_IN_SALT',   'random-key');
define('NONCE_SALT',       'random-key');

$table_prefix = 'wp_';

define('WPLANG', 'es_ES');
define('WP_DEBUG', false);
if ( !defined('ABSPATH') ) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
require_once(ABSPATH . 'wp-settings.php');
?>
