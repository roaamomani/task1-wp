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
define( 'DB_NAME', 'task_1_wp' );

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
define( 'AUTH_KEY',         'Fx+4{g,c+bA%[b(pzzfJA<o`A{)=``@I]a2O@|hXY[{gP)L53*Z*i|*)<_O0yug8' );
define( 'SECURE_AUTH_KEY',  'f57KAyb5X[$ u0bjc8Cfk>q.FLA#[}!RFd!/xf`Rv^ {vNIP#W.FUp}T%H1&OD0p' );
define( 'LOGGED_IN_KEY',    'dgtZgwd+8uQ9mt<j8F7FQx:.ALUx+Q>mSF.L{#n1Zy6@[+kA:~!L]zxsxm]n4-.N' );
define( 'NONCE_KEY',        'YCNqCFEwuo><&$b~zn(e]y:2BTTlvn+T*4|`/b:+CTSCV;<0Dt>spS|T@0b7-0,t' );
define( 'AUTH_SALT',        '`YpriRE~uCy)Wfx]tWx]_AkD|mM_@@sSw/av3s%dY]-R0$b^}QVYl=>A<Bi8+|XT' );
define( 'SECURE_AUTH_SALT', 'FA8$z]0tyu~-lHVwJ2oL;_($2=i@hk~pP|1pYqE4Ay[q0Z576uSJ}?,aOp@Oxks ' );
define( 'LOGGED_IN_SALT',   'm,Z84UYoV(#Dl!C[>woCO:6(WW/Y[DUcknL4@ao5P]%moF*USN4BAt yG7l2ckeI' );
define( 'NONCE_SALT',       ')u3ZY:YxYAF14XCz]#p )SgejnM3~J6,Ra5dC=tzji`/dn|MVL;e|GEdRXWek,.:' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
