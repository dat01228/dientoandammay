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
define('DB_NAME', 'mypham');

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
define('AUTH_KEY',         '&Nc6.xRE1WC18z;npF>Ep+/{`NU$nX.&+.3/HDwjbl}]4 .p5Y$X#2,iTmd~*rE2');
define('SECURE_AUTH_KEY',  'hZteV/-q8?I{2Q;~vO$.Rl{G#/s<WAf]E ceFzP07tCEGE//pRZx,^;2a~E*^Sf3');
define('LOGGED_IN_KEY',    'w/k*OyzVkbl:d@diuQ4m~$nVM5<K<TM%&FK@d|T`6H}.f_k`N;*{!INRwVrp~-Ir');
define('NONCE_KEY',        'Qef,Hul$a1$rwe}s)D9jd}]T75bqE7W,FSkJ`wG%l&>+7um+>,ly$n4ncjP4fDZ]');
define('AUTH_SALT',        'jV6tpbi -<euVx&#k#VOK:o&bim3Xz82B<Z!$K^jf%76?Me2=}_#q}X&HY(1h0<l');
define('SECURE_AUTH_SALT', 'Nt;M=8Cs?QDUJ(ykL_Bh&%T#*6Tp8#0(2VWKQK.75K{Z(Rw)fGWj}L%Px#;$f>m~');
define('LOGGED_IN_SALT',   'g&%&GzMszl^@rdM.zv%}:~D%ao;QRkBw?6Q>sf6p*>J+!=| 1&kdZQ=1!_T<rUPK');
define('NONCE_SALT',       'Lax(MH3OIP&8@bZ_wZ;PHKJctZif<42`W|O8&Kc6~l895.LoVm}Hjx(;IdW?0lEL');

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
