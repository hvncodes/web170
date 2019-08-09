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
define( 'DB_NAME', 'ff_company_db' );

/** MySQL database username */
define( 'DB_USER', 'fflame_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Qunder46%DBcrimsonfinger' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.flickeringflame.org' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '8ez6ffJ_ws4b>]hS*WA0FO|pYj9vC<~Sq4q; ;}|0h7PAEcwnSA@/)eL{n}ck[bE' );
define( 'SECURE_AUTH_KEY',  's0R[+^=jcF+Ij!r :n`f f3m!SbKsD47_4YoJwkk=q|LPJ=@20y_-<Q78@hTp<No' );
define( 'LOGGED_IN_KEY',    'jg!yyrvw0d>4Thz{W0ApS,V]<h?1ScK wS5<1R=_S[rhuQS;>4xyVQHw0>EoC`M!' );
define( 'NONCE_KEY',        'f.aF7V*9{g|[=u7; J2ukW6L2Z}{u#4dc0=.-<1O#0F8]Zq+@{jA!p]3Rh]FWD0o' );
define( 'AUTH_SALT',        'd+Vat=Jj0*OW2-Q mdA240{{xsNrHheGKQ*xPawvXM10[Oz:TBw`?-eBx8dRKJ0^' );
define( 'SECURE_AUTH_SALT', '5G=m~J/i{R3{G1Sx0NY-VRjgF1GJG8KnRp1k[)]<p~s@`VF?9O-gOvqBr64<okt/' );
define( 'LOGGED_IN_SALT',   '*_zn#9<:XY* i8tT)Y:Z5;bUpO1]<)z,K0K|>EFU>W/`e:<Zq##?2@JXO^0*qOK-' );
define( 'NONCE_SALT',       'KLl[JQ<]lBgdPKlOtxBI}!M24[x0><su<lHTTUNirN)(+cs2HAJXc;w(795#6#FL' );

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
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'flickeringflame.org');
define('PATH_CURRENT_SITE', '/web170/company/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
