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
define( 'DB_NAME', 'newpro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'samm' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define( 'ICL_LANGUAGE_CODE', '' );





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
define( 'AUTH_KEY',         '/O`#|WbOT7dZs7u`<$nw60Cs[/sP(@t{`v|0}ZE$4n%0l|w}Ov7bi5l!lUl?9c^j' );
define( 'SECURE_AUTH_KEY',  'w^nDe]m}6KEMup5O/WK*Cg5(U#lYu-|=:QZ#OB#MXK^vL.Ue:!`(?F26*NI?=P^Z' );
define( 'LOGGED_IN_KEY',    'W_=bs*q|>w`oMiUx5sp3#s5vTZBXD5ZtAJIS]Uz=_;~gS IB7=GLe3ULb,E{,.*R' );
define( 'NONCE_KEY',        'DISGf*.7BVw<#?!;_[g_C2+.qx2?|MzVmvI~U<>>VG/M:ZbG1jTp*k[au[zTveF:' );
define( 'AUTH_SALT',        'L]%Yow?1c)B(NR+#b1qTnX{D77Gt;WeMkv0i)QozEw4kog!2e)VRy{x2TZ]%/i2#' );
define( 'SECURE_AUTH_SALT', '<h>N8l6qDc8>pMkDwTHyXaig1I.ct@uuDBEK;fj,5gN/k(0 BQ]=&L^rM}mMWNLB' );
define( 'LOGGED_IN_SALT',   'x| eIWN?Df@h/q[Nu@K/si;#J.kSWwD1#t_T&+`4pxLk2]/yeFOWZ2&oueRZ[H!:' );
define( 'NONCE_SALT',       '{wB4SFE3MzN6?-K^% PfJon6}Te8:r<0rhP[u;USUpZV~`4:PKqM*/.q(mHx&PM<' );

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

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);



/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
