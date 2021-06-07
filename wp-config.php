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
define( 'AUTH_KEY',         'G7i18<]-cuS0-#v-cp)^v rXmT5=4&%R1aD1uHe^dJ8ul4eq#u2&V/um FO^%<{F' );
define( 'SECURE_AUTH_KEY',  'mAb0EK^1{z1sb>:>!.(;z`uFt!VeA}93-{w)K_qvZ~M*l/Yfutp);i;eqakQu~Kq' );
define( 'LOGGED_IN_KEY',    '?g7p!R~d5+f/fi[xM^1Xnv?,mniUrIxxIyJ )q$JrD_zkg<aQF1.<n-nUhDQ/pz?' );
define( 'NONCE_KEY',        ')R|52dhH}T93L$m#UiH`O]n:[$B9m1As]3K3MC3CZbb;PbEXbyw*Sep&1!Wl_)<5' );
define( 'AUTH_SALT',        'Q7+&*Ii0;1Egir(7o[oEb_lbt9fa}lQ$#]2MuuvDjxh*Zi8cW3Z/NveaJ _n7.o.' );
define( 'SECURE_AUTH_SALT', ',M pQJC@*-P}FViMna`TY(K|3*dK _JU~ZF@Kss_~fYX4YTM.,~#PnfMB 3f&DEI' );
define( 'LOGGED_IN_SALT',   '<D+i|WX~q&OB!l^;L3M4QU%d7m9%BH_G VRU/L,Jbt$V+mXD{}{;KsU)kckBkOh^' );
define( 'NONCE_SALT',       'guf*9| r{_1M;B*G&,7S*>ut(h?42#UV!mGx++{joG4M)toD*_s[3e(`XzXw)W/0' );

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
