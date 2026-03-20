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
define( 'AUTH_KEY',          '_TZrx2T+h`qb2Jrv:s.2~/dob9=G_Y`uNfU)c-AW~E=Hk,ZI=KGnsvh!xfFLrx<p' );
define( 'SECURE_AUTH_KEY',   'jA3S;=}T}KB1uA*bMO/GnIeJSRd9(9xl-2tc2)JWJ^lyaq9p<AXz$E#9H[d4JylB' );
define( 'LOGGED_IN_KEY',     'rYSi&cHCOnc-r)<bX^h^a6=HX-XCjEcx~MAmCA!j*)ttpTE:^=7^)IK1zSW Fvw_' );
define( 'NONCE_KEY',         '7/)Pgy>7b&K;4X=tY]?O_P,#j.@,pYJ7)~_c!d;@qx<FiKBQg,}-oM+Hh+sYCdPu' );
define( 'AUTH_SALT',         'E6#j|aA5^3%E,1a2jj8w`Rie,}d7pJV5{L1}Q)*x)BvFIt$7=0E=1[(K1Rs%g[F5' );
define( 'SECURE_AUTH_SALT',  '}|etc-77/J(O.Bn@-SbBk3cO4KI/z#v.coKvVHt3S7OBjzFuQF#EISy cmU5Uox~' );
define( 'LOGGED_IN_SALT',    '$Ed?5`?tF:]1dbCrtwkC!W7~9VrxQk@p!Gj)G/TLh)-7/> pqKO3$V?GCQ P,k/y' );
define( 'NONCE_SALT',        ']XUB/s,vhI=T.?W,pUp1WNi[i-q5479C.VzI=Cn^M8~$EHcsg6e>uh:&+hqln`m@' );
define( 'WP_CACHE_KEY_SALT', '5HtMRFc#ik7B<(9U<B`f0GKP:CXl+Dwd4KA6z6bS5(y*o-}7L#{8Iq9~$Z~f;N6L' );


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
