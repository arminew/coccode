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
define('DB_NAME', 'coccode');

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
define('AUTH_KEY',         'wsdl{M{-Rmb68B{tYIAM3g$WiL4iGpoAi3!n4Q?tMy?()VbK@Ri^z+{b2G3?Ob4@');
define('SECURE_AUTH_KEY',  'e`?GxzM<x7IJju,,@T ;Z LIFEAu&WT3kk!0b5.,QLR7yV-8r8SurM`3c%cj?)^|');
define('LOGGED_IN_KEY',    'q4^6EdOG3=|yh//hRmTy-![W$hX,oTP=`-?sAh1XAm]A<=XeY1tNmTF&%tb@^7vf');
define('NONCE_KEY',        '*DkzvLZXUHu9cyDxoDY-N??Nf1S!,]$c]oEJ+n}<RqjPj)m/[H[-=W.4j$*!|Tl+');
define('AUTH_SALT',        'jckulk3-5=rr=Pgzp;ajQnNpWMmnxgpb;.G2rS>z=T}WqOvvw&orIJVT)HiBS0G2');
define('SECURE_AUTH_SALT', 'k.5TTS(xtyhv ^q(FL9{=j4](pd8:OX-Ld|+h/8ejk^Y kCEeMg_AzA_Z2kgL?za');
define('LOGGED_IN_SALT',   'HZXo^<6r9`9tOC3+(DUJo(iqw71VKqBr9`8y~U&my.G[bL_;;PQ#CHish 6Zt1hb');
define('NONCE_SALT',       '!<O?41a}(N_Sy/.KaU525LHp}[7X;}O+y3f=5+I:s^kXUQ(C^Q[GJ /IismJ.;]r');

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
