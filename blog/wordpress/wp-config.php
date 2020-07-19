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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{C%e{o2|Ub2]X_HJ+1+o7>^eE<k}&68(,c-5eN0*Y2td{..1B{0a=9<~EgyHiWvT' );
define( 'SECURE_AUTH_KEY',  '>cdrQBQ/=V_l_VtXQEFb,=#Auaq)U8qi5R7g#EAdo$_xl;riB2#)r}9x:)tZ%>>.' );
define( 'LOGGED_IN_KEY',    't,K.rm@TAIF)~E{?pO,gg9:bQ+7,>FvTnj6n.An{Zk`SU0FknEE{!>?O,5l4EHc?' );
define( 'NONCE_KEY',        '9 kwaR=)l9&f{*pqG@IE(;xo=lPONC&PEXv}b~CvVL u5&0;{CZGsVo>e&]l$RAK' );
define( 'AUTH_SALT',        'uDFH,kZ47Y8uho}RKM](^.+h1aSH#F,CA-~0H)sJx/B))IkalyO&5&+k$@2|y7cf' );
define( 'SECURE_AUTH_SALT', 'mL0Tm;j/V>t*|),cRPOX=Nk@RwLO-<S/NEnnRnKBA. LZ=yz4E-{IG.xY}#108cI' );
define( 'LOGGED_IN_SALT',   '5F!9Q.]0F&hqy;p3MmhgkV7bQA*Q5U=;y2(2-!s}Cu?)AKlR:l$z0UOmNTO_a$,]' );
define( 'NONCE_SALT',       '#; ]+Pobf{9I?V)UEecFu!V&tLTxOG&663hpGxJY5Lx2m7AnWP5`Tv},Mv#F;XW(' );

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
