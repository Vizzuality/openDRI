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
define('DB_NAME', 'wpgfdrr');

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
define('AUTH_KEY',         'kNf/3k3P Js-[k-4P{[{fClJ,xz1!t&]&g/`:3&GvC}CBfeJWmj9t LRX|}l!7Ie');
define('SECURE_AUTH_KEY',  'XnQUnutZMAY]Q&UW#oW:M)Kz2M{InS 8Jc.GA1wBQ$|@BA3R&A@/i0z^2ek2|RX/');
define('LOGGED_IN_KEY',    '+|7~YgZ<`+9D&f _Ti1j&T07,NQ>c#]NM54HpqZJ<Bq vP*fXXM7YvO-EYzd=Z`O');
define('NONCE_KEY',        'D{-1Zfn.{sc62`aSiE5SAA/#P:Fq(61y~eL6)N+TM)nt47?6MlIbNtK@}26B|Tlk');
define('AUTH_SALT',        't.H6y}p;-+VUN3INemY_uOT!N>`19t{qT_)_rESN{ -ej7l.,]`.P<>pKL&s ,R5');
define('SECURE_AUTH_SALT', 'x$M9PIZlh#-]2<P&P1^I50*K!|Na]Acte $RjM@(3W2AxH||c830>U$P.QLM;jg]');
define('LOGGED_IN_SALT',   '^S~=,*@Jn)k[Xd-ZmQ2thzn-x{<-exavrTz&]qew;qObjj;<-$Cx1!,WLfZM,qlt');
define('NONCE_SALT',       '!W[}mbm%E}2&rOB2GH!?d<8mH{~[dZhF^i=wx 2>kT8Y:|ZJ7!i__H8&l&s!kWKZ');

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
