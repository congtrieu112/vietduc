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
define( 'DB_NAME', 'clien_vietduc' );

/** MySQL database username */
define( 'DB_USER', 'clien_vietduc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Gxhb4FUX' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'xlaej+{qA%gy|lw5v`InoR)-pv7>|ctB6 vW/Yv?sAUx=j+ZKtc8Sbw[agn+:+um');
define('SECURE_AUTH_KEY',  '? mFijv<L7Q?KZ$}4.u|&x>JCAyGLwO;fT,TwnK`5XTEEvLF<}68[>ayX>WhY?OK');
define('LOGGED_IN_KEY',    'p[+iNbRxzcz2(Tb^McoyZqr8/RBP;6s],8n`<D +IWC9YB) YD@}<WBH.ot;x`tl');
define('NONCE_KEY',        'GRAU<{3@&(m5tli>QW+somXoS4pv}Y+&B)J<8BpGKYP/xHJ8s-k`<3foC~QXIR4d');
define('AUTH_SALT',        '#MYbb7@Vc8-4$-fu<R8r3-=]}9B|L~RifmC3lL44%iv@NyACcj2v`VR-<vDS?}=t');
define('SECURE_AUTH_SALT', '^VV-_D-&4!gA; w%Z6puP@<g)*):t%or=_mv)vJsM-1 N?F*h`o2Ze$4FK!L@D{+');
define('LOGGED_IN_SALT',   '#d)L~aj5K]Tm/w0G9N<XFh& <GV{j0^+Mm_.w5j`z9)/$I:>fXy8]+f63;Mf-iof');
define('NONCE_SALT',       'aCcawSUojqG+t#TOEqdm9xN?NW*GAfs7FEE{W%3j ?KXv_#6|n]lmm`(5spJh$@}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
