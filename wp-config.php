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
define( 'DB_NAME', 'xlpublicidad' );

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
define( 'AUTH_KEY',         'BKJ;B+zAvq6b#9E(re]k8,6yX*Aij%Xc%d*|xKorCHg9)_YXLfqqo2W(nY?4ahzC' );
define( 'SECURE_AUTH_KEY',  'c&u?G+GBb@f&Lv41ICX{?&~^4SE?t0`V/~qB:)_/B9GwQi18?SHP0 .d;~rR_`GS' );
define( 'LOGGED_IN_KEY',    '~U1j?3CQgh0Du?Z5.?~3j!*+D;jD=6SrG=(#~Jls=Sl=Z%S[/B5,m3OF^l[O1AcI' );
define( 'NONCE_KEY',        '2lTpa<r-X[o +{4,dK2GoY/D#k?@a<jMRFOCwM,.SLuLR}uIX2Z$i[6`*kKtINq.' );
define( 'AUTH_SALT',        ' gRi{aJ7D}j81ZBC1g6mk?=:3IW_}g/0nEG|JHi_W2 J55=$1!yY|c:O8<Uqs)W&' );
define( 'SECURE_AUTH_SALT', '`@hWd3N+FIT)xQy0MGNM_227.!r2{<F%<N,zq|j!/<M)o+uw(^Z|MrE$?oAJc[qc' );
define( 'LOGGED_IN_SALT',   '.{tsxkwy_nye#5!*bd1hRx_F{ &78-]^izz0>|/C7qsTy] HLe 6?<ht},>gC|pG' );
define( 'NONCE_SALT',       'SB}hKghF!LV_nr K%P%L*.6/h}Eoo0Sx$df#^]Y41pG;`uKLqT~O G=]8KpGa3d/' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
