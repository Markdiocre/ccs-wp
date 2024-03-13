<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gcccs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DPAZWmpgrmnEP1dhdvH7jl74M7DL2vca8vuzSKeHfm0Sb7Rz0vQIA6fwe75TOsWy' );
define( 'SECURE_AUTH_KEY',  'YlTnSWLeJjaJU2xxTlqAbMC52orNGG9XbL2SCQUi9lb6CcaPC9YdJZQrObIaCrrm' );
define( 'LOGGED_IN_KEY',    'DS54Ger4cs0e0qtJGCQtjVVIqrS9j9HinhLPpamuToC3YM2JpLIwyFVzpmxx38sS' );
define( 'NONCE_KEY',        'qbHKkovY0e83PISrRvKZkAKo0FsffTzl1dNk8bpizrsZEVmiWAixRcJM8q1NexEN' );
define( 'AUTH_SALT',        'ILNymV5gYvooPv10fUwrHeZLx6wErU9ZfU760ex3icD6ZjHLt1gaJwyELpnHqx2L' );
define( 'SECURE_AUTH_SALT', 'hOY2YgdrgHb7LffsGYgdnKwPrICfIKH0cYetLJpS3bvk7AWjs644P8AIBikHM3So' );
define( 'LOGGED_IN_SALT',   'rCCOaUnDAls9laVDGLw2QRfavXxQBqW7ZgeGS5W1QWgp8oP9fhbYeBGw8o5Jbh5X' );
define( 'NONCE_SALT',       'l55sh9VoP7jWh8s8tVc0m3mAKHpiqgTWvfrhJ67LLmFU3gTyBdY2N3FN9gRdlhw5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
