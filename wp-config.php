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
define( 'DB_NAME', 'steve_sharrad' );

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
define( 'AUTH_KEY',         'QPDpg=YIrX^x?uA:K7Z#11HA+XzJ1$x?z:XL./@i:-w<n%Bub- Iu[9Hx.D{z&)p' );
define( 'SECURE_AUTH_KEY',  'wf;j9~;@cl$ Ikee$@n9EG.=hb9W)bqNu%M;b=_-j]BYdD-=>PVX%#i5s7M` M28' );
define( 'LOGGED_IN_KEY',    '/C|@pGrc o{k(`Zq/F.X`qU4hR1nCM+gb4X_f22RR]DO+i[q}x^O7(*mUE|M:~h9' );
define( 'NONCE_KEY',        '3,8;4W4oxMcSJrUP89qMQW44X(Oyg1y**AZ&gSVD6x!Sg(Bx0SC=9Lz8&JdjB`eW' );
define( 'AUTH_SALT',        'W o^8W`y$ gtB6`EGNTgaP&YB#qu<!dg8[7.kF8^)k:!8M=wvM8?f82+e^FiznTi' );
define( 'SECURE_AUTH_SALT', '8Kj~L6m9H{-~A_cmN;zT8*/bOY8/s8 ee4@``FtkmiTtITlF2 I]`BTPg26-UV<2' );
define( 'LOGGED_IN_SALT',   'z?h?V`Py>9U8Z/h5,t_4,fe,:41u[p8P_a7;vREXimP9:L|MP@5/nY^(@v,r@D(>' );
define( 'NONCE_SALT',       '=iW3AZVVIB+X`M=DjTau5%HHal;B7A?UIf/9a.ZLT+cjf#(zx)h2#bE^Foe,N?b[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_portfolio';

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
