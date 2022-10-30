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
define( 'DB_NAME', 'autismtoday' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' ?K`qMq)^|1nP3O:lyp4oVLT&8}]Z68}dfr2j7$!Jl+2!<o,]$o @yws^UlaNChv' );
define( 'SECURE_AUTH_KEY',  '^8ri:;P5G5WxdvaQ@Clz9g a9%1IvK$oM K8#?kQmI?/kqS=d/!.IB5>4mV `tCv' );
define( 'LOGGED_IN_KEY',    's//V_^d?M++VX)k-_or=5);0L|^GHgrv<:fOD8IYW|5H^9-Kr:G,`_X+#%I.xdtD' );
define( 'NONCE_KEY',        'kR _)zV|q56m!,[P,OFMiu4QSPf;s>A,yphqEc1+9/?CqXf4Efkek3S9{|[lA{MJ' );
define( 'AUTH_SALT',        'Q.:/|6SMEO%9H2qB*S3WgD)]5HMKEgmx,q!|8bannUe`%uWG/P)3CY,bdo!cbwYs' );
define( 'SECURE_AUTH_SALT', '9E:tAfT4kTva$HTXo>SLwr?Hpu/z MGF*y9x$I1@[1a1^!irm` ,JKdKLB|Alke!' );
define( 'LOGGED_IN_SALT',   '5e7mh7!JGYgZRXs I4le&Fft^opqEw5g_1xfieEXe!kg>VAml<tR C3j*5Jk&0N,' );
define( 'NONCE_SALT',       '?K].i29}3%9aBN~!dt<JB,pSY13Q6]Y2z4bw+8?^oLp3H=E-}Gqd~@7.7!<r:VW8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'at_';

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
