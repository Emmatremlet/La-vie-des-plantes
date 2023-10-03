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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'zS8wdc04opZLpClLFpZdtmr02x5kVND8edW0HYjQAKmI+3xC96kPFwgjDIdCmv+isiN29XlpyAiax/Qh2/HIMw==');
define('SECURE_AUTH_KEY',  'jqpxDp6lOS+QAXd82qMGVdscEw+zngpP4qFAgNhWeaEke/xHPmT8jPecUOiUJJ4/SvGpXCwxAxcg+yaqY4kZfw==');
define('LOGGED_IN_KEY',    'q7RxYkTjcU5K4OZU/2JmLispSTlLw2Qmzf3GES6x5RUEdEqQky09eZrgl7ud0WdlakMuZRAQtRkvPzUvCpQYgg==');
define('NONCE_KEY',        'RPoJvah8yz6lQkPjLmH7wlTJYCgSVW3W/oY5ib7cSmGkL9fXXZSBQSuD9zEkYt63FVFMgnJObGKe0Cvj6B7RQQ==');
define('AUTH_SALT',        'XlAoiu8i/ZaD9JQcPxKlvvsiStkaczTDJYl8wyPY2OdD4skgUzmEfFQbNrI+QKDmY9W8AVwrCDk1mff2fmCEbw==');
define('SECURE_AUTH_SALT', 'BWmYABxKhySV2nLHks+F1MkoIs8hdOleXALaXCrNNZOSegO+wrcdZLYQfNCfWQiD15TAG4ysABuYilT0+Id6hg==');
define('LOGGED_IN_SALT',   'yHcDlJ1hvSSW9hOHO5RZndkD5ZHuCgUxqMECz7YPBAbfXmMOXfHxTfHe8OxAKKd5GQYOQSvbLgt3Kem5qQTAsg==');
define('NONCE_SALT',       'BX4c1sf7C/0ttF0/f1EUxJGGZhDJV6+JBji/NhIhh+Q5z1jbNyMLHKa8IuL6vXd9m0t/tSslyJHtfiOYZMNehQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
