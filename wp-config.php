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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trendyseams' );

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
define( 'AUTH_KEY',         '%`p~b6b_b0qz05FDD[-{|X@kb-+F$HqLGg)baXX5^0Y%^>zCvax!l1]x=p]._<l9' );
define( 'SECURE_AUTH_KEY',  ':L%EOU,&f*gUIQ<e*auz*bEjI/l6/6AF/uMk@5pbf+Qhvd5R%_+7/^du^okH<^*v' );
define( 'LOGGED_IN_KEY',    'Sa!;U}[L;fJu(^`TWzny3dDs7}J4HSnifx5v4C2*_$;PW#K_Ku$<]V6W.W&%7Zgi' );
define( 'NONCE_KEY',        'E_wlk96MFn{#1X 5mn6pz=9af_-K]90-_Ld},W_P>rFR}kp8YqR.r&2O!KUa%|5[' );
define( 'AUTH_SALT',        's#_HK.p.nY}V{{|a$S*Z=#H^eul5C3l&T= DeYvf*1;DI)]6ov=5([:NG~}tC*Lp' );
define( 'SECURE_AUTH_SALT', '*{<*@%:`9+&CLEs!6x6z9eAUXvO(bO]RE)K^s-eRJ5o:y@`U] T:/}%&_k5aMS<k' );
define( 'LOGGED_IN_SALT',   '8=Td6E`;DdE$bDAwn`0T<FQE};F#q_~z>d?p+-EI3e2<^d7yrCQuttdLR5+NB&}E' );
define( 'NONCE_SALT',       'A;FX%ck/{OkC7]T7UO+ttvbr7a)~fNMHMCMsF!q_z+4$NDB~*Z!Z_)z-)#J(QhY.' );

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
