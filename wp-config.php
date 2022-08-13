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
define( 'DB_NAME', 'git' );

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
define( 'AUTH_KEY',         'W#>)vtTm#0%Q^9.;Tno!r|+3_fC%cWP?LX3}y~SReos#lP)6b@QqKFQ(Ua(I=!}u' );
define( 'SECURE_AUTH_KEY',  ';rnPQE(`Wr=[rwKuk}bsIU,obc]MB<w`m&cflU3[c,kuua6;OX -;|As~EzBVI%8' );
define( 'LOGGED_IN_KEY',    'bQAiUw}8iswEMKSO;RZ>JgHB8NaUC~r]=zxtT$bx(mV_/GF32DMGE_hstmHt8.<1' );
define( 'NONCE_KEY',        'J:kk|KYFPat48`4LN<dq,o/J`AUU>mq?LnwXYG>jRdvqY$BW1615cNi}}mQz}-V_' );
define( 'AUTH_SALT',        'GmCv,>HN(~s1$B O8flaHy0UcE~Bo)H>L*0Y{;-mb5mp:6V>Q3}{#N6f4Cnc]oie' );
define( 'SECURE_AUTH_SALT', '2/w3Rre2Ex0zArc0wHG`zh=r`qW2C>~%D`q;Z];^n/qHK!v{p@deZH}W`cSR!%?;' );
define( 'LOGGED_IN_SALT',   'GFwgC>W2xFO,7vuq.h&*qz?+JhQHkpZ{ lQJ_5Ds<C=513W!N09>]`z30okI|i~w' );
define( 'NONCE_SALT',       ')@71gS,&*C{=T<)B^J&z^4`a0Si8HpB:XXJe>9(k$W2f}t#.U`#V%j^>NP;,`q)z' );

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
