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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prueba1' );

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
define( 'AUTH_KEY',         'sGkugl_v[+1GM9}=E21#U`^qTn~{f`Y[+H[0#d>Xp&A5!^8e.QulwQK{~]h+nh;=' );
define( 'SECURE_AUTH_KEY',  '98_?h _,{o*srs0]Q%Q_<5UJ@>P&w)Y4!/6pONf@mHViW(?YTaFU}jEB<_.F<J]+' );
define( 'LOGGED_IN_KEY',    '@Tf;3$13Is]{z[8`!i:FrFntEJ^P5Nre;F6oDQ^[*RPe55avaT`Z9.4a-0u}d#B:' );
define( 'NONCE_KEY',        '~`p&fD&S1xc0l_@ynG8xR!8P)e${b~Df1bY^h,8w3)RB{uM0y,_mU1.56Qs[i`^{' );
define( 'AUTH_SALT',        'wKmoD2?))@5RGq&]L%X !O7e/$)x(utqGN.iamN~wA^~,XY>g,;F(;,__O}jM_)D' );
define( 'SECURE_AUTH_SALT', 'QHlO1BTNH j^1ro85,{4q}+ v3s3d!|#y2zkeV O@B!4r%kTVv>H|e@1R,+m.{9l' );
define( 'LOGGED_IN_SALT',   '$0gm6$q?6JH3ATh]|EO@u]#aXW4mGw+7/#W#G&@.dEERB`tZR(6+Z53X;QkiW+y4' );
define( 'NONCE_SALT',       '[p`UQ$aj|SQQI2[Exq&7d:5Z*o1Y}<AW6B_zx3))$|Ogtj 9/@Lu[}fACC#S#-E.' );
define('WP_HOME', 'http://localhost/prueba');
define('WP_SITEURL', 'http://localhost/prueba');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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


