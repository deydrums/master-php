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
define( 'DB_NAME', 'aprendiendo-wp' );

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
define( 'AUTH_KEY',         ']!^7Y$a5L;|Cmk5ii>s_%)^<IT^v;E)CtX}wCoUa{9~z7W~da)HcDenwOkgU>Jve' );
define( 'SECURE_AUTH_KEY',  's pNj4voE!kznBmk|F0(<qZ(+ooF^iaLY=^Mc<b91<b;_R$xu^&7EG>QNnOzN`o]' );
define( 'LOGGED_IN_KEY',    ';=4F0,^_]eZvv9l$-?AS$8$8*D~V$ b(@rQ!xm%_AZCa$v PWY<b0^JA:Z/2]cu{' );
define( 'NONCE_KEY',        '|}[wEaR;pCoLHtVj/Lm?C~(+eM7z6@5YSgE*vpZSMr-!w%DUV+9rLmCh>>@hUCY3' );
define( 'AUTH_SALT',        'AgL85ieP#>*e0r8K_DIo& xoMUJJia2z8_,YH1Sh-w$Jk,r{Gp.1x4&J4Y3dE*ba' );
define( 'SECURE_AUTH_SALT', '-c=8PO *7*I7||y0&Rb- Ra{@Hiu)l[sH0A PdYx}wR`prm-P+*GY.. ^kYUBk&?' );
define( 'LOGGED_IN_SALT',   '@v%.Frk%1g:l>fESE#b6^Mo1Tr}S4 8kqKPVI#Qd2k)@yF2|@mfh*9Hdo-kBy?uC' );
define( 'NONCE_SALT',       'W4Fclo4WNo(;^@$fG?fBR0_1:Ll? .1y >nqE^Qj`Bu%sG1P.jQBp1$FP^sUB)}9' );

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
