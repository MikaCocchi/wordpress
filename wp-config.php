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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'MikaCocchi' );

/** Database password */
define( 'DB_PASSWORD', 'Gnocchiofromage987111' );

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
define( 'AUTH_KEY',         '3o*CU]+V9K*X+jNFxQxwzJ[]IY[q_u6zrkqygv-:B0|`e$B5slyfjzcHki#eCUG6' );
define( 'SECURE_AUTH_KEY',  '27Em8dJi+{Y{:) T&?QU@PO**>g,(wsetDJ}cWH6`&yi~{Iv<pXz|ONvRU1jvMez' );
define( 'LOGGED_IN_KEY',    'u4(w:=8UshDen}AF=E@otrdR9c_8TxC7L&qJC3EUa);[)MSp:/6I><c.#7e>ma@n' );
define( 'NONCE_KEY',        'V]2Y:WFEcek7MfLo!I[1{tT! Z4#N[u-^(Qa$5MpJS}=O*^{KJR:3kU~^S)#^uC!' );
define( 'AUTH_SALT',        '97g&tJ3K;I[l6UP^Hma^YH.4hTsOaZdt/.2Zp|^fdH4Rc9cVl(i_{R8{797Pu=]c' );
define( 'SECURE_AUTH_SALT', 'tM0sUjS$.KQbZyO13=uZb<0z}rkxAV:Qr`k^k1dxm3]eXa4p~V2mD33#nV7BRdlu' );
define( 'LOGGED_IN_SALT',   'C{BNE>O~@)b+xI]^M`Q&}.eL{8|gHJUkb=8$U:SE)U`:5KGTVX#aamm>er]*XlT~' );
define( 'NONCE_SALT',       'Qro^.7$3[Tf<idy(Tj-Vj@R,E&G;]yb-{j;H|BYR k<P{+hSi5i&~LMLzd<}ZybE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'isitworking';

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
