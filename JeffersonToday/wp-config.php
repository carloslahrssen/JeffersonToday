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
define('DB_NAME', 'jeffersontoday_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ibRsF9w!@;BP0?lDv$}Ojt+#1@B&>kx],5>qyU5~]VvfZx?Febfp{B(;i&m5%vb`');
define('SECURE_AUTH_KEY',  'E.0a*SewfDi3C.`^h7NShL]5<8k,K|N=CTeMr tESQ$CrP1zB3eN{Oh_u:F!FV!q');
define('LOGGED_IN_KEY',    ';qr.g=V@$qSzB:/I=H!vLOhQ`/40z:e1?:qYSe$<Xp<$X5&Da?QO=[>pYOrv@:U9');
define('NONCE_KEY',        '=]%@Xjbq,|pEdsI1Cu<RSV*n3|_)]VJ2Tumg9I4wgY%E_TscmIfbGOoBxb2;E%Q<');
define('AUTH_SALT',        '91Ye(joToUJUQw{~Xy]y.Gs% dR?sd!~t eS[T&7Dg5>?T~t #jRkGdZ oyt[7Gc');
define('SECURE_AUTH_SALT', '#6PEvr!9(/r%^|bkuWd<%M9@p.QDDhH:t}^)(UCTSR`W:UlX}ck!P+{xK*J[b#ep');
define('LOGGED_IN_SALT',   '-f5QR!5^[#6&]%_TuMt`+Y>o>(sUk[]t8/^T;|rN]qR60=SOgvw[1H|TqM4ls@40');
define('NONCE_SALT',       'f@ bnPW8Y8[p{{e<|5#8YL$o`ZzWd NiW#@0{-1nY|2(XH3en?4,OqIiHZVTH9&a');

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
