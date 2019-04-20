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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mobifasters' );

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
define( 'AUTH_KEY',         'O*mb1U9#%iY;[;](4zP +XWM|)z#P :c7;%JFSJo]PNAo>ddYi4k4TjKB}ZUSb6<' );
define( 'SECURE_AUTH_KEY',  '[^w`V/:kYoe$8 tk4PHK,nD~:|$D94!}K$u8OwEN#,Bs/Abelw#_rr)v13j@_ik@' );
define( 'LOGGED_IN_KEY',    'ZsqF06phT+R]17oeE?;Pqt>9M9.:HLT%NgA~.|@Tk``6Sa:s(.Lz[RVBLN(OYpat' );
define( 'NONCE_KEY',        'L45y1eq|-^4~a%*:W|0t_1u%.(]3uTb]LQao~~-^@8qEyx6zk7;`|of)x:]bKW^9' );
define( 'AUTH_SALT',        '=[qV^L4?k;^*.>&*wN0$xl`GFpV&T?J lk=:|xmzN#]n:)OsivH.v8{cb8:5An(8' );
define( 'SECURE_AUTH_SALT', ';q)R*Ob*cm)f5LX;gXTjEtk26I~-^t%GVxCMq5>Hk87<?p#Nee{!VS/)PKR2)_e@' );
define( 'LOGGED_IN_SALT',   'tRYPbo2`ZT?}Xza-AdW`4};CjGo&t~o{|Q a>xnO.0m{?:(MU~zyDK*;/jGf&9^f' );
define( 'NONCE_SALT',       'C]F)pJ=8cpoHll0Y8|rE.#|XNSd5*^FXEx_)13DRI-*iW1n^*^_[$^iWG&F_Xmta' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
