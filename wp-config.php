<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{^(DO$&6=dW57`5a-E| c|RAg%@ZFb3q4;8-_Bpu{.8|I^oUj5WJp+5d)#sZCHSG');
define('SECURE_AUTH_KEY',  'vhf-QDZlNpA yTx%BKUbb:<*|8L.g1WB<I=F0K-w5`Vj3Alpj4i]WiR/t3Q6uJFc');
define('LOGGED_IN_KEY',    'Z1!-zeOb}xM5cNp)C8/-9lH0zC*>Y~kI$J@|+#3k$T(FPE5<K5+SkjFg+ynG4AT3');
define('NONCE_KEY',        '>&7O,6z=StvYl~|-%]`+z!uwK3+[S1D>83xNs;lt0_d@c0RKJD+R4XJ=(1]K<uRA');
define('AUTH_SALT',        '|.1;,(|O.HJ${evl7izz-OH+7zle(-_<oYi-s3t;. Nlq8h!`sV/(dj.D+Ia/jUc');
define('SECURE_AUTH_SALT', '/R]1kAt/ND%;(@o&*99#f _`bgh();2c/m9S_y, X{G10w)]nW[LV<ug:;k>5ZNl');
define('LOGGED_IN_SALT',   'OHgj(9R5J2.bZpU!2 aVp?@og&qb^.U?+D4AJ7naxJ3eM27?3Zrl.gp)S8uS%vM~');
define('NONCE_SALT',       '&,i0>]#I_N Kx-T~zmob|(|S4?}if4$!Tf|SnLq>]O3NX|>B <d+IrL97)fBKWDr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpWPP_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
