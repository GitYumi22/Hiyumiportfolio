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
define( 'DB_NAME', 'hiyumiportfolio_db' );

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
define( 'AUTH_KEY',         'Dkwdk+0747]E~IE6d{lx{A:iB;TYFw3sTAW])xEeWXt?^kP5SLnGvY-<+@1Fr{O<' );
define( 'SECURE_AUTH_KEY',  'BO,Q:{{FP6J`a;sr[THNk`$x$d^/ErF }N^*uoh 79(T+?bo+LsGDP!bh8OwoUVs' );
define( 'LOGGED_IN_KEY',    ';#^jaZ~r}zeA9UUOY7NZ/jLTL})5!2uua[U&PU4|L>WSIOV)iYs![:fM!kFgw1LW' );
define( 'NONCE_KEY',        '@KvP:4Vp.?{>/*DG|_]-(dQ8gb;)Ym@z#y@;0g2@w]508UL=e^i6bH-Y9(.k*>+M' );
define( 'AUTH_SALT',        'a/$Iuqs$3~afx%gwhx{7I6jS+)aQW4MFlzxj<IIatGXeR*K5yG7w>R>kj)qbe[b2' );
define( 'SECURE_AUTH_SALT', 'z#7<p4]U1GfHxl ~U7bW5vNBVY}JE*CrS@[6 O:o8i Z7R19>!D)J.jU2UKl{:MV' );
define( 'LOGGED_IN_SALT',   'LkxWL5;5Wv6@~]h/II9Tg`Pv|AU@Md2lwU8u-bkPgjT*D08GCIfh]mp0$NtSNn2K' );
define( 'NONCE_SALT',       '/zku96hGLtF]x)cm4SUU6:J{_u<{G*U._(+iaa9kwZ`^,S=+RiZOox-C>4:J8Sj$' );

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
