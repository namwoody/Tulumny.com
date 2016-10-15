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
define('DB_NAME', 'tulum');

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
define('AUTH_KEY',         'l,ziSnRvTIozK0XT/<a@u^A9GJQ;imbWSN^^IVF<#lQ5z/f)Y-a~J@ju@f]?KCTZ');
define('SECURE_AUTH_KEY',  ',D7@Mp6ql[w(,_5[L p!uP}tyca4?3[I/@=kn*jnMFb8J9f_YY;Hd9@LF^EGMV7z');
define('LOGGED_IN_KEY',    '9=- gN2AVd{w-nj%,CM&o=91vxMH9qGZjaCrJ.5+G3MA&: Mv[uxex1QPZ5uDUKL');
define('NONCE_KEY',        '%f;RIMt~f4ja70Lv1-cR55R?otcXPPP,;L|;EBO{Jk#%cK5! N3!{n5rj0fgXB>+');
define('AUTH_SALT',        '<f]{JJSPZrP25Fy/zHzQAOkJ)!;a?mq/r~k4LHa{e:U*zf>}t.$%EA;*q7rgWB86');
define('SECURE_AUTH_SALT', 'FY^F4H8:D%+XR[29J{Yh.:t*n+R}|BGwlB5yQKt5vFeq4h.lo07hm*(_1PVv~!Ia');
define('LOGGED_IN_SALT',   '41rcJ%8PRdf~Kq%qVa@fO[)=,[H<S)lH;1]E&5>G{4#Y^!FY+Wl1(w%D@W{unyU1');
define('NONCE_SALT',       '-cC-DlBRmrNom1pBfzydmdZ;QrYZP;nCzX[D%vv*7[N%7#*&N6hH!Ue(iA&lw=DQ');

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
