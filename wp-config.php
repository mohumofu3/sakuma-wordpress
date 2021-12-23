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
define( 'DB_NAME', 'wp_practice_01db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'GLlmL_@6kj)_2b}SxZ-nJNHy|!^K[!p<bQsMGMi6fs),<+1A[gRR{vCJ+:CW/1*{' );
define( 'SECURE_AUTH_KEY',  '<ja*OKNLR$xn=}>7O*oJ)]YcbCY@:~uvU?>$3B?{&y;h1hRJ%L0ba=Mp~C8/8Il9' );
define( 'LOGGED_IN_KEY',    '.z~s.3+0B=^ CjgBpjZPDsujq`oyPaLKrKonq3hO{$Hy/k!PvY<0^U!06K#lUE6z' );
define( 'NONCE_KEY',        '7/E42l?|cOhEqlN&Bn94-?2>YIZPz9~D*>=jk5f|j^#*X_<d0U,rBaoK-JU@|dW9' );
define( 'AUTH_SALT',        '*0+-,woUJ?~{:5qWclDOT`zyZj+GpMDE+0WQ)_L028>XjrUk3oSuCaQwj^2xR1C}' );
define( 'SECURE_AUTH_SALT', '|q:Xak`xvXfuVu_{OblF,[:&}_v9Of%t7S![dGjaI4h(@aJ+_DN3 k.b%1Ex8v$m' );
define( 'LOGGED_IN_SALT',   'k9F&utOQlIrIs:9_Rx#~5zfbKQh?9;9AnqwU-r*V|O7/!4FRiH+k6iuUxzv?.k~g' );
define( 'NONCE_SALT',       't2{)z>KG#4$IQ:imEUCq3j*ZS_%-QiT f={;r:[6K.aV?+NDbpi.z]%dfS;mN5KY' );

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
