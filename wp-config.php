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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adaviico_wp-exam' );

/** MySQL database username */
define( 'DB_USER', 'adaviico_wp_9unai' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wG4JUk1$GQ11t!m?' );

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
define('AUTH_KEY', 'NKUD*/19(&/!|18!!uFA!&!9ls%:OH9|Vu&[d#f08Z%:b1M3lD(#i4*7l7j#64%(');
define('SECURE_AUTH_KEY', '(984MRpn;4TQVdLpTh@Oen3mnj&Kl8O8#2u!0p]w7;fOC0156YWam10;5!g82QT[');
define('LOGGED_IN_KEY', 'f33Mc8mXstEzQ_n)#|eh9-qeQ8)_635VtD+s6!5pDi:]0~;[]VF7*cB(A3j]K*#I');
define('NONCE_KEY', 'KJ;2ywX0_y7h9QthSC#+9+82/1646a:R_YTCs:d2X|m&h8#8+8881n+]6NOC%Pub');
define('AUTH_SALT', 'p9!YPt_2)dm9gF01ResCV3~/2*0]SUY*Zn0Tfz9/kv8AvG/b5gMw;Oc]T3:+w~hF');
define('SECURE_AUTH_SALT', 'y8642~/C:qi/cZLL0g[007FSi)j535OW4noO!O(1Z84!)3fpQNq_8]|q5q5#_x!5');
define('LOGGED_IN_SALT', '|Q5%45GcRzUjm)2|Zux3:ah&1UY&K89RXJU2qI5S+u%xEx7Y/5@1A08BFOT5+U(B');
define('NONCE_SALT', '+(([i1++qwXbBM7s#%v*ZhHEnB;&E16O&bBeB266#NP&UI24j81FI_L_6Di7m!Bi');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xiteb';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
