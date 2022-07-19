<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', '7lpWRSZmMMTUQ5' );

/** MySQL database username */
define( 'DB_USER', '7lpWRSZmMMTUQ5' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xCFTZc2qVKC0uj' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'rEo2Ihw0/BMRNnkl*wL=QSJ@fPyBq5|[Bt67HK{!Ws{}}V!J_8/Q~pLn{ViI6!dc' );
define( 'SECURE_AUTH_KEY',   'R07HDGd;NHY&LV|.2uTlkFiau3UDXu>x6<;tf?=OHqnb*iUDn MTy>V.:+7oQi&7' );
define( 'LOGGED_IN_KEY',     '~XdLQ`UUWSRT[T cic]R+>H4tbl-5L_ZL [ue6}%p+46-U5+z1xHb1n~DEJjq]!1' );
define( 'NONCE_KEY',         'e7L+S._$ |UU!^}=}<#Cd7Z,d[<t2`z?1o`G}sucsAqv~XtkM[1ZFl)hAvO=~QfV' );
define( 'AUTH_SALT',         '!!)q];tVQyi9Fh6RBbIQT-oOtR5^CrTM3)!O|DFlh8UGo?)0HE4H4Ql7MYZvT-gr' );
define( 'SECURE_AUTH_SALT',  'w=:c!#q0KGu!_.qnT[_vsm!>FIL1rW|:_7H>K_B!PrRoxC,1`:OFua$37=a3@%~z' );
define( 'LOGGED_IN_SALT',    'xGX9`rqFDiupR2Adsog0I6/S7uX;27vbs{MMSjz /ONj)XnrMoC cTr(5|PJI9 m' );
define( 'NONCE_SALT',        '!WDZecM/Pi;xpkT-(i4[q|8(/y6WG/mQ.27:FT&qi!Q3=e2EWLT]RjiA)|p?v>]I' );
define( 'WP_CACHE_KEY_SALT', 'h{$4fFP}<f3`u59K:%.:2NGF78z[W%$Jg$~u:RHOi!;KA$[fr0RGeBav9vbf*52H' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
