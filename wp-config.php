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
define( 'DB_NAME', 'clicmemktingg_wp_izvqv' );

/** Database username */
define( 'DB_USER', 'clicmemktingg_wp_tbl2u' );

/** Database password */
define( 'DB_PASSWORD', '$_d@0#j5eIB35Y_h' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '8N)ecX08:l8xP!30~_0!321NT4pMd%GS%_P[rkqjd(2GD2-6O|_a8f/rtFAXTCb~');
define('SECURE_AUTH_KEY', '+G[Vi@!0;P60jV)3#IIm32E4o;:*wCmY|K];8o5&x06j)K73)9[l)LrlT2!0|/0O');
define('LOGGED_IN_KEY', 'N@9%lq7PRM;V7VdvS7764&8gB:16N#5rj0B_f7A0#8WLfb8Nrd2OjX/xvM3k-I~P');
define('NONCE_KEY', 'KlE#9#cm8wu7gf[8r*-RV)LB)rRo[f&sz;|2w)@9[8|52g*@!Ny|b5_u6538J-y&');
define('AUTH_SALT', '[D;Y552d-IS-t6)sPUGZZ(;:S66W*i0:0D|6A_+;ks6CGB6U14UC2f9ubE5utq32');
define('SECURE_AUTH_SALT', '8a39@Xu*%Re6B0uXAJ@g6+MC4w#YD+%[Hm4;:gemFJ|_(O4]))vA+qdX(/7T0(2p');
define('LOGGED_IN_SALT', 'U1aE7)0jTt3[m3O|R%6+7ad|Q0#_9!C[8W3YnnRpF5+@uCY96wS&t]ihTlW;fH5Z');
define('NONCE_SALT', 'KFrNO8*6K(/o6W066o*qI;c4(R9+NVl%m@U3:M6wJ)7N04d33hG6B8k|2dncAa+7');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'b8tYFgbuc_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
