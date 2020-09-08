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
define( 'DB_PASSWORD', 'd99cfdab7b8c34efbbb3d4764f08d67f81a1954d82e11b2d' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ELi8,)CIx1pGaLt_/+,r;hf&&a3dX7b>LNvnt_!L;>[+P0>w7aE<u>QKL2~F|noe' );
define('SECURE_AUTH_KEY',  '92Wg nf8r*cX?q_%Im{ L%k,/&@<>uwpPcHOn4YJKN5W??A>K^b4M-dVH[(u5jqX');
define('LOGGED_IN_KEY',    '*f_()&uTOz/8g*(Noi6;|>4dLl?ULMAgm &cXbJrx0amE4MWaleMK{hkXd:(=jLP');
define('NONCE_KEY',        'R2mfHV:9N|C3#r${9xh.cxF9*(1B:tCl6{}Mp$iRj{){W>.Wi?4`nXLJCmK3C-Du');
define('AUTH_SALT',        ']C9rpS+9~oCb-WLd8?u1OjC><yFY>P,ya (gfQz<HS!L+{l-*nrQbu4>J*FJ1bo!');
define('SECURE_AUTH_SALT', 'pBamC<V2?+jU/vLXIF_@Y61<Y?$un~Y%@#F]D-bv?A.]z]nFHtGwy~+D-ziF]}^9');
define('LOGGED_IN_SALT',   '.-]Wmx9Qh,G|5Al?5H_RGVK:ER&!eo)0]Y@%nvn.W0OEMYHy/diHq[#T:|Uf/2&%');
define('NONCE_SALT',       '!{_~l8;-1Tw$G+oU8cq5z>fB7:acY),8JMB1F69q<9mxfawRo>61E_A{Ns}=ZHuw');

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
