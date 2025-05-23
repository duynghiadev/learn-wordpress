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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nghiale.com' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'duynghia123' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         'A4l@?~6GN@p>EQ>.YE^n86@ZHA!cxvd?>S-D(/LpJ<I%C]%)Jp aO3hK,!_2Gswe' );
define( 'SECURE_AUTH_KEY',  ']UOzigNAsiCxx5VDWeHc3Ty)W?5`}RH/hW:};zu!hpexhW%vhu!K}r[8Wcg@}p!G' );
define( 'LOGGED_IN_KEY',    'Bf6NAc!##t(F.svF%#3B(=`4^&c~}MH{fwO5#=C*d0/W+0~`.dm9sxgUp|vZ^,_x' );
define( 'NONCE_KEY',        'xo-BNv4YYdj6ft.V?4OkLgrs_9qQRD.#KUFbaV4S-(DO*1{,1MXby.AtD,}0c ? ' );
define( 'AUTH_SALT',        'eZ^+P|]3_g pHvrffr~> y>6Gek$SY<ah;Wtcq>q7]=RX1:)@=U>#hDZ,l#,19F9' );
define( 'SECURE_AUTH_SALT', 'P:+2PZq%JgV/.DXoty_hHhFI}U}Zn~aCjjzMT!.}Ha#b0rgeav/G;*Dd_5$nqpXE' );
define( 'LOGGED_IN_SALT',   'P60A4V%(CJkO`og P8,TsyjQAG~s|[WH+0&zHWCaRa7Gq_%xxm9sc#M{UHi6)v9B' );
define( 'NONCE_SALT',       'v^J7,nwt?%mx2PRM7{-*j$9W;3m>-]M)&arKfy:=ycL1>i<v;BJxyjoKVTIxc)fq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
