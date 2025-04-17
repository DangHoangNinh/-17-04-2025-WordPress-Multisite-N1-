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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WebtintucEPU' );

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
define( 'AUTH_KEY',         'gGco]T54V?(ai8Z$95,|F44ect2N=u!):otq!Hgom?[w|@RGjQQ%(3=%;4ME<wB;' );
define( 'SECURE_AUTH_KEY',  '7?E<Niflp=r{h{hyYE:fq;wpQ<@Emm&/_15QWJxDGq{H.ppMuK.$mMHSkc>x<!_]' );
define( 'LOGGED_IN_KEY',    'e|H -Cd~FvT_o<EA~z9/prB7&jl<3;mh;<Be7tHc:4J{!k1~6sOga%[?a[TL[c_X' );
define( 'NONCE_KEY',        'NLut<u<=WJ<wr@,{&[/%PQwty}c]Nubjgl19k8)%Uw_Hg({jypP|<iLD}V3bAxMD' );
define( 'AUTH_SALT',        '}^#aty>f[v^|R23eTQc=IVf )vRemx]>Yf:Do9?c)qOH-ow^6,GAHR/@Me=c|H_<' );
define( 'SECURE_AUTH_SALT', '$>zEz)%vy<R0q5UzZrz%^I=K>$B~v<8tbj>n_8>6pdLrlW{Wm7s+g!MmE1gaAoSa' );
define( 'LOGGED_IN_SALT',   't%^62rI zzQ n*S6e<- q1rrkrsdsrx$W(-h.1%ZW8j+OFH&}PV<A7F025?3aFL(' );
define( 'NONCE_SALT',       ']@Oo~2I#tU!7T8H,?y}7JF?ks6u,%<n(+7LN-h{6e?hM Cj>03~Bu0~}N!K/DzS{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/WebtintucEPU/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
