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
define('DB_NAME', 'wp_realevent');

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
define('AUTH_KEY',         '7@#//P$m:/4?i2vx89^XXI5;]-wXk&zCj$!lT$6u0in,]ZMtw5)%Cegky9^i*#d&');
define('SECURE_AUTH_KEY',  'WsCeK)CJz_3n4Z{p9J9yUyRMn[0&syS&N:ta#gv_1+7[L3M7h!<>lVt[2{1uPqs!');
define('LOGGED_IN_KEY',    ':5h>@iu)M>?mwJK~T$XU&.@%M]``yI@fbcO2>9r:Sj17KALXsmg>rIcx i}z_EBb');
define('NONCE_KEY',        '0~j,2+`n+*uer-rcy0w_ZzlXgc_skoKF.T0M_VpMD2!R-shAs8~w[8AvJR=9,8:T');
define('AUTH_SALT',        'w811m0S24=/=3pD(,P/U;!O{# rZ%N;[7m5^3-#nHlWq/=:C3M|@!!vgc&;qHTXD');
define('SECURE_AUTH_SALT', '5zwUUKhJ>D8(Dxc$0<k]CJT,)D6bw~GMmpRzw}5F!+KXg UC+%J&U9>U-`nhvKM)');
define('LOGGED_IN_SALT',   '#jd?{mG1HEtT -opkqbb$@[=Sy=V2z/7!-+CX}/=v,wl?T&UNNK980V@yue<M;2%');
define('NONCE_SALT',       '6PW`wYp[|KaEnVzy;r,;R0 J9B1Pp)dsVi#t>V5fA*|c|f- 1}us35r]=}{+O=at');

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
