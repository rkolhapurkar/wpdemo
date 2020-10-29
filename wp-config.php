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
define( 'DB_NAME', 'wpdemo' );

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
define( 'AUTH_KEY',         'I:rry~yu9xc)7}Y?}Oq2%`EL9ZWh:WneC+1`@Waw$;z6.oc0FT3zIP?d]aU;/=]A' );
define( 'SECURE_AUTH_KEY',  '%saeWIhjkQr^1pbu}33/a]2Z,vP]6}[7AyU;&5T.s0>j)x8.zEDkQ,6/xZ_*KHN+' );
define( 'LOGGED_IN_KEY',    '#=O!;?ga/~d`:DL86~!w*ACmp5*MbjT1G#g8#BCe/W*![?,op<CK$,<qvJsGjo}T' );
define( 'NONCE_KEY',        '+|#N^|2iRPjXsOP/$UI~Up3lD]+Ny;jOtQ0EEbhg/Q7Bn]0}.>}Pb(tuMhIJPp@1' );
define( 'AUTH_SALT',        '-TR]p7)n9IPZKU64TtIDYFU5^|)`5:m|3sxa.J;8DEG`r8IP2$E7~&,,T5<|&@d?' );
define( 'SECURE_AUTH_SALT', 'ByW_y8f6Ykj+t2O_G.~AuJ+0/EIpdC[KiA(Y=b;cm6Nl?Aaz+x_x9Gzu~ejsb1/n' );
define( 'LOGGED_IN_SALT',   'V&ZV]baw^Zyw+mW~7nO:&az*<3?V45Vq}?XBCKHhRz8P{lhj.:y=R..#oP&T.XIk' );
define( 'NONCE_SALT',       'rd23*H^fLti,v?ylr>:?!Z<>wIm[yudqAd$IZ:V^3UjcW$Cn=vE`z*|CF.-J~X|O' );

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
