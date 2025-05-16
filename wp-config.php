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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'tl0@=B:+V#d~PQ@N-^cm!pHX`k%;sXfe|u6E=zZo`orId8oF985jMmI>GAq-@LoH' );
define( 'SECURE_AUTH_KEY',   'vs4 @ch*Q(1/G=(bPGDc{9|858v%Ecf` mK8:c:NW${fj);B4};JSF>+j&{-xoAp' );
define( 'LOGGED_IN_KEY',     ';Z|Z}D!_`6SL&d}6/.vq7!!(hl;6kvVayO*@IOJ-d;_10nWQely(|+^O/))Mn.Iz' );
define( 'NONCE_KEY',         '!*/2e^fus>_y.;q&yy7AbT$mklx/TjmFp&<JK04##>1`b]>30Rvaemnk[oBVh5,(' );
define( 'AUTH_SALT',         '8{|+<d*^EH N)v+WNop]dFPC/I;o*<]AV5 eFQI3X;>%{IJq!38f`GKBp=#!z>iT' );
define( 'SECURE_AUTH_SALT',  ';zEezU[VG+HD sXr]F}jD#p!RF47_rm3YuMk;b U{WM!>@*GqpIx#vCg(%NX0T,_' );
define( 'LOGGED_IN_SALT',    'TW]oExAa#&k3/aggxmdtbJnc~`M!+z|y<DMG,*M0te8ZD308)fi,-v3rk%vD3G6G' );
define( 'NONCE_SALT',        '8`C4YaFX<=>6[VOvEMb}9j*JG1Dl7q-N`Qx T l<iiHhU<&X}_o{Si2OCY!m;R}Z' );
define( 'WP_CACHE_KEY_SALT', 'Qcb(~Vbdg}F^{iSJx[`<zqfb~k+Za&,xb.siflcz(r]7 Yo337-t]s} md-]wwSd' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
