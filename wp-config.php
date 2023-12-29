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
define( 'DB_NAME', 'database' );

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
define( 'AUTH_KEY',         'u@ygV@I40RtY&kw<m9Vwhg@QMLuIi-<>`+S-#PLr,N/FUVO2>Jg}r|L~i1}0q7`^' );
define( 'SECURE_AUTH_KEY',  'Gg09:@blfRZLV.%JG86Y,<d6D)y,5,MNyMn8/M}~[u_OV,N-V:`3U8M>Q 9MiR=0' );
define( 'LOGGED_IN_KEY',    'N>*%6~1vp+eNILd8fD*D8WJ-(JW8qOo[p{Qr`QMyV$/F=Sw]GQ|)4S<+(iKBDDwE' );
define( 'NONCE_KEY',        'M|^r<>zcMnpou92wc{bZN}OSW`Zwx%T^s)UKwpsMnm5IG7Neu!Xw)hl:btdCqIbG' );
define( 'AUTH_SALT',        'Hlw6P%C;u8$FUM4].7~i(ChkkR2Q)m8-:@C`lhJ$V~r3iJ;pyg0V!ySG^610.x2S' );
define( 'SECURE_AUTH_SALT', '9qlgJaSVuk.NIwc!lPy?e5W.>R.gSsIe7RAFL>/=&TO8OIMgh(HlprnxalHL1Xg?' );
define( 'LOGGED_IN_SALT',   'e7e{%BV}&NJ1+N-I-)m!B*/]9cKARPhx5EK1=E.iR&K6eHA$T#=K-FhG#zul,hmM' );
define( 'NONCE_SALT',       '[)YI.S$j&@O$~V}7uXGWSN.|_F^Bo.FYBQoI;fvq[3X-PIw<y3[z%dA;zxIO8av|' );

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
