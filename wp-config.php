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
define( 'DB_NAME', 'scoobie_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-+KpNBD<Wa4L.A42d&@3rjhqB~_^d&Wnu3`/uCmzINH}dNol& ku[YAr#DcI:{1o' );
define( 'SECURE_AUTH_KEY',  '*dU`:*jB/)2u/-XuRqk>asvQi6tIioe&qV>!{2N;uqmC-YcnHp#j}hLNe1`89jC:' );
define( 'LOGGED_IN_KEY',    'G4ax^xMT_vsuCU=,O6emJsU>l~>B_gNbv1Iu}:>qX@XO-^-0js%=YtHx?lT}T#ZZ' );
define( 'NONCE_KEY',        'irk*>:m`Gi8kb.TLgylv5/enhgFbZO[tXQ5H2pu`OQkXT=s4P~@5{@E(xYvV=jb%' );
define( 'AUTH_SALT',        '8#$JjB+Ck^S(2Q!H04|(@T824L+SVIFm0z[EQM,;[M@xb`QbLEeTk=UB7h;|=iFZ' );
define( 'SECURE_AUTH_SALT', 'WAnTy:ee9.;(F<FkB6n_d?pgc;)$*6@#)=D|%F6X~F=ISHce@kMlL!#2*{>~Y{Eo' );
define( 'LOGGED_IN_SALT',   'wuP]%qq+=p&K^IXnxgUOq!l5;.WdMoy2BBe:6ZSZ(wu*HJ9<5P@$ D7!g&T~W^Ml' );
define( 'NONCE_SALT',       '?g-qckB3=phisj 47pn_wL&zV70DzD):$!MDGO&tw{;9nW9K__>@6s}w6=G1Jt6K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
