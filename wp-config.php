<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u676975229_YaVIl' );

/** Database username */
define( 'DB_USER', 'u676975229_gVtdC' );

/** Database password */
define( 'DB_PASSWORD', 'IMM1pPT37Q' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '.^9Ks&rY@b`e9[Bqus,HmW**BK/+>DD<CWFOSXb}yx4T*gtw.gAMYU DYStn*)Ar' );
define( 'SECURE_AUTH_KEY',   '@U2WMr>tIdLqU>5@^J6a(UM;3Qfn7yal>P=$Gx+Y&bN5cZYDAD$AJ@hsVE56RRp>' );
define( 'LOGGED_IN_KEY',     ',SaOW/jn5(pA/`doW)kr6q$a910MJk8Kl@2X_y@|n04nD@5Aj(<agmzp_am4k).I' );
define( 'NONCE_KEY',         '}H5-flJyricH>CIxz:Zm]>Q5(9GAM}Mcmh[T=q;NrMv+-(?1v~VN7/$&K>4-/ABo' );
define( 'AUTH_SALT',         '^Qhtfw2=JN>`_)#Y_K*eO0}HUWxcp1Pvf^`qz=B,%8eiLz%Iv53X7t5+}:/Ya3*d' );
define( 'SECURE_AUTH_SALT',  '2QrVXTc),-Z;Vx:?/qXATT9SJ6UM0 #^?7-Z=A;P2nG<fb.rLmg}tN<&/lDsmI:1' );
define( 'LOGGED_IN_SALT',    '2T`1v+CTe%G!>}`2rv*9ru$Osbr5^G` gd.Uq?W7a-t{9AM7LMsjDKE{IQa/}aD_' );
define( 'NONCE_SALT',        '@_ T(%kdKOXq.&i6gq yF5X#./lv4%M@f1dXU`k>NNHFrArt3e/fvOeH9UO3d2a?' );
define( 'WP_CACHE_KEY_SALT', 'cnY3]y%4{^-lMEn(,&eqy,UT-xVh2z>iz~A=Y[RP_1Pd=1 O;W;rm >0GHh:Xlb#' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'd8e23063dce0266e369dc028ffe72b57' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
