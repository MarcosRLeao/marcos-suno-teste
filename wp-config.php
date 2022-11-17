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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'r,!wvZ>AsYm2/SW_sKQb-3hMN,w_hoC-Ala <0n85C?CDj#>+JYS{MK!;[q,>6gh' );
define( 'SECURE_AUTH_KEY',  '8u|,R)g$`Ui,VOg<}X<g3^smsb_cAryrwA|vPC%+09Bm<P.[yh)F~G1!;@bb2p4[' );
define( 'LOGGED_IN_KEY',    'QvKz&UxfvJe/xh`Gxx31Hw=`}oMeblHoH2e-,OSGWYwCjj?=*zy.[i||Y*uiyeN(' );
define( 'NONCE_KEY',        'FL}AvEm+S]#PE/Yw&h$]k|^+S:)(x)RV9B1-vHKc=.~q}l,!ju|B;fHj0H~9xi$#' );
define( 'AUTH_SALT',        'eh{N@FD>-p*iR$%j0JuXuVe/20x%7 X$}0cG8$mIIa7pifzh{ZhWQFaz|UN#p.B:' );
define( 'SECURE_AUTH_SALT', '%;seV(XC.-T0q=F4o4}<mDq4JFvPKzk5!/45@p<+fWz>{K$Odk>,kF%Ca-_-JwgJ' );
define( 'LOGGED_IN_SALT',   '8LaXoWO~a-y[>%c)nEWO#F<m|-d[,-*!EF3HXjXAl]}Ym4/b]m,DfUKJQxL!kl|6' );
define( 'NONCE_SALT',       '&[8P4xO}7kb[W&z^Ogi04}-#}mz~;FZ&YN3ism-n$[u:^;iTGcQw/3mt=,kz$wXp' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_REDIS_HOST', 'redis' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';