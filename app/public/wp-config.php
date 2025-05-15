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
define( 'AUTH_KEY',          'B,SI1cf]ge!Y(FWKg57LRp^k&|amdGV8[S`e@ysd+9=[H&?g&#tGp~kl|}H5<2Ag' );
define( 'SECURE_AUTH_KEY',   '%p|?e0BTP%jXrIqs{Q/>i_1:rcB#K;Fv(=tVCVh33y)mpm]BVTbxs%DbUyZD7=!:' );
define( 'LOGGED_IN_KEY',     '2l]{]iT}V,y#J;$gr+2=r@t@,]db1;C4CZ.1PE@kf]2Mptr?TJ]lnz3Ut{3LwLXP' );
define( 'NONCE_KEY',         '5o|]Z d^k9q#u)VHDn Ii`^vt,.QD5nm}.I5cy%@C` N,0K`h$b:mzXPZ?o^|:_5' );
define( 'AUTH_SALT',         '6&Leg! fnLnC_<(,d(of`3YapjF5^vlm96rd(v)^w7>3,@*%Vqm&_O!_sz2Jw+F[' );
define( 'SECURE_AUTH_SALT',  'RPPtLIK)$=RL=UoL.p!2(<duqxbgO<6C/J.]9[WP+XCgSe=ao&]|~!vmwV|%`iE{' );
define( 'LOGGED_IN_SALT',    'b;aLF&)}c|ZnyX P+F;P54YkqWhcd?d]IpW<NG<.O2i[V1^zDK{^2Ub$y!h l4Qh' );
define( 'NONCE_SALT',        'y#D)8lZc3`u<c+35Romx*Kf=KN=#MX B$Ny6fXMrz82hbCS`SIRd,V[l@c7~Kbew' );
define( 'WP_CACHE_KEY_SALT', 'uj=V!Qu`BXW,};ktt(FG0+N$ALTfchzAk#9SF5?<-|f!Op{4ry:07zWp/cW@V-M|' );


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
