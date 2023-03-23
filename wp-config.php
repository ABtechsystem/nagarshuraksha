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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '$+H]6QeQ8+kJVPy&<3U+L9@Yxom!e/Gbv5!n]JGy43_f5$c3=;axS<!Sis|Yv*DK' );
define( 'SECURE_AUTH_KEY',  'ZG<waeB&ndu$)>dqMG8`;R6*T*:kwC?@qI6oY.GB*HH:bk_@vSK-d#ecU<@6&pPc' );
define( 'LOGGED_IN_KEY',    '1*RtQp&<]f[~NMX WSJ%T=jf7hKU. XM& hVm)w5,80iS,?7=b:g)!XTUhRa[]k-' );
define( 'NONCE_KEY',        '|BCQZ%KP<vaP|%KY}6)r/Z|gmhxSs4ISq/uYlo2.I5$-A_<{xtP^u]*~+bi=bodq' );
define( 'AUTH_SALT',        'v4C$d=PStWN36e&DC;6r]HfjjRvyA :}p%:U@&@?CY[eXC(cE`V|~#i0/mL|6n3Z' );
define( 'SECURE_AUTH_SALT', ';SLX5aav.7h*uz+3(2|$OOu0/F&KX0 E]Z^5]sn8F>;O|@_&(M1g>m]]zNVc7Fv<' );
define( 'LOGGED_IN_SALT',   '!k4s%`,EfHWyry(2/w&bPXf7p*tqnYN 9.7@!*^kL5xDl*#rk8ZHjTL+2KN_@%~)' );
define( 'NONCE_SALT',       '{Cb/  5tR+9g;b];E<Li5&! h7T_wI@VBn(I2;jb@w~ &>ARt|y%7XTv{{N`](l8' );

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
