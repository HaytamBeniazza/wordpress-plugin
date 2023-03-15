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
define( 'DB_NAME', 'cafeine' );

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
define( 'AUTH_KEY',         'A,M$Qn_9t+TMicjC0`hyE#~+.T&n;>fiy6Yg,M1a&PzT9EQZWI02jeOtzHGaA8h/' );
define( 'SECURE_AUTH_KEY',  'rBY</P7^C}jO{2v]}W 6Im[W3ltm8e94ir.l/!A,<tayR^~L3Jtw m>3W]pi_B1F' );
define( 'LOGGED_IN_KEY',    'bNAQ7_uf$+7>V0$qvXrzu8_q6p>((Y.Sy$otkgmTmF)Y5~Ox!(Yp+9b.kx[S0Q%s' );
define( 'NONCE_KEY',        'dvF/z<ss_[yJ)Ycc5`-8zPq{t K$/L=wo?birAWEa6J1:6I87=c?(Hilr_0olQX=' );
define( 'AUTH_SALT',        'L;jH|KyoV7(F=j!g4C;02Vox,llDUS`!<`+`[P8$w`A8&*ENrCpI =d/Jz|ud+ [' );
define( 'SECURE_AUTH_SALT', 'vwym4M7IC;)okK8v>way+ycoCSM/m48J+?_;njz,:tL{J<<mlWpJ/E<p$K&*&Z!z' );
define( 'LOGGED_IN_SALT',   '/%Al-|WxHS] AD`o>`5CDK7.U]s?tCxlV8K846B8Jo;^[/e[4OOxxFMqs6g.,Jxf' );
define( 'NONCE_SALT',       'DTnmOzEC.xJK4ERVbo*|+S(T;?XzH&I/q%a*l-B7OoIz({z_?wxH?0HKJ}FEk>RA' );

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
