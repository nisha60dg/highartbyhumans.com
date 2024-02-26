<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'highartbyhumans_com' );

/** MySQL database username */
define( 'DB_USER', 'highartbyhum' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vousichkaumWeckFoHanovoawgEet7' );

/** MySQL hostname */
define( 'DB_HOST', 'highar1.sql.ghserv.net' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'yqd43u9iwfsppwayrn15ug78n7o1po' );
define( 'SECURE_AUTH_KEY',  'y1b2y6d0hwcakj2drv5u778kszy800' );
define( 'LOGGED_IN_KEY',    'x8zvulyums04b1eco1slug2m5huwws' );
define( 'NONCE_KEY',        '53hi04yzq76nr1eoq9ve0xctham5av' );
define( 'AUTH_SALT',        '2zkrvqtgoz28vef8szvein8gt8kvt6' );
define( 'SECURE_AUTH_SALT', 'ox17b10tvdhfmt2n1usnaerhz5fabf' );
define( 'LOGGED_IN_SALT',   'b6s79amqzj3v3di1uw45qldal35p0o' );
define( 'NONCE_SALT',       'efy3vblr88tf4qcct9vcvkvj1hfodc' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
