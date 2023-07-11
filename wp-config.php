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
define( 'DB_NAME', 'MDRNThreads' );

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
define( 'AUTH_KEY',         '!`56@Y(3hkeT=$a@/(&XU)D(+@{p;7^t!;Z~a4gqDXM@g4p`W!<%`-R@lu0/d5FP' );
define( 'SECURE_AUTH_KEY',  'NtH}U/2e>7GB$Qw[(PiL0pP8`M?XlOZH*x4p)?)I2FR|<Qr9yk{LicekZbgMH?Hx' );
define( 'LOGGED_IN_KEY',    'd4)/JOKu)4n]-R>|(|(3[A~iVi%n<U$NNeAYOwI:(iC +JN}9(_MH@2j:RrAs@RL' );
define( 'NONCE_KEY',        '4R<!Vo7K5b}v!yCC@JCDU?C:suJS9<6M7tAjb9=OAb@&%6MFhCt-<qz*ZcT/{}c#' );
define( 'AUTH_SALT',        '`ftlIHG=xm/D7e:^_p3OPCWkW{3WN*%`n590fq91?k TN0G1|!p@p85&d>},m$~u' );
define( 'SECURE_AUTH_SALT', 'Chtz&iMxk/)_o7!7zjr(C*<#g[[WKTjlpSk2$K+w=?>[XOsT{j.RJ?MZf_v1G)dn' );
define( 'LOGGED_IN_SALT',   ')YB/apFp9S XORgNQ4BEJU_Abe,;IB>q{^DcGp:9(4JO0tsEgkjx<z]lq@G)d=)m' );
define( 'NONCE_SALT',       '_0O=o$uFJ?GL.m#5x3K]{x_`xQ!;#qIq% M=tbq;-Zg8,u}z`SD2vQA,MhQ~!M~]' );

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
