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
define('DB_NAME', 'tulumny');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'D7Hpk2lRsx');

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
define('AUTH_KEY',         'V|[0*NXi@V>4#ARng~ %jmyG:r1ApE?dBy{4(O5MN%&%fNJT1v,Sl7#Y`d5h]i.k');
define('SECURE_AUTH_KEY',  'kEX2h(wd@vQ?s2zi2q=bYBT/tE3x(,G7#A9&x7nLf*#8UAK00w}~Tx{FB3[*r:.b');
define('LOGGED_IN_KEY',    'Vr#,u+;mo/cOUbr`VLC`K/13vb5(>5/jX-6W0ami;E$egp)3Oxf@(?;8%HX5B[#w');
define('NONCE_KEY',        '|KNSC8:goK0@#7>U8IvR<=f@|/`f#(,<l}l9RCrh!7MTsR_-}QQ6,r)=51s65`G$');
define('AUTH_SALT',        '4BbdIJXW8qul)4qR8M~piE4AW zuEmHDlf%>Z%Z&oqFR^8y[k_5a;vqGiZ_dGa~]');
define('SECURE_AUTH_SALT', '*R{vk}5[S2/E)<K;6h}IcC+hsQ>+7L<)^75IIbSvSE_w*{L|blub+{]ZgzeVP%]M');
define('LOGGED_IN_SALT',   'U>B?7W5=+$U3VQU(,} W2vIxDSRj1yPMcJJ&Zr^,G?xA_TL--.o#TW`A!?]YL#,I');
define('NONCE_SALT',       'w*%q3+Y8`u`U-QC1V;kbJt} *5jk6 Fo+PYwih:N@+.<{vpskdLF0p<?D%5:F%=E');

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
