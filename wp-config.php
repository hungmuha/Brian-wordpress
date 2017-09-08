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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'bQawnrr!nB}0 p 2iITZ82l ^?lrL27_4q=L&[@FiWIN|Y5}j~Kt,c#7995<|qlC');
define('SECURE_AUTH_KEY',  'cf3q,*( 8B77w|c4,1,CVA)P7/$;NJ2*ukFJ*i k-N4=Rpc{[34j2x_#FMc!HOY?');
define('LOGGED_IN_KEY',    '-F`@P0H0)%GrM735R{N.P`x?#HN>E7?yhT3eLzLN#dR:eK3s?z,r?F3Kco}&Vu#:');
define('NONCE_KEY',        'mQ,vAGJ_jY:$Hqo2Lq1];z^XMz)+(9i:iQn+l2LFx)P>:K wjpd9v8dsf((vvL^D');
define('AUTH_SALT',        '*K F#N]k[&Q@ME)s/=?Av;t`oo~7}M7hhzwjzg{#~MCRLZvJg4t,M==wpAxzzzhz');
define('SECURE_AUTH_SALT', 'a8$T0jV?y/iR<_aFOfbUt,!isl(Aec83Q;^H5kKjzWO:-*+G@a]kiX1GGaAaJ UJ');
define('LOGGED_IN_SALT',   'bIv0k0R1..}!LJDttu<g/HzWxN>3*L[?){?(^:Yf%deDX[itf[W$mOhs:#xt[0yR');
define('NONCE_SALT',       '6O(J=/,^8!#6,=sc_XA^as#X%p5mgS>&DP5H#/vad(PG]K:$q&bFir&32-e>RLVa');

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
