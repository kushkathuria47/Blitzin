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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blitzin' );

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
define( 'AUTH_KEY',         '/bC=ayolW#hy6R^~#4W.ndw0Sw=9O.e6^/g=}FSSHVWM]L;/g;t:EkLw>a9lu`B/' );
define( 'SECURE_AUTH_KEY',  '@?.K;RKDrU11[VP4x6dpc/f>ik]*M?9<_7h`[7n^kKyWerLab/`_8nos&l37O-HJ' );
define( 'LOGGED_IN_KEY',    'Z4Z.KIq8|]0=2_OHi,?{XmEwcQcmYlUd5;^5#1I[N;&k0M^m$^viu};J0n3&<aOn' );
define( 'NONCE_KEY',        '/~nL)Bl[Qt9Tsi3xXt?$Zife*w4jiEUAQsfz*3+Z/:;HL$;A1$aN}XELefxmAcdF' );
define( 'AUTH_SALT',        'Mz&1WqYw7:JD&b,%xS?//)Dp,US4Z[pm8V~!6NKiS?JQD9C`-jVKdPIFSUK9=HA^' );
define( 'SECURE_AUTH_SALT', 'M<<Nb1ca^l5sBD0If-+43r `D[YMVa.tpuCyOr{Q2Lxc<nJ*,N8X<zd%KX=9A=ow' );
define( 'LOGGED_IN_SALT',   'FX,!9( SV2a_);Fq6bM-@l*y^Xz@U2icVu7FOO6 [WUSxiqy~-^CG==*H?Rf/[,/' );
define( 'NONCE_SALT',       'mlFRQWkOtZ)q!qYN<Wrz/r#!@/NS>b.ouOX`%i+LfI`sK`~}B=~wr]j0#B9CG^4s' );

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
