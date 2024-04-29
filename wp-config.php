<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'caryfy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_D>vr`1/P3Q_1vL71^(*3V._[8XGI6(PCwDB3S^E2iPK[/(whstzsR5~h.X+Edj[' );
define( 'SECURE_AUTH_KEY',  'kGO 0[d5rsze4QAbHv@Zt66=2FCuxIY,>O8Y3l]eU(c&sojB7k62KawhyTvuX55G' );
define( 'LOGGED_IN_KEY',    'E]VLl4J&;TobZ,u#G-NYr$=?})#v[ya,yyh17HIxpEtE {Pv9!#%|c,ezL@Y,4@H' );
define( 'NONCE_KEY',        'o<DZow$3UM}M$}MpkxNWlzVK6sP4/?t<vt(6c/@~1`z04a0&o*;xBR++Du_%_Kon' );
define( 'AUTH_SALT',        '@~T.?Rx<W8JdRU$IuAHdjsHNv45ReH}{o9(/)77+sa+9T(TT8 Q=l{dbnnB3+@R&' );
define( 'SECURE_AUTH_SALT', '{{f6`T~ufx[+4w&T]abIDZM*Z7>*x@tk9#AplI #d){M|Bm0n]|Yf}B`#}Mj<d(l' );
define( 'LOGGED_IN_SALT',   'p4Lp[M|DcVZgvTxQE2ozv>~|gTK{LSUA8e/>lPR[q{_;NG&IN6yt1Qp:%~C]D$+b' );
define( 'NONCE_SALT',       '9IG~neF/7B-G8[Ub,4Y?tU~(s!] Jw:I:d8(kD]2vt5>Yra~i<uL=_2o:G,q r:K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
