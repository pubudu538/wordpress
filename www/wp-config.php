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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'lgkefykq');

/** MySQL hostname */
define('DB_HOST', '54.251.28.26');

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
define('AUTH_KEY',         'R|$%hw!:zdmA}PHAf)Oc^(rR+(*U>fZU3#%!|@>i3I:r)dh1qYbmG4RRc9{sK(Ws');
define('SECURE_AUTH_KEY',  'O|!-ieL*].6|A{-,WQ-ceOKCpYnBkm-4:+.5ztUtN3gqtGWuVvDzwM*}`C]x1uf$');
define('LOGGED_IN_KEY',    '9~tx|B8+^2pNf|zz|OTF0u+MLSP8G.0T_%U6Z/0|[z2uGGO]2o52GBZAV`cV+[+E');
define('NONCE_KEY',        'DR0bYa2v0-LH^O#@:y|M9T#MReD?l :)u,E:#;d0K>.l9T)}_W3w1v!A-646G`&F');
define('AUTH_SALT',        'T&kU2X6Zs@yPs<%^H~rgeEU=4T~a=Tp[A)cDM[_9ns/=G<IfvgtMid-&87wb7&.m');
define('SECURE_AUTH_SALT', 'gC8~iYVnDe@sah#fYU!|:nNt4>1W82VmgV,|mieU{l />FH{ErOSgQq?7a0$L$B8');
define('LOGGED_IN_SALT',   '|P$Tbeye0nC0iW[zKRdoRz=,FzY/%P8)5$JT1|$gSHC+rBp4@U*uRCwK-8-+JxAH');
define('NONCE_SALT',       'Ub$]C:V+GV7n8=;xZVr$e4]-^r}tbZS:w$$+luq%jP/nLCP&dw!$<B&xPl.3:FZl');

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
