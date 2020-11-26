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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cr12_bumberger_traveler' );

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
define( 'AUTH_KEY',         'ofq!P5h#nng ?c:!JfqnvEjQ{LtuO|T(3M6:QR?TcCDlvw2MS_N#j7g_9n-NEOIW' );
define( 'SECURE_AUTH_KEY',  'rqf+d2b{pdLHi<u|dX*lQ:g@y:C;p5xp(GhEUyUZ=vTfce__uENE%Tx*CnMHPvvf' );
define( 'LOGGED_IN_KEY',    '=EN25puSo3*3&FatQr52PWhfUiM_&fj}#;Qk0c}EM?l^pElJ~0;z%h6]Hf]i*7KL' );
define( 'NONCE_KEY',        '*IP#-?=Hx0TIj:c*tG2Z Ad^slR5rA^dO$/:{MgZG.6WxYdzdBQr0$x9$Fx2.B7L' );
define( 'AUTH_SALT',        '5$>e:K~$mgfL^.(vy*w0%GF$d]w={GBH-/wQSi-x#@<`l6Gs$&I&daR8y-&gMO)b' );
define( 'SECURE_AUTH_SALT', '^q[fsBL~>|mION4#6pJ2*eC>Wc2;N9G7xX:4VD,iU|}L2#R$|6*f1*eA>+,+-kyN' );
define( 'LOGGED_IN_SALT',   '(Z7P7R~ a0B[Ldn#Dr*fHZ8~6^_AVjEMzS3R1a0QnYjO8}(5-Z4J#(^#r)e+u>pE' );
define( 'NONCE_SALT',       '):dg8UH5h^B8h,OU$hX<UInqAPqI4{fo)ty`.CLQC],#q6-?T<aQ-c/o6/cp~sp)' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
