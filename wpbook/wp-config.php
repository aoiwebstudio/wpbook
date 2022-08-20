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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpbook' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'uaWKXS04 hf0#f;D./.cz;If:Wyr4:l `g83VIkrBn:$b<.{adj!a qj.Zd/)mz(' );
define( 'SECURE_AUTH_KEY',  '$t+!WW$>a!y1.U&Y:9Ogui0:JVCD}pz,kZut;kI3lkJ0oDrUf)}yOX9DcP@=}}H~' );
define( 'LOGGED_IN_KEY',    '_z[C#T**d=#2ng@{Obv==_r4r7W`y+f[PYSqD:j2X;KsN>iMr4V4b7|{PjuGqt}P' );
define( 'NONCE_KEY',        '@#Wm/>/.?n`.0+fmjN,3cE!`ExkmiM7P~srWMwP&Y,L1>SCh89sy?HT>)}o2I]0!' );
define( 'AUTH_SALT',        'I^_^0Zyp2^R^|[xxoPL6rVF;Zb|i]); r#Q6[euMmsm-sx%w_;0a5G)Wl1KP8.kU' );
define( 'SECURE_AUTH_SALT', '7y#/I7&iHgWByv)w|V_lY$@D64_l`5-n|GctwZp)_6kI]~t<$avcuw0M#u4K66(z' );
define( 'LOGGED_IN_SALT',   'w{ko@:K l.~Ga;=m<Dsp498(:,`Vb,EBEu)_z/NUY@Dd H6 l~ke[C@G3RrD5V9Z' );
define( 'NONCE_SALT',       'xwbkJa-yTMI}J`20q|bs?</~{RaiGze|FYK=6x@m/2J<6(A,raCa Fj%kf>,L0|V' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('WPCF7_AUTOP', false);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
