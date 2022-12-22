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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'JrKcA&,Mzfjv)boq9,-^mNrnZwp2()Ajye),WOw9pc n-BQyd.jY#4yX<Z%CCBCQ' );
define( 'SECURE_AUTH_KEY',  ']%c=tRDtX4{)mZD|pt&K=wT<TcYb&xIj^{[@ZkaFw#4he`A;XIu:R#GxYL(:c. #' );
define( 'LOGGED_IN_KEY',    '.89W|gZ{&@-b6[ji|rV}~?PD(?8ua{5:D){e5&^^yZdE~o9m.@J3|pN#6n<.H9}Y' );
define( 'NONCE_KEY',        'g>dE@y2p+X;m2HV#H2ZJrn:G:@qKVnE@Sg`b2qzQ>/!1 )4p}n~f9g+/h<DD%Uh ' );
define( 'AUTH_SALT',        '5G&f*m?aEkbIg<0OvLRx-#kIE n%)pN8*6n3XR%OL|65bq{aUX;f{BqAM48Q%bwX' );
define( 'SECURE_AUTH_SALT', 'X={*Dpp2<6:RC`k)YKWxo.`|bUe;a{m!3sXWH?*A|H#FBK<xc~kzw/p#zsFh0t(l' );
define( 'LOGGED_IN_SALT',   'gKaykNK+fx9l,FsReL`U?/)$%E]YMFWr}j%TJ.WOfb$2Nw&V%Cd8tPfa]}4c};21' );
define( 'NONCE_SALT',       'HNgFI{y625u3&H,F<(jM7o9Sl=y~/W=UPP,`JsC;RxE,XPMU-r;GAiX5*Y8.vsPS' );

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
