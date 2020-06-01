<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
if (file_exists(dirname(__FILE__) . '/local.php')){
	//LOCAL DATABASE SETTINGS
		define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );


}else{
	//LIVE DATABSE SETTINGS
	define( 'DB_NAME', 'roundeco_WPOZQ' );
	define( 'DB_USER', 'roundeco_WPOZQ' );
	define( 'DB_PASSWORD', 'h6?F1D3kVYB&' );
	define( 'DB_HOST', 'localhost' );
}

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lES+N4P5vE2si7r4LD7Z1zmycPO2k+RGtQMW/5+2a4KjnihpLXszLyptwGoQN6JSSOx/j71Ew0EsWHlh7o5HtQ==');
define('SECURE_AUTH_KEY',  'XL69nTMttqOhiDKY+DK5UEPpBk+CZMZQ9kuIlnx/d78HZ32MNxyWtiUSyY+ixfCJoAr2Mhz2fhDDatCk/KG8HA==');
define('LOGGED_IN_KEY',    'X1qOgpUmM79Ty5/GpinSxHe3Xcs+M5tY6dQ7o1qvjIGhP50rua9dFn4JwgbrRhPPmTdeFFIcjz8VSOqaB1gmEA==');
define('NONCE_KEY',        'UPRUzY1wOgoqkM6DxnObqqDkgsISyuIZ9i4Uji0Fk1ag8batId+oJPqT5L8r4sjsGL3MIiOHsqKkk+NWRq2bQA==');
define('AUTH_SALT',        'IGEYEJEcN1dymSqm7J/IEdu3dcbGjaJ5r4+Lj81MiMhl1lc9OeKg61t58yp9nBmyVaV6KNcecOyii1Ut+iqTkQ==');
define('SECURE_AUTH_SALT', 'iMplHOnUSNMSY5N8EhV96mDZ5ERP/NLpWWtTlQLQCHE1OWI5QSQpwHj2ORc4nQE7nQKheyvrgEQCv3wIvRehpA==');
define('LOGGED_IN_SALT',   'CAl54VJVtPF0OYfaXNJXUvj/UneCxKDKXEqmmgWxREkJ16QQmpleJSEjVfzEztg0EKQ0qrzbz35N9ZpMCrnxUw==');
define('NONCE_SALT',       'Bf7c8aodoH4QMrBqZcp8WM9Pub9BHmdKZy63UqoM0pydWrQkrsS3QUxaLV7fp5DLFCTpYOKGb4xxJaY2N0vpPw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
