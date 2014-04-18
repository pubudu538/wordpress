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
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', '54.255.89.75');

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
define('AUTH_KEY',         '#(g92hgm2gw04IzES!Bq~c6P+M+]LD0(O3++}yN<I} akR-(A]D4VrX!doO_/+Zk');
define('SECURE_AUTH_KEY',  'Mop|stKFuF[|D`p,30WKf,4z%Y3]&[ho|2J#c^-!}*F N[u3|nUw7|ez/e_b=UH`');
define('LOGGED_IN_KEY',    'omc]Ed`x5<h;2@azba{}8Kp]-sk0k4?9[2:||#8.m,/~-Wr8*i7+:XEc]zs}Wf`Z');
define('NONCE_KEY',        'UziSw*{qV>`X=3PM0F09RxISr>_9++_@WC8,pBjq3e}SmDXc8RD2bPqhPM:%AqV2');
define('AUTH_SALT',        '6%S-gcdso.%tJl2]/<HTR#q_G^6&PU=4&pD2M1%~zgDqCv-Ywth>QsvIgg|=W9g8');
define('SECURE_AUTH_SALT', 'zp,|u-qqyobr4!s)VvdA6WMl+g+PbQJ5Dxid|;-|#V)E&ztygn8t(u{k]1f)%0kZ');
define('LOGGED_IN_SALT',   '}jI:S,]{pi=F6#b|U>[}i]WAj-?)FpJWQv-n.E!jqkE-+-htkjY}Z#Moe8Pz*)*$');
define('NONCE_SALT',       'r1VIa2sUIw7Ag3rUZ|&RVP:9]y4#GR1dvbH,*[SWfS8X)+?!s{CHo?Jzr%YvH{4(');

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
