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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'modulos' );

/** Database username */
define( 'DB_USER', 'modulos' );

/** Database password */
define( 'DB_PASSWORD', 'IeVj1xUmNtVxvNLy' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '?`nHz4%hV~ff84v]5[ kK%l8fG=@-JWY2 P}Z[H&v4%yI)E@D@I12v*36_F/?S P' );
define( 'SECURE_AUTH_KEY',  'oKgU)dM1SQjYt}gYXOhA+H*@OrZ^7 y 3!1/<Z:#czQqN=7b2X&g,~7G3^R[V8tE' );
define( 'LOGGED_IN_KEY',    'tM%+%J@ZSj)~cJ2]|)57})g)L@g(WppJ~vxAI^./4G&JGs6-5[66}S_{8~S},v+_' );
define( 'NONCE_KEY',        'ejR:ci/5jh[-s5-(o<Pm7t>X72?s.{},VK v(?5{!x5@;l~!zLNbX URt8T&xPxl' );
define( 'AUTH_SALT',        'q |hu,9OB%}(~P$tt!$ca1Oa/S.pcw%G~{$L0r}![tEN~vL:8!=8H3D79K>NJRcs' );
define( 'SECURE_AUTH_SALT', '.9@ZTW2z=&7_-@`UqD1~K2%)TI:#E(BdSaP4,sr.0}cC5Bz4JbrSc/fa;VK2JR]*' );
define( 'LOGGED_IN_SALT',   'NpMeZwMdO}Cp5WZGHzGs-4/.6(Oai9QY4ILjusbo@^*(^%,9Yr-ktq5h}MKg6i,_' );
define( 'NONCE_SALT',       '?XI_ak[2 DF%#Z!E#%6*pmtmVy`pT~}4?$<^6Bd=>(U5UX3&HAZqGfqnyNfIM9^)' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
