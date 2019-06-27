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
define('DB_NAME', 'mobilestore');

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
define('AUTH_KEY',         'x}g{ K_VzWetr#&Okh[F.`[.d>{dcohd-~6K~3bTS/ u|eb8.s8vpPo)TM7!D+:Q');
define('SECURE_AUTH_KEY',  '2jJf$,~8)7sDw<&(7e[-b}pBgrdqSBFj7jYNNtCrOV:Yt4lvgL`_JG9F~:;55:`@');
define('LOGGED_IN_KEY',    'Hjk.49dZF7,mvGOBeU`p C,6e#WDZRsdE}@[/%4o6YA-@24sWk;?)5Oo.QI6?HEw');
define('NONCE_KEY',        '/WhL|C2jgR2Is8M+%=hW|r7qxeti1Togj#6UbIG/n1cN5*=D5#o6nDsPDpCQHfXu');
define('AUTH_SALT',        'RW.GUVS,1G?>,#@N`4rke4^Y!Hfz1?PjjB[ty-CV-Qgg*+2aFxWr:)UBCF`IAy[A');
define('SECURE_AUTH_SALT', 'OL{5WyM>h6XsI@T82m{7v/,9:e#q.3f0J/K`=SI+1&sAlR)9ipKhzU#^+?n>gbw#');
define('LOGGED_IN_SALT',   'B@c&+[9.F@mK9<$_@ZF8|91i9dQ>NzzGM1f >$RbQ%01XZUZHx$ZSZ>w6vbI_sDs');
define('NONCE_SALT',       'G_B.$HlTXYDkFuR&S;v+xlf[BHK=P0=fXalW4W7wvi`e>NX:!p_:xPbRY2 OmJ2I');

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
