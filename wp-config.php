<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'yann' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H9@`G-[+]0+G.S1=6(}5,4<i,ZTl<dw5!k;*i%F%Z;==oX(I==P R1s_?z8<^y>J' );
define( 'SECURE_AUTH_KEY',  'dIjiS&] ^FLL-1T;%I:f2o*DZ3r@A_&Em,7j,B]1.jn$n&%Et<,g}$|iDd@d6OYo' );
define( 'LOGGED_IN_KEY',    'uloT&f4:^qNoRSkS_ vQ,>`=qeGU1G-nlt*G2tJh4o,r)-!.FZXiFKi_;Bs^Q2hN' );
define( 'NONCE_KEY',        '@pkGUSnYeHI#lJ9}p5i51lj@()}K HH+S?`%1c;qKrD#Ab|Pnbp}% 6IOUUn9vQO' );
define( 'AUTH_SALT',        'ViN&T9]qXv r1I /Iad-bL[F/<_cAgEh+px35c|Dq*h89~/pczZ0`&-$O6Pb/ p<' );
define( 'SECURE_AUTH_SALT', '9[*=UKVrit.Oe4BGl}jShhXyT4IV0%`OdASR>3e5<(yZ[bN#4p|fTkdBvyMbjmp#' );
define( 'LOGGED_IN_SALT',   '4LkD)WWDL%>|/vJ7Bq8O?52ym0]h!{ qizyA#65Sr3r^VzUk&FfM:f(<~7r^:DLG' );
define( 'NONCE_SALT',       '?(smFadG50esba]U/,^CYI#PV>aIx*8_@.5^cU%xu4ZVEZyb$%YPlPIiiIfE4&t*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
