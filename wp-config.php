<?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.5673023090175320');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.5673023090175320');
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY','2BLRPGs,=)mXoiZ.$?.Wa)XEU>GIa_8+t0fniErO');
define( 'SECURE_AUTH_KEY','*rjI8z&HhI5agX6%ZuJi>>s%=tuQLgmzi<BHTrXH');
define( 'LOGGED_IN_KEY','_Ay.o%+>8&ASl-A4qsg6k,mBW.myfINUprHuLGuo');
define( 'NONCE_KEY','/q8fTj8b%7D98ZgAyYG3Zd_^PxV6[tK2Qfik8<ZG');
define( 'AUTH_SALT','w=egCzG1J[a,<VA-6ECB>l9nw#kfe/x<AtSW$ELE');
define( 'SECURE_AUTH_SALT','EIA^,c%ZCIeI%2nYK9*3_84pVP9zh&K4%Kn<Ge-T');
define( 'LOGGED_IN_SALT','?b.?[+VuH5o^&?APpT^*K<>W_gmrP(NLN#6,68DL');
define( 'NONCE_SALT','(BsgM7>@kBeww$/E(kq<@(SH(3p*cT+Yj?Y^@SJ/');

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
 function wp_new_blog_notification(...$args){} 