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
define( 'DB_NAME', 'testgit' );

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
define( 'AUTH_KEY',         'Dn(d *8A0{;:R9cBTZJ;Wk>?m5 9b=qbCHXz1F{~N/8p$NP`64q5`$?96OI)DF[0' );
define( 'SECURE_AUTH_KEY',  '%JZ(]F!x8e~Gp2izTxJDEy>Vs>4RAWmma&Jg23Y2>l<f:kMK%YbM5:E4yH^@r)Gf' );
define( 'LOGGED_IN_KEY',    ':6<u-.?7p|!|{~A39*{uHH!_AvbruaTq7D_9p(*;8{yC]lW(m<Ox2h!/`8F28t?O' );
define( 'NONCE_KEY',        '*G06l~d*DwI6>0uHX%~a-Dev#WYW,*6+bJmyF2#.4Rmd4~<^O-gj[KBbM/~.@78T' );
define( 'AUTH_SALT',        '3@&YR&]^LC+)#_hm-XGs*h^`=7QuC>#/Q8P3d2X&*Rn_/=k-N]U  VvX4o:p12ZB' );
define( 'SECURE_AUTH_SALT', 'j 40jpv/R6>W(GU{P7TD.=PlTsqYNUwk9Hc%%w/M$xD I6|nID*xo}= xp,7QY3%' );
define( 'LOGGED_IN_SALT',   '%T+?d~`@b6ReT0K-AB<:eEHZj/%Lzc:nD(qr?CFUi^$3O,J>QqoXC<09Bx3<q4DP' );
define( 'NONCE_SALT',       't%$Y^8Aq6meZ~r^7NVqTsfU)RgHxrG_5Y&npZxdTC@UwArT|09QH~D7m@PtB*@tY' );

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
