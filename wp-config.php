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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'class-practice' );

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
define( 'AUTH_KEY',         'M^=SoY0%@MH)48/&&K+,x12nl!x%2gG&!|BQYroX3D4(9wFRRN?{S2FL:.;jNA){' );
define( 'SECURE_AUTH_KEY',  'rbmrTVnfa]|TYppO+O&/+meREwOE7+hevbOv#_Z;W #cU^p)4>d~LP!E=Xjdi9p9' );
define( 'LOGGED_IN_KEY',    'of_a501xYw0fn&d|}lfRh(:3s?`*88k=go(&050M+5qw2zB.d|@,,ak/en[<!]:g' );
define( 'NONCE_KEY',        '`Z*5-#`!fOc%(%0(a8~B^,D/lrTHK:)4L7/I6VTX|Ym/oRi<U1EY.4V>zpo(KsMP' );
define( 'AUTH_SALT',        'Eo`(^X!p1,:oFyi5q:=PR14+@fi|T K$@}=eC{2pv{[[<Fnf6#tz(q!t:z5wE:bY' );
define( 'SECURE_AUTH_SALT', 'WpYwZ/5YAl(4`/=J)#5d2aVm.H-jsgSb4uIcM(kl*2w]U;D`aA@U5Q_MgCW*aw$M' );
define( 'LOGGED_IN_SALT',   'sM0wDJH^:K**.#5pctf#e}5SHXU.y:S7-W;FQAE#7q(?=#c=j!$&]tFfbx=Ikd*?' );
define( 'NONCE_SALT',       'd6lGB=CGYupMY`1(j,D;$q$G?J!X?$O%k2ARj%sl9c6DQ2iW+9E@1,nt{Z_y4#vP' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
