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
define( 'DB_NAME', 'Firstresponce' );

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
define( 'AUTH_KEY',         'Rg^(1I=c cxK&PV3}-9Rzmes)ME^23D:BHKZx,|6#nuH_n3#5o`Ayr%rI3S|[*1i' );
define( 'SECURE_AUTH_KEY',  '4&Ui]bY$v]68y]ocF{cf,,ZF.3m-ErezEfuz##k#s-or4(g%)$)#FSy/e>.VcjC>' );
define( 'LOGGED_IN_KEY',    '!Dq{k2p)OHx3bqb<ev 1OW]}hx/.[GNk5Qqchxq6n/oV@3[TN0zLzNS]*8 H8nNH' );
define( 'NONCE_KEY',        'Gdpn4^*|nq[n=Sl2T3T qaz8u1?6R&IB7GWZ}ta>/}s4A`sjBBCSe*bg!4~TALOY' );
define( 'AUTH_SALT',        'Anqe&aWy!!B_8O,,;Z~Vpmc3Ybz=t(E;=pK7s3$J[L{5r{n1sh9Fe(>e6i2Jt3,4' );
define( 'SECURE_AUTH_SALT', '1:NVf%2I_}E_Mqj3OFRy,fEEFR-8hT#u08_JjaGI=*SS}g_!XXbeA,?fQaF)K:SF' );
define( 'LOGGED_IN_SALT',   'I&X>g~/TPEMHXB$6#khQWiRC<_~~>a_?@wph$jIOLymI=nwlI0@Q$lG!wC7oVAPC' );
define( 'NONCE_SALT',       '6~JM]%8HB/gN)GY{PO8N*Pj*]v<0*^w:6EBb*w?~TU#W+Pxf(zs$sVx!pSHS$HJC' );

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
