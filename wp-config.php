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
define( 'DB_NAME', 'cloudfree' );

/** Database username */
define( 'DB_USER', 'admincloudfree' );

/** Database password */
define( 'DB_PASSWORD', 'cloudfree' );

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
define( 'AUTH_KEY',         '8czzeNzAA](BhG_#|Nv>Bf zCY89EA(n%Hq)U4#C<Om%K7lb7$LA{ZB/V@=$-2%k' );
define( 'SECURE_AUTH_KEY',  '/bS>d.pt!@;[vM(CqO =vo+cG1,>|v$ `~;^(?iEE!9czBo|4THh<yG)W2O8;)Pu' );
define( 'LOGGED_IN_KEY',    'mal9htHdScK-7/vv3#p1yntwX:[vcF:j-``WgT5ZaV7D6Z}iK8+ey0t7UE*h$(,i' );
define( 'NONCE_KEY',        'oYoXLjbkL(p-kDePFGwW?.9-&HJ>:Zoo#:Ed}f+08ic~p1#{o{;s[2nHwDmxbA=U' );
define( 'AUTH_SALT',        '*Bp4(B%x0EW@YRx}EE[Mg X]L#b0WuYKx<_-`aw$O?dtX/O.sz-Dso[DT^{m1^,U' );
define( 'SECURE_AUTH_SALT', 'q0*Zjw(Xt9[&$3n>J;ek)r?3.0*;ET-DUvID YpkN?myHA w[@tg#B4@:@}LMUe7' );
define( 'LOGGED_IN_SALT',   '[_>KBaR]_#a&]VstZN]qLN{SD}xuzBp~F3=o-]SI.W.{cUe%],,I?F{|FhtZsnut' );
define( 'NONCE_SALT',       'Pb0QsK1Y]!4%m|c6e4eL9I4pmB[|+0r@,u4Us=>yh,e?6EE{=s/^.],^yA8`(^#|' );

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
