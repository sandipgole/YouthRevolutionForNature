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
define( 'AUTH_KEY',         '<PjN/vR3Q:!6M?28F#YpQhT[jBGXYfK2f}nnG+y>.#3Wl(^Y*B>zU-p)a07>QXLG' );
define( 'SECURE_AUTH_KEY',  '?8m768~qXOC(.77?CutZ_%(]o{$.ZEIih*ag_?8>@h97(/7_K^cj5!]b04b8O}}<' );
define( 'LOGGED_IN_KEY',    'vK*qMWWD_u-qRM.2Wdt{s-.Zog`Tb@v=O$<27}ek;-3X$5g1HTV&iBkjkM>qEXMV' );
define( 'NONCE_KEY',        'P>gN5_cdMBD!AGoqRwR+KI`cGy_2Uv 04e(XuQ%)3XGL._]Z!5QQ*f.Q/]seJOo_' );
define( 'AUTH_SALT',        '|e,j1F<5%8gHe>$VJ vDd4`Vi9Vz[cJ9^dW8-wa0iG}ywYB+|foy4Ud|-{B-$:|)' );
define( 'SECURE_AUTH_SALT', 'zs4b+C<oKjNtx%&=j9jNnvo;V[/)x/%<: 7,TcJ?<Rm pm66;S4YNA626po!/UF6' );
define( 'LOGGED_IN_SALT',   'cz4UP:=3T Nq`yJV6)V9AWk.!#KfjCeqx*_bYgD%99VR8Tm2YW=e`a^&kq*h]Pjk' );
define( 'NONCE_SALT',       '3NwIGaui6Jb|4Po_KDvDQJQgCh#|jlTM+dxr1QM3RCPz)X)}Qqa9T+5sLq8i4ZvQ' );

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
