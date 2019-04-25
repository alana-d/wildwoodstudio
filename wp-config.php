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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'i4Y`YKnpF0a~[] w7#_J /qdiDn_2sokpwGoDg$/P?M!}<1qGsa$@zJ:_v [<9Nj' );
define( 'SECURE_AUTH_KEY',  ':i.{S:#i;DX8US/?-wurh&|Mqmp+_Y/Yx]v^^<Ya;CQXF6;~7K*$:pr>T~) 3 q_' );
define( 'LOGGED_IN_KEY',    '9M4vY^IN%du8k$&((qz*b^,.s_jYFHOVznw0Q@kH[doK+XZ6.@XkaqY2l:+o=7ZF' );
define( 'NONCE_KEY',        'G5Kd)49$*tyMJ~5CNyxrOc^L(jTXBN:W!#VH$sFS 5:<|CvtZ_5-gIX{}|DRpa;a' );
define( 'AUTH_SALT',        'q#Tt5sef/5Xc0Vf{JZM^d. Zt7mzwVVH.+~3n/Lh2`x=o~bkls.{MJ>v1v6!/{FB' );
define( 'SECURE_AUTH_SALT', 'a_>57m+_.Cym3xjq9+[S1 -]2RW3Z`mp?0WlMdip1sgJk*t]$%w?#*?O!!>cDI{@' );
define( 'LOGGED_IN_SALT',   'Z$)43Nlx5m&4#E9@:R_7yTUnXFtVSnYBsQ*)XwBh|EUh-&SsV6}AXD_wKW#82I9V' );
define( 'NONCE_SALT',       '}RJ4c$0LCov-aL#*</*DaiE3(^|1Y$&~X97I`&3JoQNBi_sd,2Vu~M(@,XiXu8Wd' );

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
