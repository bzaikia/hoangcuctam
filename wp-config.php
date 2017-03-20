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
define('DB_NAME', 'hoangcuctam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root123');

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
define('AUTH_KEY',         'Tl0TzI,1^g:f|?}IgC6pMtbhpw0X-p5h[8`dv=*#[Vu 0A|U%%E^CucrEbY=9fq?');
define('SECURE_AUTH_KEY',  'rTa>[MjPB}pKSN7o`6x5%H=/dng^UnJ_9XM^J|H^8;G.@W@wSoSON+P9DSuxtKEc');
define('LOGGED_IN_KEY',    'Ow7Rb3-7c|KE0^UW]oQ%}s~HQk,qb{;50;;(mtyTPmD=UV(d.E93/Uiv=nRD$1.t');
define('NONCE_KEY',        'mKZH.YARd{vpR033Hq&tH8-KW`V(y2q%EgikMJ#@`o._1cM4}$J+z:>4=z1wsln%');
define('AUTH_SALT',        '_bcQ$7SS4~5}.n5Ji4xN%wx!ZSqWYZX:vbywvL>3^U5`7zyUs,)ifxTdu$t`O;sm');
define('SECURE_AUTH_SALT', 'F{ANsfkW)vCvE4GSJ_*G-C`OBr1liq}zEp3zSLfK+DBpD[8#u)7[l:/)P]5gW[ZH');
define('LOGGED_IN_SALT',   ':K.RX._@s;sp!XTt?{,<`p&+CsGPF/tzrg@Mx7+Pin{z.i1#J|t5:q[]&H5Egy+E');
define('NONCE_SALT',       'vd@niYIb$f,4pE$bSF.^.:P)8gC3K:A&I*T,Qty&|w~@!<kBkj6y-<6a@dr6d&A?');

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
