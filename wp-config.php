<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'blogwebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '*=KP]XlzQ LlE#a;Vd,=yE!/;pq6e7C[Iw2ty:fk>?8n#r/l8=+n,dw[PPOQ>b%T' );
define( 'SECURE_AUTH_KEY',  'Oi[eROz4ZNq&|(aOwDC_ Pa-D^RY1m^Qz*.alUyi.uV :Qg$.0weFmA<i|roL6`X' );
define( 'LOGGED_IN_KEY',    'gz.-(YO<MqRzS?}E9G|i5ve0Chb-!tl:>3P5=uN];wg]r!Ve{/Kyn!Y1Yncg@Y[I' );
define( 'NONCE_KEY',        'zx;EZ+zmgHcLuxpKvk3(u-L!|g3bRYCJD``xqM<A%FhdLFa?j?N9m[n6[cZA!yRN' );
define( 'AUTH_SALT',        '~v3.m-M<KdhwIk^{M|OUnBDpK;$6_]W8Z}&#)I<sU5ogI1ZlSL>!#@= :QuBljKt' );
define( 'SECURE_AUTH_SALT', '4JjK6(?gB4T}]Ls`&0hf`~ZA+$w@NtiXge1f J!=Y,R?&lgIv9Z^#$7Npyp;At$u' );
define( 'LOGGED_IN_SALT',   'l?aex%|J}Tr|0eLyOdoT|Rm%Unt`v/ziD;gadDv#L^J2;@TM3 C*au4eoCkUb] G' );
define( 'NONCE_SALT',       '3ZP<TC[,l;-WX5^GF.5tC5_Kz,H8WfSlkQ3D{^R}Wk4l4y42hAHeTHPbC|jO][I[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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
