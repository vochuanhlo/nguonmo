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
define('DB_NAME', 'baitap');

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
define('AUTH_KEY',         'K/w3]}Y^Z*S[HwtO%kOVZ+z?Z&%j[a! Q{A^b#IRH&Ah{MbvGg qn@iE5seK,r<p');
define('SECURE_AUTH_KEY',  '82iANeqzu/e0dy;S4J}GgR8m,vMNYyZudGk+VV2W(%N/A]ZA/$c5/M{yV|<5hs3m');
define('LOGGED_IN_KEY',    'K}=|Cvm;Lk _+(4ib:Doe:a8;*,js21x.-wQuFa>drxvm<DM2#im3osajs~k^d@>');
define('NONCE_KEY',        '(IBYuT<2bL !1YEF.[U*`HW9doN;d^JL/5t^LeW1-!$8nyl|%;ly8A^Rp^irH<?/');
define('AUTH_SALT',        'VPTrs^H(!IE -i9-%}1M]o0iaGJf1n`)f} l9w,9$H?P_+IDE>TY305sVa&w$y]X');
define('SECURE_AUTH_SALT', '[1WVCio)hn,$1^;6U0)~7AUT,IM]w]E|S0)8s]^v,6V:M6MvLT!@Hy@k1&Jzf!}C');
define('LOGGED_IN_SALT',   'e4(^WH}y.G: FuuY^qkLc$Jd!~qIkq6HI~;5rJ8|WlX~wS;[V)M3qhSb*#IxJ&2W');
define('NONCE_SALT',       '=[JRmn^me;?D^$(#^VFYw/xpvRgg]vsLTfi .t} @HxR2Kub^[!Aoq!L~ZtVlI>$');

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
