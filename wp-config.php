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
define( 'DB_NAME', 'trunvn' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Ei&oe4,>c3ZK`n!}.b25+W]xpJ83SWaKFSF+w_ak5OTPx=LAClEvn+G0p|dg[v~w' );
define( 'SECURE_AUTH_KEY',  '`%]!Sax59gHr.!g8FTMLp[r*WD+Y$(k7t6YL69Sq`Ju>`WxE.p G8-I$o3cacE[L' );
define( 'LOGGED_IN_KEY',    '#2/.W@?jmP4 19 &BUozfUkCnu67TTNhq3+k=.}Comp*;@5JeIGfZo7r^H4IQW!&' );
define( 'NONCE_KEY',        'ZiYYUS%o<672~DbzMH`.aOCiE8y`Q8Y,8-Fh4:6M:%XQk>9zTfV<[3{Co@+U6mZB' );
define( 'AUTH_SALT',        '^l`]j?*Ln$eCt=p^)?ZnqM$-X*79RbyimMF|p|myOcgWQQ8{Zg>cA]Fv>_W|~;W[' );
define( 'SECURE_AUTH_SALT', 'Y?QZ:Z)OKef=t!FNXh-9KM[pIBTFx]1LU{+pY^o>u&#01^e0.@|el08l&,M4mj4@' );
define( 'LOGGED_IN_SALT',   'y1^D:JnnOL,UJ)_L?o3IndxfZQJXvk~-AE]Qtk$@8?,LUbrlg<h:M.@xbi@Z^gj8' );
define( 'NONCE_SALT',       'h-37g!NA7/9nlVPQ#!(M<(8 i*vq0;c+D]OiTq#+R-wH-es<>z~FT)};cY^ID(g0' );

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
