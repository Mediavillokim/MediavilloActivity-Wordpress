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
define( 'DB_NAME', 'bsit4c' );

/** MySQL database username */
define( 'DB_USER', 'kim' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mediavillo' );

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
define( 'AUTH_KEY',         '^1@%G;s)}#3hKaUl0V@ YCgdu!gU4d]} Mn0/20(;Hn`6<jV/RKO^]8tn|<?<?XU' );
define( 'SECURE_AUTH_KEY',  ')sf+4`P0FT^`h)VD07yS;H[$GrfX6A|y6bQnUKIQ8?rW_Jufd~Sn-7?a[NDW68y*' );
define( 'LOGGED_IN_KEY',    '#tFdMVRd+`XzxP+Je,}~DN (TDI^pG.dsF&`(CVTJnI!}8Bmh[whHh`R)9NB=mnE' );
define( 'NONCE_KEY',        'AViq&QW.KfaChzID*PXVkrtC_QWljV5}zJEO7Ism!Ie:U;gbR?CmqUh,2iek[u7D' );
define( 'AUTH_SALT',        'm(7H1wwp1zs-&aG5L$T0n8R4,>M:?H3T4-wSxrlcyNU dz$NU0e@wNt;DTp>SAkw' );
define( 'SECURE_AUTH_SALT', '{A(~OK$lLjO%IQW(l 7!_HJ+s%BJ(Sz>x(UQy W{1$!=m.(9^=^MBMWA~1Jo=Nuu' );
define( 'LOGGED_IN_SALT',   'SCg08#l_]g9A}q(g0HZL9$qrD6~%`C|(IOI$Z1$HCb^+%o}SuLthd|vQM#=QtIw@' );
define( 'NONCE_SALT',       '*sn*(p+Fga{cw7;DE;is-e_T9}m`vyAXL$V%L6}hiSR>Jm~th9ll:-e7>Y*t U3Z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '4c_';

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
