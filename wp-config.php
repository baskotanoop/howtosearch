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
define( 'FS_METHOD', 'direct');
define( 'DB_NAME', 'howtosearch' );

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
define( 'AUTH_KEY',         '188A<ghkM/6.@<Z@ AN|f0.g6z3)>qA2I?TC)--JADr~!`(X$I!ro^[;ttQW8!V9' );
define( 'SECURE_AUTH_KEY',  'q~s139onih{}o.u o&k`lgv1c-V<#tx.`%xXg#&P1fiM-#o 5|~ZdW,N?kDp49to' );
define( 'LOGGED_IN_KEY',    'mGl-RJvyP:x?$,j#P,hlvO.7nxM+|bKGe8%]-p[[WMrlhx/Hey%wofX7b[xA{j$D' );
define( 'NONCE_KEY',        ';wU9O^kbJ99t3[03%G^S!>5rkPw>Sn*5nA@C-.sza FC66=|De9.vg)lZewCoR:G' );
define( 'AUTH_SALT',        'v]H=_6$J~]$@r:GFG(FX(EKg(IDmT^ Bon]`B-+Nj^FZ}>za]TePGD0g C8STOgd' );
define( 'SECURE_AUTH_SALT', '^2>^8+RP_Y2xhusF1`OO/`*l1ro#A]=_kM 8nwF.oNc}|uC*T:TX{$2BFNz}FDUX' );
define( 'LOGGED_IN_SALT',   'o?|FiVB!`~Grcm~Q|1xr}to/mLdo|e*?{F[LjC6/j=CfMJ)dh<O$Ui.<1S~;eYM?' );
define( 'NONCE_SALT',       'f[Zb|E^.Z&>[kIE;wDU3QTYMvG{ZtdJA!EXiQNKwxJ?DA{XEMhOe)Lq8&%~5](7K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hts_';

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
