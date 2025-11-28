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
define( 'DB_NAME', 'maradana' );

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
define( 'AUTH_KEY',         'VNX8$Q2w2:kc;V?NC#{O3O1keykzE#fH0V/m,iMjyu~pM|ZC%L7cX(x$ g2~PvvQ' );
define( 'SECURE_AUTH_KEY',  'iX.AftuV dLd40mc>hN*r$lx::o4-@L>e,5Rdyb(7U(%S?=q7tm~UA5=O;<SNmlG' );
define( 'LOGGED_IN_KEY',    'fl2NCO*&@P8(nZ!F?~/2D/ex9i%6lf@%n65hxEYw:)Gw}Qc6rG?v-iy1>&.eNJ^~' );
define( 'NONCE_KEY',        'Sh18k<H2fK1IPY +%0IE+PV%dmQ-L[=:uzngZ*x;9^;4/x;.xY|ti#z)q/&B<Xe:' );
define( 'AUTH_SALT',        '-IR7qu7(jl3~<S>[)&98,pyu[GaE_tq*Z0gTwvxus|dKX(Wg=k/1(tduqmiZ&/Wu' );
define( 'SECURE_AUTH_SALT', ').e,<PU om*/wT>AT`!(D!!ap~oaALj=HDlV jk;$G~ILuvu^W9-(2Y)PS3z?Hob' );
define( 'LOGGED_IN_SALT',   '5~:6~I?kE]}/Mh-AE=p/P=[m`^ OUBsHn$,eMJBi%OXR3&2YETX!S}he52Lk$dby' );
define( 'NONCE_SALT',       '5POVeli)Fc(RYlEcTl`ar&;?YGL~m{P$fYWh7Z3j;1Khxp{BPSGflc9Q~m7>~t&S' );

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
