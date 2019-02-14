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
define('DB_NAME', 'dverivo_door');

/** MySQL database username */
define('DB_USER', 'dverivo_door');

/** MySQL database password */
define('DB_PASSWORD', 'bur8y3u8');

/** MySQL hostname */
define('DB_HOST', 'dverivo.mysql.tools');

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
define('AUTH_KEY',         '@+WCtp v~R:xR7mgof%+!]KzbQ(o|3j5`pSIY@IpE/23O!B}y5re^hk2vRSTl>u$');
define('SECURE_AUTH_KEY',  'EZJ;~R CP i{ro 1t@r&@/wQY!%:eEHoGQ`718nBWiI;3Otw<d}(QyK%AE;20^L!');
define('LOGGED_IN_KEY',    '))tA0C?GZ&9.a<h<%iucz7,Yh{Pd|-jTJF0GlIJuydOBNi&$%otRmm)S(B@i>DhM');
define('NONCE_KEY',        'Z1{=yY$&7HwGS!K&4Y2iQqtVGR0`l|l+| Wm2qd|_TL 3P{)!y|#*c.FO_kTYzn3');
define('AUTH_SALT',        'ov:*pa^5~P <0Nw33YYVX_Tnlet;8&:$ZH83LqGKq|-24D}`}f|gzE)#tB}pt~W}');
define('SECURE_AUTH_SALT', 'B gY5xy$_s:eS!3u^>i]A[B;T3RK0-2^DZCe!5}zD..9RQO/P[2Zk $}:U,Q|[%H');
define('LOGGED_IN_SALT',   '}$xM0^0].8H}EZ$JNN9xMCA}xu|dHuYUX@VefW>PelbN/M&Um!.B-^+n${hU]d=K');
define('NONCE_SALT',       'CR9qNqFfcfg:Zo#,I3(Hng8|q,%vy$+fspB#^yTuBG?YoY|vJjhY|gxsW~Pk^0d*');

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
