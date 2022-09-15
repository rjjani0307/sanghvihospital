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
define( 'DB_NAME', 'u795941923_CnhLX' );

/** Database username */
define( 'DB_USER', 'u795941923_rsFmt' );

/** Database password */
define( 'DB_PASSWORD', 'oxJ8WhHJec' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'l.Oy%Jc5vlm!u;d7a:fwisa7po`S:WSJu?7Go]*H}a$+Q.rBWd9LNSSf)kBWdUpd' );
define( 'SECURE_AUTH_KEY',   'j@|DC(Q!ax#BGi+1sdOyn^rA`Wh553Qf1?hZq2YE;up5P%E)xPzCk)fJ@!T7Bxh9' );
define( 'LOGGED_IN_KEY',     '} FM[x|_YlEv_ar1_u_SbhA(@tX[DZe}q7xU;GElbi00zK7n6LB)uuJw%C4d,N:T' );
define( 'NONCE_KEY',         '3h6BbDH22&2pEc5?s>aG %/kqQ(KfEalvCd}-[fw22%I/=IwM6#A@Dy]zr>N=W,y' );
define( 'AUTH_SALT',         ']?Vx%DyCgD}(8,`XdM^J,wpD[6y!Y>nJQ-;K,zp4a9 UF&4!5zWF,O^i?$_e:G?-' );
define( 'SECURE_AUTH_SALT',  'a.ya=?7&0S}Y07EH)]1Nj_{8YAy]g/=O~i9%_*v{|JrKbZlpHd_4$W5T}p&|lfQU' );
define( 'LOGGED_IN_SALT',    'eUkl`d:no^N9J~MRX@$y+`7=b6Is#8hj.> ?xx(-JRWp]b},)B&F*TV^Cm!7{ms0' );
define( 'NONCE_SALT',        '/VFTW`fKU([%#J0]v4H>{?:H,`v&n8TUCsm<u[DxGHH(=+lN!/wyV#W(IKU)oG:.' );
define( 'WP_CACHE_KEY_SALT', 'G=uko,vt~n6ev$iSe$Q-S9Zg{Wsn:zG-B0:/jKhQ:_RMgpoQ/.*D}viC,HE[om($' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
