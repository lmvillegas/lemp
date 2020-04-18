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
define( 'DB_NAME', 'skullfor' );

/** MySQL database username */
define( 'DB_USER', 'skullfor' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SkullPass' );

/** MySQL hostname */
define( 'DB_HOST', 'mysqldb' );

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
define( 'AUTH_KEY',         'aOWceX;(})=IvvHJrX C[|fnz_+UJ+-#}>0p}GY.~UrkLlshn9E|m<sx*t53iN;u' );
define( 'SECURE_AUTH_KEY',  'K)T4S^`?:zav_vsSJ.<M;UE1Bb3gqv`sf|+dnZ/]nybJ{=GL5p2SW^ZP+SO48hg1' );
define( 'LOGGED_IN_KEY',    'Pk8s_!8.q5uu7dM3Xjkz+eZ%Oy]I88 x7r56/`7|0JZ)`e/IF~7orl!C}6=B5]V>' );
define( 'NONCE_KEY',        '>4pMSm#X@<J MA}S^Q^!k2y|B,BU/-I??ue3}X2ftX{/Uw[!#!Qm@Z`(Q%y@}jPP' );
define( 'AUTH_SALT',        '8>|x_UKp#^;MK=0RT Y$g[mx{^6o}-`4r=F0ErI&:m^fWMAv>FGOca6!=bUBme`I' );
define( 'SECURE_AUTH_SALT', 'UbPeVf@WhZYbhAeVrR-0SVCEV1OCx:7P>@&D8SCohx$f%zzPA*hzF.]V@wE`].qU' );
define( 'LOGGED_IN_SALT',   'Zn-tQ5yc=I?SGrYTx(VI-fD2NKc zU<8`o0n_avj&;J!T`BFgT7L`gP@ S4C*4cG' );
define( 'NONCE_SALT',       'JLl]6MFApegb0hv&EGz:PgZ2)~`!at#*2uXhWi]b6eFoqk@$B74&z%@4s;;Y(_jp' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
/* Multisite */
define('WP_ALLOW_MULTISITE', true);