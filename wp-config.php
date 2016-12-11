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
define('AUTH_KEY',         'R8g$V?JMKsvhpb0-.z%?B%,uV~$9Picia9KaTv.#1z,*S5Ri|eXQeivfND hJ^a,');
define('SECURE_AUTH_KEY',  'F,Vi3?9sY2bd|wMKmdf@d6PzNEJ<n+yQFGp|0_[KE>&AJ_92j5vDcZ{1r]TMo-h*');
define('LOGGED_IN_KEY',    'mCkK.c.Z4i+QqJSG<]K4u_`57bI5x:z<23x`VgH]q2}4eifh+!(-N!Tbt.]O.GRX');
define('NONCE_KEY',        '^B;!vGAZgv,^d&]z~NlSOX+INijfFZ_wq<xHqa:$z)?%iP4jS%Hc-,{=F}sh`-a_');
define('AUTH_SALT',        ';:k`NNjDVIMcL6!IZwkkY7+`/s(D-d00Gcre+y1~9!@n>{];W7D%6gcG$!BT  P_');
define('SECURE_AUTH_SALT', 'rTy&^&W#ghOy/I:HUy88TXb;Vq|_kPi/z4/Deky=Y!^)UeiU#k;EZ]=}-`M|/WfO');
define('LOGGED_IN_SALT',   ']Shvc>qP~b:(7?;b3QK&.?1AW*KQ-7O^ZtH-oE8xgCA6S~d[HDAwzE&6qcu%1Z70');
define('NONCE_SALT',       'NhLwdKZG!.7@$-b8x3~3Hdg^#-{>/bf7DO5N/JJB.7QlHTnZf Kw5FQpy-7,/~|R');

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
