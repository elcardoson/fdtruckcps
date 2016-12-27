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
define('DB_NAME', 'wp_foodtruckcampinas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '35245227');

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
define('AUTH_KEY',         '+Oj#.}EZ!Q0}Xt4ucH7.3U?9kRKE=)Tkpy/7/BinLx9@Hy,Iq-3WQ,u33u:=.SHK');
define('SECURE_AUTH_KEY',  '7h)VN1gb(&8XJ,JGbd=J{cV-Fih]r$^EF6@n2+L!wUwgK{x@.B&n:M))dgkvE%XO');
define('LOGGED_IN_KEY',    '/L${zc]=bV/S`EuWnn0^Z}@6h1ww]TGUm-j%7sg&/QB@)09?p&}-ZcrmR1KVw{ib');
define('NONCE_KEY',        '>$G%zH{V9Q>pdQ_Mb}93,niU7`leV,#c^53}H=*FD+Yy(];!x{AfN^HSZb)|;]v{');
define('AUTH_SALT',        'Z|$tDWnJk_-Tof57DP$l?l$}qNR^]?(PlPV/J_Sxk~Oh?qxGo~9H+7;*j>p(kO *');
define('SECURE_AUTH_SALT', '^0sq|[;kzvrk0?bV6;Y]H$nQ}^b,mjydIdq[W yoMmw-D<s~*9&2[ (@+Ne}B,<>');
define('LOGGED_IN_SALT',   'Uo7U|u(;hnVmDjG%I~uRHe4w;O{m6KgG^qPVto9B+zM)e,BI:?=#$A#h;pIWCjj~');
define('NONCE_SALT',       '(l^SM1c7LI@|M?Q^ HsxZw{d^2lS:*w#-UP`s_h{$Vrn(g1WD>SCEhyYoDK lfML');

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
