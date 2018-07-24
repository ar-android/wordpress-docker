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
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'tbJIN=.jtj6h!eZt1+@CA$|MIAK`[mm7.9@N$:q~.c34:PWO`[lO5A_ho,5iKsu#');
define('SECURE_AUTH_KEY',  'lL$tNP#yMi9B#7m Rs9MH`EZ)Z?C#J?xUEPha&C*+}t=Y8E4Wevu9nvIB)viq6=N');
define('LOGGED_IN_KEY',    '#:Vs:S1qlH4[_mD&+3jV*I%K+6|QrD;00l?fU$qVWwb.4tZir??6+bO*AT7*(qt}');
define('NONCE_KEY',        'aTy+~hG0[h1Z=D#T;LrdKqVh&WO)RFuF6};ByJ!BoAxxw}/De7.o@M,TWr-7>rxG');
define('AUTH_SALT',        '.1DFj &?XsJU)9q*qYjsKl{DnOYI;j(fT[z?HR1P]YA{wC$k&j!78R.~rt cU-An');
define('SECURE_AUTH_SALT', 'N-~pEkj]3U[]Hf go@{0K]U{9?7FmuJ/DWr3`~kxX~>hfLn?dk_*<}##qF/F3LUq');
define('LOGGED_IN_SALT',   '>fUveaF4k!EN+yevR{gyq@~f^uR-.W{>g k0MK6:oTb*PHx8M8MhIQ^!$o},CWsp');
define('NONCE_SALT',       '4lv{qyMgfw2`Z1PFJ]5a_]+l3{6Q3xnfQ;XJv[I&p*d&4|zm9&uaIbZ(leF{q<Wz');

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
define( 'WP_USE_EXT_MYSQL', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
