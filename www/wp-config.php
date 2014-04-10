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
define('DB_PASSWORD', 'rbguqwfj');

/** MySQL hostname */
define('DB_HOST', '54.255.116.127');

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
define('AUTH_KEY',         'RPYL.8JMzn(xZTM;Yb|2$}:IEV?6E!v%>bC|*8+E=nCW$V=tP|5[-`_@y.B57kx-');
define('SECURE_AUTH_KEY',  '-6B75B|cn2vsZxc&y7@>7bkTT#Cxl9A9[?F+H(tqa}0>}d1,aD|MtM(]q@,+T-jS');
define('LOGGED_IN_KEY',    '%iWfICP`uCa3Akb&;j`{^?!{]yHi(x_ncbDfn|~04:/:j]4T4IJgD;yRt4.?Wge$');
define('NONCE_KEY',        ':r{fW)w$Fzrp1|zVe{%v+1Z)bk|DR[Jfss=Y4 OpwW:V*9|`ScLp&MHv1%{5X[YN');
define('AUTH_SALT',        'IvR$D?(o3zv{-fQ2qW*eWu<A}L^H=Tk>R4 60xwD#yx/P7N02xw$Cm7o3m].MFVj');
define('SECURE_AUTH_SALT', '7AJ=8@|+SH4=&|y6pvQ#@;h;Le6Q?,VWf>5Z*25z}Vmr+Vj#q2G4+Z5![TRbn[{>');
define('LOGGED_IN_SALT',   '*w&F!N;]T.J&zpI=wLYijH54E2D/[+`{}{nQ,CjZi^qQC<)xoBo%Q`-ghx0obz/W');
define('NONCE_SALT',       '@/|*g <%aqt+$zYC rx-JK^ZJ>?0+.RoY !Qj bt=nUcJ&#VbrGaNhwA|(KewYf?');

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
