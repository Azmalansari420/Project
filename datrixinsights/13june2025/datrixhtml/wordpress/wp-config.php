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
define( 'DB_NAME', 'u777636806_xHNrG' );

/** Database username */
define( 'DB_USER', 'u777636806_7yMMB' );

/** Database password */
define( 'DB_PASSWORD', 'oVHHau9hbp' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'aShc43%k8Nt50nx%L2NAX$1@97|H=rUgc+#*x<b(p`qV~10fgui4Iy,f)Tt[!dX.' );
define( 'SECURE_AUTH_KEY',   '`4y{zYmwPi.!eK!.cfo(-ZkSiW>-4hVdTdwYX5xtapaqA(_ !`Z<hf,771$j?_6a' );
define( 'LOGGED_IN_KEY',     'LP[T&%&LBWl3gmi|Svg=EIh3K[K!8,9tm.6>AygR~1>)w9<w[Q[ 3%h4_OnSs;yQ' );
define( 'NONCE_KEY',         'x/?<q$((V;h`pLfM|jV&d/eHwBSa|B.0/RZuU=ke5]b_T0!Vo6- O5Yet9?+SP?2' );
define( 'AUTH_SALT',         'Pehw#wC|MMd:,>E1)gu{MYq9|4b5[X{A <[<1k.i7t3w$r[eMvtQyd_mdWA?Z`Do' );
define( 'SECURE_AUTH_SALT',  'V+q_&ZDYA<BYd<TRy^<1AH<oUI=LeLztG hX!?da<H<UK)PoEABl#l`qdHUF1{=i' );
define( 'LOGGED_IN_SALT',    'Pd(aB6 Y./}IF1M:EG&WrcQ+?]Yo[sF5r_C,<`)`Hlte+`!2|kBkXC^N}VjdxHq ' );
define( 'NONCE_SALT',        'A^~OvD?Ie=0dFC%Efxdl,//EgZ].CAv@%N0m^dnW&JHeouF6Owh4rSQo7+(Z8L%J' );
define( 'WP_CACHE_KEY_SALT', '[UnQEY5VR$)TQtE7#,8>is1*%/ e8u|4d@QdrXs^H/c6{9>5zMYXOt0NU)s&x)G_' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '79aaeaba96392f6ae382c053bcf6b2e5' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
