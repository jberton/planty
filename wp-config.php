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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '|5e(@E^x<Y/i~k(UDWlM__D{{Vq4iywwVX,WbQYLrH_u]{0,(<v@/O[/p6s]Nf*3' );
define( 'SECURE_AUTH_KEY',  'ni8rdx5pzW<H^]Gj)=d>LL=7ptb]RbW~{C:v.`k!>.F{u_nm5_@75f=]%U]AZ9JP' );
define( 'LOGGED_IN_KEY',    'iy/OL+u)Q(6HDwPUP&AcH5V6I7z;;VNaMx8;Y@f7r?fHEQt|C()C%FC^Q[`VvH9H' );
define( 'NONCE_KEY',        'OIj$LTUKvcVdcmQ!FqcBL6,5q(F_j<K.;tMw{2S{DKmoynu7XLZWqEG3~rFq+Ju@' );
define( 'AUTH_SALT',        '6cRCa%Jy`p|o5irdMtwhO>OI0xrV=4:`^/-yRZrU$4~Nd7i2}pTevq~Hi)5*9g!_' );
define( 'SECURE_AUTH_SALT', '%2dg:J-7]Z4)_|a(kKtz[n5V{By(~WYG.gT/h84s8,:km?R;_*l.M~VxlZ_c*Anb' );
define( 'LOGGED_IN_SALT',   'W5lE|--@D,TP+%E)4iT+HEdF~*P<|=Yu&iwvHkUs12mD>Rd%*kTx.>F[q;eyXP2u' );
define( 'NONCE_SALT',       '`{uS2u:ry0+mT;Cr3-EOI >aF)85L)MTNRPE2x6+&En6P}ZEccQ5l60jP5R?v+^9' );

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
