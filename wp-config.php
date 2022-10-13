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
define( 'DB_NAME', 'www_woainiaini_' );

/** MySQL database username */
define( 'DB_USER', 'www_woainiaini_' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Y8pK6SGTCe' );

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
define( 'AUTH_KEY',         '<5vzZP.CHy3xNS`(V$<BvZ0h[!vj}/#pu+k-z},p*hO.okQZ=}P,GV.tS}XwP+B*' );
define( 'SECURE_AUTH_KEY',  'Q>brax l(| GC8sDSaFG3$UvIR]-SU?d%[&ns}rt%&21?vcIY*S%|gZVR+Z=u#t&' );
define( 'LOGGED_IN_KEY',    '*b=V/eT6^>$s/_hw7cwFAkl.1e3c3t1SUi/g/5Bf=P=}?U9-BxWc]5aBM_+=^|@o' );
define( 'NONCE_KEY',        '2|qd;F&,r78L(p%xTH|(jd,MLe09HE.XRuTI>p3_`fCj7-% :>B4G}8o.vU^uvcj' );
define( 'AUTH_SALT',        ' aRb0&M*|b*{Hixi:_C;yL6E{7}.#vlOnf6JK+eA_*iGI4y))e`Nya0j3cv{4hj2' );
define( 'SECURE_AUTH_SALT', '1Qw7#YSb7Q )ob?RoHk*Cxh(YTl!<!8n.9[ha1D{IKE%1G[cN|Wr]fv3)MO`J>gb' );
define( 'LOGGED_IN_SALT',   'fdQTqhf;g?6k$.K?J[WM6lLP~2gE,ADD,D9 x0^B^Dxt77Ezu`Uw(}Dt?F(bY4/2' );
define( 'NONCE_SALT',       'v*GZ6JH3e.Y&o`Kx%F_Hhj:Ox9fG12B>lUfZl7T(ntwiuL#OGuvaT<0x>{b[Q`kM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';

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
