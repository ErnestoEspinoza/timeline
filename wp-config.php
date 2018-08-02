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
define('DB_NAME', 'nuevededDBiy9yw');

/** MySQL database username */
define('DB_USER', 'nuevededDBiy9yw');

/** MySQL database password */
define('DB_PASSWORD', 'zNFfqeC06v');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '<EuyELT^<Tnq7QX^<BnvBFr,>UnvBFY,>UcvBJvzFZg[0dw@GNg:1Kw-GZh:1dw~G');
define('SECURE_AUTH_KEY',  'j7b>EryFYf>3cj@JQ@!NUo48ks|RZ|}Vd[CKw@GOh[1dl~KO-_5Wp5Dlt9Sa#]We');
define('LOGGED_IN_KEY',    '8K[Kdh:HO-~OS~#Slt9Dp.]Ta<AHqx{TbuAIuyEXf<Eq,{Xb>BIv$FMf}FY,>Un');
define('NONCE_KEY',        'g0Vc[CJwzGN-:4hl1KS-_5hp19S~_OWp59S~_Pip2Lap*;DHt<]APeu.2Hiy*LP$');
define('AUTH_SALT',        'G@Co[1dl1KS~#GZ#:ah;5hp5DpxDLx*LP+<Ta<;bi{2Ly$EquATb<{Xf{3fn^BRY');
define('SECURE_AUTH_SALT', 'uIy^IQjEIu<En^>Qjr3BU^,7kn4NR@}BRgv|4JZo@}CRgw|4:C9hw#5KGWl-DKd');
define('LOGGED_IN_SALT',   '<YjFIc>}FrvBUc,}Fo!,RYr4CRgzGJd[:Zs-GKw[1dh:5O-~KSl15h-_Kel;5O+_');
define('NONCE_SALT',       'L$6Eq.{TbuBIry{Yb>QY,}Yc>BJv@FNgw@GN-!4dw-GZh[1Ks-:ah]1ex~HO+;5');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
