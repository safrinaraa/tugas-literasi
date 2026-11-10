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
define( 'DB_NAME', 'wp_literasi' );

/** Database username */
define( 'DB_USER', 'wp_literasi' );

/** Database password */
define( 'DB_PASSWORD', 'kaysan2008' );

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
define( 'AUTH_KEY',         '%rKjy#|]-uErh$ FCX0b5.=?B=U0p6xIL54fq23N}c}#qA3Ec#30cHtrCSfUK;As' );
define( 'SECURE_AUTH_KEY',  'BSyQ~b^(NMROv<+M(XUkwsz?D#*%0@v)$Il,FY!8r1tEec@_1Euc[b3=a4shi|%t' );
define( 'LOGGED_IN_KEY',    'qn`Id>A,=gEmai_*ft[%/je0p>&sRizI]f#!KiVU0S? _xg%/{:2^^z%-o[(L?6G' );
define( 'NONCE_KEY',        'toJnW%Yoj^?NC?Q$#}cG9g4oH2Y&Fovldw_{D.Cj{@/&s?!Io  I?p{SO)GN:fP9' );
define( 'AUTH_SALT',        'b*!-A.9s9p1x-d*c(WnEEt~/awSB#pokgtX:O!54M/Sl2S }@.k*qvJ=5)J9uNel' );
define( 'SECURE_AUTH_SALT', 'QW7b^DYLBsTe!}ZFGcodz^ fJ*=1M[P~o&M|W!;<k*b*3}$g ?ejIPZl%{j)P_Ab' );
define( 'LOGGED_IN_SALT',   '7T.-=faygj}/g&Y1?s4ZsWRv&eImz>q:3XRpB:=1P[=KBqi~{FzDQx&B7]f2-)v4' );
define( 'NONCE_SALT',       '8cG.%tr:r5L$WwfeLFqt*<a|QTto.4~o6^%~.$=pc]aT2H{}<ot5mk/FGm9I0k5F' );

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
