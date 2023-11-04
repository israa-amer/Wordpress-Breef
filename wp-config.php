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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'admineco' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'bOSBMpQD eV^g6,X3}$2=xo_{N)#=nuSwQ!#U2s>X:qt4}BBD=4*?ed(B<?:=$%j' );
define( 'SECURE_AUTH_KEY',  '[)b!d@ia/X0K=:IGLR._=Lz+NWz?G@>)N/&>v.46>2g:y^4|>@^#nick?>wyHnFB' );
define( 'LOGGED_IN_KEY',    '=M#Xe1xRezv;Nh[&L9MD !AYq8ia?L.i>}IW~wWV=Ee!gb1+x8uWJ[dXlI?XyuiZ' );
define( 'NONCE_KEY',        'coYmK!=`R4{1kvS$,PWY8;X.>#4ExJv&KRM6Sz@gQ-cAyYf$OA=l{h?gAUtH`_lR' );
define( 'AUTH_SALT',        'G0LBZ@,es-owFm!ZRJ(ohoIGT}m2*f&Z}?n#_Cgz}n-W,)I34es;M9T4eQ,&}j)s' );
define( 'SECURE_AUTH_SALT', 'qY#GndH?Gqb9U&Ba2&_wJN=W:rE >K_LY>xV:!BYA=LEH;y4bkrO2nRfh.Yv@lg-' );
define( 'LOGGED_IN_SALT',   '~AX$ms%6N8; mh?#g#b=4^?s$Q$<+?-k1{$=aY.]:)a[7>$5yZ@Yn23w[JgF?[!`' );
define( 'NONCE_SALT',       'rqI[~oGbq%mS++>Vuy>Xmh.$YvPl7^UUw6:Y$51AARx3@L#rwS1sa@-E4LPiFo;b' );

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
