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
define( 'DB_NAME', 'my-portfolio' );

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
define( 'AUTH_KEY',         'f`9:+RB.9O2y*yCbB,Y3p+2rn.oB.,w^cJLHn.&uGNx6LxSxi/U0 @(KmXHCTv)e' );
define( 'SECURE_AUTH_KEY',  '29[g>@m[5B%lt2 cw:)< NR+L]pnvwu1]>/r2u7~s5]:CHZQg:!J3Zu-k*R~XEN1' );
define( 'LOGGED_IN_KEY',    'q.4;tAKc.6jw^|*r`Z@3?)cjGm)Bp|._6Qoy<cc Y d;Dx]ps5uVyRyM)dT%s+on' );
define( 'NONCE_KEY',        'uCGs9]P.[r8>5XtkHF_x1-V}Ak u$>9zF>`Q_3cGV0q*xe-v^q]007]g1?}:Pv^v' );
define( 'AUTH_SALT',        '&ShBf}>Cwal4_N,u^c1s:fa$D45W+I(?BEr^s?)_VD*])NVUZ.66uoLr_KM~c5X!' );
define( 'SECURE_AUTH_SALT', '<VE1rJfoY7b s:Rflia4m%SX*_qnfc!vw*mRa*@qu_jxZ>; tp}Qpffua0$1Hj-m' );
define( 'LOGGED_IN_SALT',   'GVZ[ASl5_r)A.=Um?t8 !rb/{.kL8IJN=MC? @[UXqh.=Dn1mJ_GokDx(Xku-kse' );
define( 'NONCE_SALT',       '`:D!02CeZGi?rLM7V7RQ H[)= N42x]%C#8=^X:iCu&XU6 Kz47U1z04gTWMm(l3' );

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
