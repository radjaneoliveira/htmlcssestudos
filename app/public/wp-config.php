<?php
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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'SA~?w;ts%nDhjqNiU,`%E x*a(ZZH(JNFAe9;5G|+E%#%4f&-3$#A#bGrYXq+jYf' );
define( 'SECURE_AUTH_KEY',   '9E_83$v,cgL4??3ifK} 7Q*M;7p|HK,1BFc9`Bh@L9u.6*g!pX)63N6dILA[]g|*' );
define( 'LOGGED_IN_KEY',     '156_E=@{Ra/RB7-#Gzf~_Lxbu) .x<Dn*7jZR#xK0p|&<8[dk:Xzm{~=(R=w@2|K' );
define( 'NONCE_KEY',         'F8If=nHB7xl[sL6%@5T:LA{/DM_>=zP26^M#{fYu#LZ>4B$)->iEBTG{%6X*cl`N' );
define( 'AUTH_SALT',         'IksDFlJHCrI~xDCPSD2<-*--7O$)0fT6pJs%:lG}N1(|JlIafDVrh5TJLsk*<n);' );
define( 'SECURE_AUTH_SALT',  'x!Mj[,Rn6Y]^lQaZv!-j?pqfi0h!G]G5Uofq41xNMGpZZi;CuuR}>1xC;SkecK2%' );
define( 'LOGGED_IN_SALT',    'ryh8T~Ly>K)<b.]3D4KAa9}o.~IA/X~xNSH>1i#zGkA p;Xe89H2L<ST2P~qH,Vj' );
define( 'NONCE_SALT',        'wa$hwbD0lKN_q1Vqo1+zLb*oo%na<Q6q=,cSP3UKK^C8`jql0>4k/p`zNO=58p{#' );
define( 'WP_CACHE_KEY_SALT', 'c~V}3v jT.BDfv;0YkH/eeu|x/4<NWL8c.}fc6IyJYw?yj|xcboG8ufy44Tq6r8p' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
