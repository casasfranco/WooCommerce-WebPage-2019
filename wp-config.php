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
define( 'DB_NAME', 'wordpressTrade' );

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
define( 'AUTH_KEY',         '1Y.v9J,%,xv;6B9]8DtB|2k1BxI?INmwc3y+sN,bjy?DCFDyPqa!JN0$H2:d)!+j' );
define( 'SECURE_AUTH_KEY',  '4QnOhR_*R:q1T:.&wvS^DJR&ga-Sb@7jAshl+PJ~}P!bR6I2b?bHjV^eiK6!N!Jr' );
define( 'LOGGED_IN_KEY',    'ooCM`r./~9G91T#k{G<NR/I=d?XwEO)IZ[,duBtr#F0wDjOVl@b1i4sg4`ByuM@{' );
define( 'NONCE_KEY',        'DG<Y{R5ZP t5.j> %=!^>x[C&`|w00Fs?B,]$fyTj3<n91-~Q9U=hUHSkyz6.|Jv' );
define( 'AUTH_SALT',        'yhAt;r!Naem6Y1tWD;1a]]?dyJ[&&cr>!4]+RKYaw9&<k [UxeN_sJrqo}YRUZgp' );
define( 'SECURE_AUTH_SALT', ',R+!Cftj[t%3/}.xyDF)Ge}]jQd:kp#3XYXI7X=)jU.==j#M=wT Ubu2dYocr^ie' );
define( 'LOGGED_IN_SALT',   'WV?rkq&K 70o^~l3hS+4$xhQ6XX+oU(r V=dS.-pfwm5M1IJ,!EGgy!/c[&OGV{{' );
define( 'NONCE_SALT',       '^6dY)(^mkbeF~~w#/j.RKKpQ1)cp6KDcr|u-dPdJ/SSV!54H/#SK&/)m..LYjkv(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iwp19_';

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

// ** FTP CONFIGURACIÓN PARA AUTO-FTP ** //
define('FTP_HOST', 'localhost');
define('FTP_USER', 'franco');
define('FTP_PASS', '1234');
