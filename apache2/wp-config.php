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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Luonghuuquan1!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '5RZ3A{Q$m-@a 2cfO_w,nElacTd^VIQ-13$fNwG#llJ74&g%[Q5Oz5.>RUOSH%,E');
define('SECURE_AUTH_KEY',  'OS_c|(k6ePM2/+S#1Ku`LI/WS`/-I?w|0EPJ3+xB9kMK+={(E.JqFWC+h!@^:K8X');
define('LOGGED_IN_KEY',    'gtsxqF}dz*PymaVF& jI?+? *SnU6;SHMia||vmK|r{~51tSy=FY&N1PK>D4#O>e');
define('NONCE_KEY',        'K3E..53Z b1fcz.:Jla[-=7<:ssbX}CC^O]=([TUWUtHMv-U0DY3W/1[+Q:Frk-1');
define('AUTH_SALT',        '~!H<tPmFo10-aoM6V|WN)Zoh/NQo8p#|}3_#hDI2M/R$5woH-DX<fdhCG1?Uh-]2');
define('SECURE_AUTH_SALT', 'o{eTr>U+v^KIP2:vljemM0*qy;d?<?[Vd%T+<4:`$mcgxcx9&|k9D:> s2N?OK87');
define('LOGGED_IN_SALT',   '7m@Q#t1>e;X/G`0^0v+^Rh1.-wR~zbq<QZ-|}?^Gbj5uiIsz};)uk4FT,C]%0-Rl');
define('NONCE_SALT',       'Y(`t&ek%h]5y7[,A+Ya~90NOLkR61y}OPs |h{L#+++H%^~Vd!A||c*$.y7c ylu');
/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');

