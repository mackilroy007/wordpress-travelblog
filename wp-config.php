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
define( 'AUTH_KEY',         'qk5M:ZA~Se|dMmfr1a^}D10`u3 U/ck|?y%! Lo(2X_{pAoK1npMBWeXIqcGDQ}3' );
define( 'SECURE_AUTH_KEY',  'e:Gcl:IUHL)G;:6n3y )%4l/<sdgoP@NT<[GMKpgz$$MN~?pWkWeI*KX`q`MuLx/' );
define( 'LOGGED_IN_KEY',    'mhiGtn5]qb(B]0A@LZ#~N~>T#)(d,Tp!vF){T<.Hk@Nc)0mMM7(fx[Z#GU4iBVKw' );
define( 'NONCE_KEY',        'ql)BA<7%@E77}[!ed&URC?:?t^27Dcd<rg<7J7&s+8~eQE/1ihV8Z$k,iLR8.z6?' );
define( 'AUTH_SALT',        '-9Yn)XDSk_djE,E<fHv/i@aKc0*(Q<n. &qgFKXWUKo@wTr@Pzp1fk~Doo)Qa9}V' );
define( 'SECURE_AUTH_SALT', 'Z+#1`MKoIyGVv:GH+$S8sh F;m&cOuX(y4n+29{%iC_46O.PGgBL)eg#JJimZX9F' );
define( 'LOGGED_IN_SALT',   'bZ?J//Z@)E=Y?8?w3f32Qz=D.aAhgJJUE=|je<U?k/9u#0fB<KqcQl7<dSSrO)?+' );
define( 'NONCE_SALT',       'Ds@9x?80;~]fccW~&LdFT2CEffnu>k,DKLwz>V0f428T7U-]TC$X*q^%4=4v|6/m' );

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
