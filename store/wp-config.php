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
define('DB_NAME', 'store');

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
define('AUTH_KEY',         'zxf9GufG:^aq=C&Do5On`rTI`l!nb~vo`UXY_O!v~_}Is.T70uX2m-[|rO] k1gN');
define('SECURE_AUTH_KEY',  '):?@i2;=(k?.9=OK1#AE1 RP,_yxWh*0]Ko.bYgl7~+SwP&JXFLrlZ[qVUxTxCT2');
define('LOGGED_IN_KEY',    '$Hg=lmu:/]!t,F]_7|yX+K:5VIcwXa:bDPpU0Nsv>ALtz+{:`]k:x3inP2s7)GiQ');
define('NONCE_KEY',        '>}&[sFjc~ZI}Oq]GZps& ~wXiY`Jl0ZP{?@N%redzBC-YL-3dx3Lanc^KMZ6V<y<');
define('AUTH_SALT',        'I :zvZsVAX Hg6juEX[fl)m;4i2$42BoMMl?abe6T6VVC,tMEAVIL9uF_7k>=2.-');
define('SECURE_AUTH_SALT', 'm-!mIIM,S_*#yfW2EJkpJ#GGG+3a~+;KZ6V-$iQvb6WER~PO{r=Gnd,L,JFkr8%N');
define('LOGGED_IN_SALT',   'd],;k`:WEz<V,l xu~sL6>X6U$EiTtpF-y!a[.2|FtS}iWQ ?@ZKW.#Ad%tx0TRL');
define('NONCE_SALT',       'WRtE?F;Z+VS0b9jRI?qw16XzFc&fl7(5|.|-*Y<1[$L^xws[~qY l$!Wb.Yc*!Ah');

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
