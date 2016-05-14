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
define('DB_NAME', 'wp_sashazd');
/** MySQL database username */
define('DB_USER', 'admin');
/** MySQL database password */
define('DB_PASSWORD', 'admin');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
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
define('AUTH_KEY',         '4SDnZn[2sN|<gj7(4Vm{u:otE[V0x$!mCL8r;j~-CtTsaq%rh %teCqlY2J<r>61');
define('SECURE_AUTH_KEY',  '8m[yX U+.aZG/Na$&S,nf_-#h93Bm!C }[Iq#?@Bk#V^X q}JocvbE`VTUW;/P|c');
define('LOGGED_IN_KEY',    'Fy1O.3R$:H8/*ka3-7UIMJy#Io&1W}&9zipAI*DxcAsr:9s$0pM:^^cMh1Q(;1Qy');
define('NONCE_KEY',        'mpTgQVevOrPX3#A^J2o)-+ -J/TlK`z}6hOeOTJF[#/fjG-/VQ+?5MCBKj4_d!3(');
define('AUTH_SALT',        'T8/}+d]UU]ILM:T(7n^Ch-g(?mJ+Ifc3o3mNV;Xr~ 7g+E!2HGG5Qj(%Ua;,e9]h');
define('SECURE_AUTH_SALT', 'D$)c#6AFj:I(E#5BxlbuFbXvM(rjIp||F2Yd- N6%aY9:Q~VNxuV9ZEIYdrodfRH');
define('LOGGED_IN_SALT',   '3H.}wQ4J,ercKS,)eAr5dhTnqP$!iY}x;&jd#^&9-kYfsnx,Tz+HkG3p7$k(:#dC');
define('NONCE_SALT',       'oy>sh|Z j.`!*&@!p$o;j2kw^A>Ta-l8|OH8fzD<zS*#!?`8[kYQo;Zb!Vw4^Fn[');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sashazd_';
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