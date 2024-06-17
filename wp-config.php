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
define( 'DB_NAME', 'cnpm' );

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
define( 'AUTH_KEY',         '<=u:LWAnsaiysMxDD9 $*| Yu<m0V}66`Y/bnO4f:rb3f^+BQ~~w |56SM0b&$ t' );
define( 'SECURE_AUTH_KEY',  'jBVMF1DG:2N y-^7AF024X~n_KIxXpVD#I4DQ<<x+YM;lKe6U#7cu/3=}c,6:(<W' );
define( 'LOGGED_IN_KEY',    'j.DZ{<[|lvzs49^YL6SXK&]B`_y#NyAe^Gfq@|HPJ~vNVNm@/Mspi?*t.FJlzZ^h' );
define( 'NONCE_KEY',        ':Ms6s6RTp%z!Ok>?/8n)Na<q>YSRx>C&[ck|66WE|=eV~Oc^+I0_n7DDXfC@s=mB' );
define( 'AUTH_SALT',        'xAc/nr7FXJCz,;F6Rs8XXqKI.bo<6u6p~zSCU5 r@.|kq_%~Td>nT<u=hN$+M)ug' );
define( 'SECURE_AUTH_SALT', 'xf`$Y=DwnQrWR4^zjXy%=y7]:/{5mjKG&H*{,`6NIsL!EjIpb$;w*wxM;`x]xEfy' );
define( 'LOGGED_IN_SALT',   'lT)^&Dd$}h[A*REJSJb)Q.FZUQ2.Q+rFA@Ms%U@qF34b8uHi:{S/oMvBw{|L(,x-' );
define( 'NONCE_SALT',       '/}EW.~M+z HX4jg#/)h@c^%i`QWn9fYyiF~JIr@@L-d[GX1-jb_C9J!Rym;@%[`J' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
