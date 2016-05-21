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

define('WP_MEMORY_LIMIT', '64M');

$db = parse_url($_ENV["DATABASE_URL"]);
if($_SERVER["SERVER_NAME"]==="localhost") {
	// define('DB_NAME','finpipe_dev_db');
	// /** MySQL database username */
	// define('DB_USER','SashaZd');
	// * MySQL database password 
	// define('DB_PASSWORD','pepelepew');
	// /** MySQL hostname */
	// define('DB_HOST','localhost');

	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', 'wp_sashazd');
	/** MySQL database username */
	define('DB_USER', 'admin');
	/** MySQL database password */
	define('DB_PASSWORD', 'admin');
	/** MySQL hostname */
	define('DB_HOST', 'localhost');

} else {
	define('WP_HOME','http://sashazd.herokuapp.com/projects');
	define('WP_SITEURL','http://sashazd.herokuapp.com/index.html');

	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', 'heroku_5596d02fb54e5a6');
	/** MySQL database username */
	define('DB_USER', 'bba04c82f38052');
	/** MySQL database password */
	define('DB_PASSWORD', '479832ea');
	/** MySQL hostname */
	define('DB_HOST', 'us-cdbr-iron-east-04.cleardb.net');

	// // ** Heroku Postgres settings - from Heroku Environment ** //
	// // ** MySQL settings - You can get this info from your web host ** //
	// /** The name of the database for WordPress */
	// define('DB_NAME',trim($db["path"],"/"));
	// /** MySQL database username */
	// define('DB_USER',$db["user"]);
	// /** MySQL database password */
	// define('DB_PASSWORD',$db["pass"]);
	// /** MySQL hostname */
	// define('DB_HOST',$db["host"]);
}
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE','');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gv-GDF;x/j6-++Jqmqhe?O -3?O1anJ;9y1|,RkIpdkV6liKqV53&hko|caj4+)f');
define('SECURE_AUTH_KEY',  'D3CBXiF-jt#*?8ine&<4m)yzCPAb,d22}s[6(*:VY{2J2vJ}_X)dZ)xU6a:sU,4T');
define('LOGGED_IN_KEY',    'xW^,sSu5.28c7vHs?)+h/*>|h4urmPZOIR*F/h*e+B_!m?FjS|_}8;OSTro:C$7,');
define('NONCE_KEY',        'Xy0@D7*2`))K mtluevC<kU$*LX@@)Fxy8WX@G6xXIDoAs>2~Y//OleI<Q5w^=hf');
define('AUTH_SALT',        'Y$,}Tk-XekGWH/AB0XPm|A%%yy{h>.NMtKSyhEi(:Hu;W5b*bE:HRoP{b8U%NrEw');
define('SECURE_AUTH_SALT', '<&HLX{?0TLgI$J`:2.HYs9;wsgm]5^dp9tb{&?(UgYdZYOdfA|,Ngw;lj!Vq*PUI');
define('LOGGED_IN_SALT',   '6puq`sqg3J}6BQt=CB|}H9px8AZqdM6JTqK2f&qFguUCw^0F?J,=Cl+o@_X<pq)G');
define('NONCE_SALT',       'C!0()-H#%%:i{<jD=v<I7OiHecw?]!4?C)XydqoW T: kHpP#CH]s||K 0$RTXC$');

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
