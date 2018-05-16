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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '(1J]~l_}c6Cd}bd*Cf x!kd+Z.Y>)iVa^7%VOEnmlz.vMIQ`:pm;9#{F=1?4$0q4');
define('SECURE_AUTH_KEY',  '$*vQz)Bb#I 3AXXzb>Y-{h?,(pxAs!E~Dw/c.Nc!J3Bl:e&%O},3><Ve?;c G|^1');
define('LOGGED_IN_KEY',    'U[o]RJ@8p5~|%6[2sg>pO&Z8gy~`|#y}N.DIUbmw?YE9}@f@( *(P=5JGRN/f%wW');
define('NONCE_KEY',        '7mUm?0]e$Qc~4lvW*`P?c:U]2o8A0Vt(M}^%bEAs7.SGuLD#Rex =XWZ!#pxUYV6');
define('AUTH_SALT',        '_+CHla#ik2@^$H~7phO0hR7#bTF[W*btg&BmQQ+B%hQ(b14ddP`Y7Ew0E+^2b_[n');
define('SECURE_AUTH_SALT', '^4|W4m?{Zm[xwQN-`rYRXof*Rz]>G|E`X=`-r*L)=Ov7-gVlh`qtJUlied:%B34z');
define('LOGGED_IN_SALT',   'z|Pt;oR.0b<X6m-&K-P0keG4% !m:6%-rrgS)Dp~Sl#YnXz#ukYb4v}_:P}u}()^');
define('NONCE_SALT',       'jz /:8P}pBYLxrGA@)hKP3FL/RiBmZ4V_>{],W!#:6(Ttg5|?*>N8`FcZ2/iBV;+');

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
