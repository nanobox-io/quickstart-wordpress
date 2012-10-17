<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_SERVER["DB1_NAME"]);

/** MySQL database username */
define('DB_USER', $_SERVER["DB1_USER"]);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER["DB1_PASS"]);

/** MySQL hostname */
define('DB_HOST', $_SERVER["DB1_HOST"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CZXqM3v7WG1Xg,W)zj(0/%g=nS;.W6$AWdU0NctIoUhl]17(7Wu_eZbQy^2+MJxj');
define('SECURE_AUTH_KEY',  '_aBS&c?Y[UhSd~Ifm*&cM)kV8}L/q-N(M1n}5/c)k7GQ!d!j@XP5JoHho*x8^nuU');
define('LOGGED_IN_KEY',    '-hdA}nu~x_UL,O:zXtr7LgC~20679M/y4}HKY/Y 7O.m(<i+l60-=a&l89*;(e_o');
define('NONCE_KEY',        'jGYrCMkk]0Cm/oiT5_b_(ykYv]<5Ez ?w:;*p#Ga=li:HRmwjAvX_VH]0=BTN^XY');
define('AUTH_SALT',        '!W%^P4QSn[s+y(Do`;SdvK S+?`,V`6K2+8xsTeAnHG4]T;3KikJJ00 #3F =<Z(');
define('SECURE_AUTH_SALT', '5GFYpUPex.81bS{=S0SCC-%e ~-//YUl[Y@(/k24`1c]71CXxQaZSL0X`*>_|x;U');
define('LOGGED_IN_SALT',   'ih2o:)(Kg}8*Ym)%42D;7_RnZ*P&NgSzyfzVoK^kmz+-m4J=sr4(h?IJ!CkKc,RV');
define('NONCE_SALT',       'n_cy./u^U l6-#Xzn3g%n*%#m#HoO=Pl:8:6KiFmhhW(FlS#anjX/8)6B9nm5R4d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>