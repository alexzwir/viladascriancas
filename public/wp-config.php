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
define('DB_NAME', 'viladascriancas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'A+kPMF(~7!Fh^B/M!NlWWQPo$?0nJb~d!gw8y/QXtvC7vL,*suRQ![WM[tIj)DXA');
define('SECURE_AUTH_KEY',  '1{.)8GxVsP@TP9U6g.py-Z,Fc6!D&9mPOYZw|oV:>!gK|55BpdVikoz9G>7|b4ks');
define('LOGGED_IN_KEY',    'X+MlELDM?W$cwkmC$}djWNdb%`xXt+}bQp#-X>{7;XxC=kCuS,d[x`EC-0PJaj9~');
define('NONCE_KEY',        '6zqG1i,9F)*H3;pOK<eWabRNzO%nz>K/4|3L)%)kJ2C>Iu-QB8H&O)Ur_h,>+4Q1');
define('AUTH_SALT',        '8Sn5~%x1?27RW#J;{uxU9PCS`847-)NtH2|O$ZPo+rS6i:!~SM}b#J95Mh~9ADt6');
define('SECURE_AUTH_SALT', '4Og(L`AG-F?e>U-CwoNXMijOoc[x~#IQUdF+sv~5|L(;kx<$|&i6Dbh(sBm$9hf{');
define('LOGGED_IN_SALT',   '_#.F=DX2BFlmy?Fc+j3>(.p|^J*P2J6!K)_`iJC^vkD#TzLPKTu$w5$~^%GLpFUz');
define('NONCE_SALT',       'JqMLxA,HQbj7k/l}1[&<_S}m,bQM9|xQ+2<^W[WPku-kc-r]$G<Z_Iv`K|zm-cJu');

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
