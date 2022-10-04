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
define( 'DB_NAME', 'robi' );

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
define( 'AUTH_KEY',         'QXGs|oTN^G4Y,W*efv*r*2Z-OL?;@h-~yrh7c(-4vicgW~]1Y4p9h-5b=%M3C{|)' );
define( 'SECURE_AUTH_KEY',  'HxaeE/,L)Z3EH<XYFN<Rz!76Q*fm~ezr%|].09:X(r7:>*/l%(>SG/9Y@,X7&9}E' );
define( 'LOGGED_IN_KEY',    'n%h@@{+SHDJ(r B]:=4@z*,dtQf-Y~9Q0#1!E3:FpGG6@z4qU{~IP(38z6+R69[ ' );
define( 'NONCE_KEY',        'BYvL$N;CPZ.LEPAZ6GafxO[beL!bcf5,l?mc6:5m0$iK7Hj8#2CL-fDM0FnHrZ5b' );
define( 'AUTH_SALT',        'R%Tyr[T<H}-:,jRMb10pLV)=pxx4Z-R$4**_bc/4Yfr;{6C2f[i-y3^7^k~~}yb}' );
define( 'SECURE_AUTH_SALT', '[?Di`/;/<h?tb5?c,JbGSUT`QFo`ciq{y+%S~cG6%deeikUW;{[9>)1xu=EhQ;[,' );
define( 'LOGGED_IN_SALT',   '6Z7DU 8fG>NmE<$V[)<36Xs9RUQA5v_)T0q(M #a_P$rY^yfQ!9a9XtuSrQ7_`P?' );
define( 'NONCE_SALT',       'jf2>6{F WMg1Ir2PJHcpJDL|ehN@CnDo(dSQ?yB]#`EaF!n74%k/Q ~3TRn~l%B5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_robi_';

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
