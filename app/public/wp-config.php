<?php
define( 'WP_CACHE', true );
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


define('AUTH_KEY',         'hZmhtrsxgofzCgQyUIZqyHEd8AaClxkyVsWamzMGqfmTLOGzUh+xzr1mGGIK/21fYv6VmdEtR3ne6wBczQy/NA==');
define('SECURE_AUTH_KEY',  'mPAiM7vQJNl2NBDAQuHK5+Iukzc+Lou7Xm6QgMQ0Dq2r5UNh9GuNJ6qLDt716zk+Nhc04cGckpjz0w417lQc/A==');
define('LOGGED_IN_KEY',    '13IAbfh8K4dVrlAPcXSXm38jozr/DJGOtZwsbIs3Ji87/hpOmV4cQxUVxhVUnqmjJp/1EjbnUNmViusbUWWpvw==');
define('NONCE_KEY',        'lWAYrRvY8o2fsO2zuZrZOX7pEIaERNzZKOwQIbXhIplDjio/NBDty0YVI+hoinKNSuX+wOO037UpGwwiOT9wEA==');
define('AUTH_SALT',        'aB/KwABxRZrV55JM07A5QE7e+VX5ilyEvxztOozfltBNVJAavB7YnLobFjlH6HD9nbHi2mg2fg+tEwFq4wGlRw==');
define('SECURE_AUTH_SALT', '9qMKLj/7dNh/AiSrImDF2Oc51Zsr0vCDg2qzByYY9ThvmwpJohGQoD6K2XB/VsY2uTeDoJGQjL73GKU/+14lyA==');
define('LOGGED_IN_SALT',   's756vBkUUitTf/64TnSmkknOQOMOZ0Y+ih8sPQClLIqtTIzP/MpqOQNJm51PQzgSoS2a9T4aay8v/PVn9KtpJQ==');
define('NONCE_SALT',       'hvtuNojTi4nuIBvp1pbObtdK/Lu4y+8jAC1qw+bpsSOzhRfd/TRdIB73k14urrREBeA0GM97Y9WoS2Ishr2GnA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
