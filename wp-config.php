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
define( 'DB_NAME', 'ecomerce' );

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
define( 'AUTH_KEY',         '4OSSX _aBe`E.KF}M.uA6enE53Hi6^<[%3zU$gRl-Di6(%WHZCq2]7!b%}r`b0De' );
define( 'SECURE_AUTH_KEY',  ';ji!4Va&14!y!Q&c#vCs-sZ[9yFl};M<Emm(*xD%+LYE (H0KlzrU:-[$[2pQi@)' );
define( 'LOGGED_IN_KEY',    '*ByWttzw}W-WcTq2Sz&l`45W}L/esNrX d4&ehaKlk%cnC7C?_G32NRs)}R+]fD]' );
define( 'NONCE_KEY',        'QMvL{n%H~O7a7E(pg8Y6TRnn8V+A(@5prg[+!Ui_ ,J<!fGJMqqHVc!B)z LvU&_' );
define( 'AUTH_SALT',        'g:]{1p#h%7#>N0@{P3X0/u2Y=u[W{8.vKs:fd=`MX<tG3(ji$Ft7[Mb~dR@1jI+r' );
define( 'SECURE_AUTH_SALT', 'akNN,<zYrKylHbx#j+so[^QxKjaZ4<8t=(+#M.*3|j`UKXD!&x,R/;;,Ze/A=<Cm' );
define( 'LOGGED_IN_SALT',   '(~#2UjT2d*_s8/z$3[V)sxMI<F<Xid*hCr~tX7}Xw] iWexups6bhQW7wiP%R0eA' );
define( 'NONCE_SALT',       '[UNlkGoF*o`i5cYlbPR~dU[&Q)GMFP{ExKF Tt=VJa7OULb29]Fec[GI$+?8}L ?' );

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
