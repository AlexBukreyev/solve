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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpsolve');

/** MySQL database username */
define('DB_USER', 'bukreev');

/** MySQL database password */
define('DB_PASSWORD', 'bukreev');

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

define('AUTH_KEY',         'R,fWhT:gK(fM2#k8p$*fK-V:8S2r{KPI+9hblxKCK?nNLs&1-,l_UXO(ADPd%t*;');
define('SECURE_AUTH_KEY',  'b8EF,aOFK<KejU+;3=TgQg@|k@#*NSGXs!P[v`1`6BH.MYg.fx;d)>c<d9TnqO:V');
define('LOGGED_IN_KEY',    'hW!Rb!=8Lb0*~/rk1wkVEdC8t{ jRUX`>Ls<0*x:; |bj-tzNAtPh-;/?|.,i-+`');
define('NONCE_KEY',        'H szKG2tYvt1Md2<$O#g?b;+qEfUR&<8LNsq#_s#RSXiYN,c|6B<2UY|`R#%o[c%');
define('AUTH_SALT',        '~w,iqH.&>Vno^-1b[-4uyLv~-S7/>vynW0J`R}X/RBSm[QlaN2]6zF#HUEX$LpM*');
define('SECURE_AUTH_SALT', 'wEV5Nn,lW|-Z5W?`m)hDcV@T wndTI[P|hy7[W]i|R+e!`ysyE+y4G[sdp)=+j+K');
define('LOGGED_IN_SALT',   '&uFJA7{kS)&#{)0bB8/C+S<%B_|10=2dDGt`Ag{I-.k|noM? +pn%Uhn-1]?|t|j');
define('NONCE_SALT',       '~4%vHt$x)e+z9.4rxT#BZivTdlR/0t|MD-86wnv&Kin!NauF LT?3iA`zJ-Ir[c<');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
