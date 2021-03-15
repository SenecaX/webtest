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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webtest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0s1Q)>(MAk9y>$Bq-&*A;1OroR$kwD?ka2s>|Vnhjh9ZIGWG5_jI[5:/dA4cTROk' );
define( 'SECURE_AUTH_KEY',  'fWj$.s;|+6.3wY}o@|3/:x=u}OM,.aObLL>xg2O,)5eW/Gg`M,L^(DGHk&k3KPiE' );
define( 'LOGGED_IN_KEY',    '-2-By3+(Fv&T5q+/>udj/YNfXw:<I[>Jh8othX!ns?I6EwoUdq2hT05+xw{~^#$^' );
define( 'NONCE_KEY',        'g-|+oDvxlt16/x+].yV-CL!D?0?(U9!><|-cqdE%!7akDMWX2(;EqlbeI=la|Sd#' );
define( 'AUTH_SALT',        'f~<&d6(3N6:0^3m3=.GI7R/5E/?ZRH;37xcH&WKwm?ZKdqm>?A+(WQ7j}Ea(u%y9' );
define( 'SECURE_AUTH_SALT', 'Eo3.XoEBS%p/:s#h%^M!]gT)|G_5Wh8_ac+uX?A8}r~`xn{9ZtAm8ag$)TGbOEtK' );
define( 'LOGGED_IN_SALT',   ':/05? wrH mT@Yj]slsbHxTOmQDmy IDC!Va1M0B8zIx/b?a]]9WFt|f&{W+uNz8' );
define( 'NONCE_SALT',       '0V9$rh^*,-I<=f5qF|IG#$*RQIxZfbhu7?5vR88VjP8IfLO$c7%WPo3m1kO4S5|[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

define('FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
