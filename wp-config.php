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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wp_customerblvd');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f%LL80<|tVx+i5J +tCcBs,6?/c9=NTW,Ek+F0Mt|)c[?ze1q.J+EoiJ!FxfR87p');
define('SECURE_AUTH_KEY',  '!evk6qxp]Q|co:ZfBwz7VD#!,b<FbX{&Kp19QU}rj{97d(}69{zY-/N(I~FdRogP');
define('LOGGED_IN_KEY',    'T)P_Rr|<G9 ^K/?~YQH%H$@AY>UDkE{ezo-m)LwC9`(wB~y@F*tw.4#<Hv 2)j&S');
define('NONCE_KEY',        'A.|`Qh=P|h3K}:DG;3=LG-msY6FvM}MtVhB4a-fn1/32*v|v^Imgy%rS}q>(}b92');
define('AUTH_SALT',        'DuvQsdQ.QpKGtZ+WC~9gw5qNmJE%)l1fR~WYki!|Ig+Wdw[$k:2afmP+5&qC?{{2');
define('SECURE_AUTH_SALT', 'U-Z<3[!uwVykQFs.V;Y,+mjKCJ+*fQa23*?=y^lw7vnM&BVvXrDh7-h,eD{.-:v4');
define('LOGGED_IN_SALT',   'PP)/(hIl7<KNc[?|!ku.[kP|2-NV5QI=iKFofDtc5EhAHoT|x$r.#T @-Fcs,gv1');
define('NONCE_SALT',       '/U+mN?RK++Fi%KuWDI^nYm3mIYxEm*`fZPFEKjES51K*^g3u2qgL~-~Wl/ B-Ur=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cb_';

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
//  */
// if (!defined('WP_SITEURL')) {
// 	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
// }
// if (!defined('WP_HOME')) {
// 	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
// }
// if (!defined('WP_CONTENT_DIR')) {
// 	define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
// }
// if (!defined('WP_CONTENT_URL')) {
// 	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
// }


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
