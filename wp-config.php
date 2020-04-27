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
define( 'DB_NAME', 'Task_wordpress' );

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
define( 'AUTH_KEY',         '!iX3<{>yvfceCTCq!Xeg)T22P1OVymTwj>pd:Vn6j@0)EQE3^UjE3/tXz:[K{yRE' );
define( 'SECURE_AUTH_KEY',  '.(sQ[:&hUh[xFP-@s0;aWj=D[f2Eio;^*l}v7j!;In%aYImPoX5:<8o]f?gfM`<w' );
define( 'LOGGED_IN_KEY',    'ThA#TdH%pjgcqM-t-XaYA=~6#nDIEIHS&^gC<d.kH%)j`/0~`F^T(>eO4g?ZMV8%' );
define( 'NONCE_KEY',        'lr{wpM*kHD-#,;g!MqNC0m1^2*j^H21A[4Ou7Hc,r^1`p{h&EZa3;SjIEw-HfZPc' );
define( 'AUTH_SALT',        '}w/:ksxR:}hbF^Rg:k-(uNFp~.ikKWfmp2V1!XozsC~.L,zO[.Jm#u_3Z}-l7<e1' );
define( 'SECURE_AUTH_SALT', 'QKaMPK:(&):._!Anj]IIK4AiNJ+gd*x4gaE;ae;bl!5z%6<Us)xfs{t+VRk}38>z' );
define( 'LOGGED_IN_SALT',   'O>R^4LLv#pRS]*L12)Qp:D#_+u$zZNo!jRZd7n{f%tEy{{Ea$]n9F}<_n8-1c>Qq' );
define( 'NONCE_SALT',       'lYNHLv]NQ%&M^/Kgs[}Y%M9^V:QPYftO-;~>e`::^MM6&B*K_)%Tl51SYjhu2 5H' );

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
